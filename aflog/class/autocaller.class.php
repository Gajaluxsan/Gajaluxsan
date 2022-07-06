<?php
spl_autoload_register('autocaller');

function autocaller($classname){
$path ="class/";
$ext =".class.php";
$fullpath =$path.$classname.$ext;
if(!file_exists($fullpath)){
	$ext1 =".class.php";
	$fullpath1 =$classname.$ext1;
	if (!file_exists($fullpath1)) {
		$path2 ="../";
	$ext2 =".php";
	$fullpath2 =$path2.$classname.$ext2;
	if (!file_exists($fullpath2)) {

	}
	else{
		include_once $fullpath2;
	}
	}
	else{
		include_once $fullpath1;
	}
}
else{
include_once $fullpath;
}
}