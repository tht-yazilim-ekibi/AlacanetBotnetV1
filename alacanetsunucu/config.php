<?php
	ob_start();
	session_start();
	date_default_timezone_set('Europe/Istanbul');
	
	$connect = mysqli_connect('localhost', 'u437836669_tht', 'b@P2XWyP^V', 'u437836669_tht');
	mysqli_set_charset($connect, 'utf8');
	
	function Output($json){
		header("Content-type: application/json; charset=utf-8");
		echo json_encode($json, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		exit();
	}
	
	
?>