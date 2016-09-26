<?php

/**
 * Person
 * 
 */
class People {

	public $name = 'lod boy';

	public function cry () {

		echo 'kung Fu';

	}

}

$p = new People();

print_r($p);

$p->cry(); 

echo '<br />', $p->name;

$b = array('name'=>'lod body2', 'height'=>'kung fu2', 'fun'=>function () {});
echo '<br />',$b['name'];
 
?>