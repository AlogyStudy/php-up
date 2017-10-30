
## SQL注入

SQL注入：利用现有应用程序，攻击者将精心构造的SQL语句注入到后台数据库，并使得数据库引擎成功执行。

> SQL注入特点

- 变种极多
- 攻击简单
- 危害极大

> SQL注入攻击的危害性

- 未经授权情况下操作数据库中的数据
- 恶意篡改网页的内容
- 私自添加系统账号或者是数据库使用者账号
- 网页木马

> SQL注入工具

- 扫描检测
	AWVS,web扫描器，APPScan Web扫描器等，抓包代理工具burpsuite
- 验证测试
	sqlmap

> 手工探测SQL漏洞

通过拼接SQL语句来判断和验证漏洞

```
// 测试语句
id=1'
and 1=1
and 1=2
order by num
union 联合查询
and 1=2 union select 1,2,3,4
user()
database()
group_coucat(table_name) from information_schema.tables where table_schema=tableName // table名十六进制
select * from downloads where id=1 and 1=2 union select 1,2,3,4,5,6,group_concat(username) from members;
```
-----
```
?id=1 and 1=2 union select 1,2,3,4,5,6,load_file('/etc/passwd')
?id=1 and 1=2 union select 1,2,3,4,5,6,@@version
?id=1 and 1=2 union select 1,2,3,4,5,6,@@version_compile_os
?id=1 and 1=2 union select 1,2,3,4,5,6,@@basedir
?id=1 and 1=2 union select 1,2,3,4,5,6,@@datadir
```

> SQL防御

- 代码层防御
- 第三方安全程序及设备

**代码层防御**

编码阶段:
- 对输入进行验证
- 静态查询
- 最小权限
- 通用防注入脚本
- 安全函数（PHP程序：addslashes, mysql_real_escape_string等）

测试阶段:
- 代码验证

产品化阶段:
- Web应用安全网关


**第三方安全程序**

- 软件产品
    mod_security
    互联网安全防护产品（阿里云盾，安全宝等同类产品）
- 硬件
	web应用防火墙


> SQL语句验证

```
function CheckSql($db_string, $querytype = 'select') {
    global $cfg_cookie_encode;
    $clean = '';
    $error = '';
    $old_pos = 0;
    $pos = -1;
    $log_file = DEDEINC.'/../data/'.md5($cfg_cookie_encode).'_safe.txt';
    $userIP = GetIP();
    $getUrl = GetCurUrl();

    // 如果是普通查询语句，直接过滤一些特殊语法
    if ($querytype=='select') {
        $notallow1 = "[^0-9a-z@\._-]{1,}(union|sleep|benchmark|load_file|outfile)[^0-9a-z@\.-]{1,}";

        // $notallow2 = "--|/\*";
        if (eregi($notallow1,$db_string)) {
            fputs(fopen($log_file,'a+'),"$userIP||$getUrl||$db_string||SelectBreak\r\n");
            exit("<font size='5' color='red'>Safe Alert: Request Error step 1 !</font>");
        }
    }

    // 完整的SQL检查
    while (true) {
        $pos = strpos($db_string, '\'', $pos + 1);
        if ($pos === false) {
            break;
        }
        $clean .= substr($db_string, $old_pos, $pos - $old_pos);
        while (true) {
            $pos1 = strpos($db_string, '\'', $pos + 1);
            $pos2 = strpos($db_string, '\\', $pos + 1);
            if ($pos1 === false) {
                break;
            } elseif ($pos2 == false || $pos2 > $pos1) {
                $pos = $pos1;
                break;
            }
            $pos = $pos2 + 1;
        }
        $clean .= '$s$';
        $old_pos = $pos + 1;
    }
    $clean .= substr($db_string, $old_pos);
    $clean = trim(strtolower(preg_replace(array('~\s+~s' ), array(' '), $clean)));

    // 老版本的Mysql并不支持union，常用的程序里也不使用union，但是一些黑客使用它，所以检查它
    if (strpos($clean, 'union') !== false && preg_match('~(^|[^a-z])union($|[^[a-z])~s', $clean) != 0) {
        $fail = true;
        $error="union detect";
    }

    // 发布版本的程序可能比较少包括--,#这样的注释，但是黑客经常使用它们
    elseif (strpos($clean, '/*') > 2 || strpos($clean, '--') !== false || strpos($clean, '#') !== false) {
        $fail = true;
        $error="comment detect";
    }

    // 这些函数不会被使用，但是黑客会用它来操作文件，down掉数据库
    elseif (strpos($clean, 'sleep') !== false && preg_match('~(^|[^a-z])sleep($|[^[a-z])~s', $clean) != 0) {
        $fail = true;
        $error="slown down detect";
    }
    elseif (strpos($clean, 'benchmark') !== false && preg_match('~(^|[^a-z])benchmark($|[^[a-z])~s', $clean) != 0) {
        $fail = true;
        $error="slown down detect";
    } elseif (strpos($clean, 'load_file') !== false && preg_match('~(^|[^a-z])load_file($|[^[a-z])~s', $clean) != 0) {
        $fail = true;
        $error="file fun detect";
    } elseif (strpos($clean, 'into outfile') !== false && preg_match('~(^|[^a-z])into\s+outfile($|[^[a-z])~s', $clean) != 0) {
        $fail = true;
        $error="file fun detect";
    }

    // 老版本的MYSQL不支持子查询，程序里可能也用得少，但是黑客可以使用它来查询数据库敏感信息
    elseif (preg_match('~\([^)]*?select~s', $clean) != 0) {
        $fail = true;
        $error="sub select detect";
    }
}
```

## 前端攻击

> 前端攻击成因

网站的脚本通过最终一些手段生成HTML，如果HTML中含有一些恶意代码。


> 跨站脚本攻击（XSS）

- 反射型
- 存储型
- 蠕虫病毒 // 网络病毒，复制之后指数型递增 （例如: 访问关注量）

XSS英文全称`（Cross-Site-Scripting）`，为了区别于`cascading style sheets`层叠样式表（CSS）因此缩写成XSS

造成结果：
1. 用户浏览器中运行攻击者的恶意脚本，从而导致cookie信息被窃取，攻击者能够假冒用户的信息，进行登录。
2. 攻击者能够获取用户的权限，来恶意使用web的功能。
3. 可以向用户输入伪造的输入表单，通过钓鱼的方式来窃取用户的个人信息。


XSS攻击的危害

- 钓鱼攻击
- 盗取cookie

```
// 钓鱼攻击
?id=1'<script>alert(/xss/)</script>
?id=1'<iframe src="http://www.baidu.com"></iframe> // 通过些形式（邮件，分享），来诱发用户访问
```
------
```
// 获取cookie
?id=1'<script>alert(document.cookie)</script> // 通过一段脚本程序（包括document.cookie）将用户的信息发送到远程的恶意网站，恶意网站专门接收信息。(DVWA)
```
