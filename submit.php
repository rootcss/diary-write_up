<?php
	$main = $_POST['main'];
	$dd = $_POST['dd'];
	$mm = $_POST['mm'];
	$yy = $_POST['yy'];
	$post = $_POST['post'];
	$date = $dd."/".$mm."/".$yy;
	function mynl2br($text) { 
		return strtr($text, array("\r\n" => '<br />', "\r" => '<br />', "\n" => '<br />')); 
	}
	require_once('./class.php');
	require_once('./authen.php');
	$obj = new Main();
	$obj->insertData($obj->encrypt($main), $obj->encrypt(mynl2br($post)), $obj->encrypt($date));	

?>