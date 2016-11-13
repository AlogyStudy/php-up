<meta charset="UTF-8"/>

<?php

	$uploads_dir = './';
	
	sleep(5);
	
	if ( move_uploaded_file($_FILES['pic']['tmp_name'], './'.$_FILES['pic']['name']) ) {
		echo '移动成功';
	} else {
		echo '移动失败';
	}
	
?>


