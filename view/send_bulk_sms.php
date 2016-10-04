<?php
	session_start();
	echo "<pre>";
	print_r($_SESSION['bulk_data']);
	print_r($_POST);
	$message = $_POST['message'];
	$headers = $_SESSION['headers'];
	print_r($headers);
	$count = count($_SESSION['bulk_data']);
	echo "$count";

	$header_count = count($headers);
	echo $header_count;
	unset($headers[$header_count-1]);
	print_r($headers);
	 for ($i=0; $i <3 ; $i++) { 
		print_r($headers[$i]);
	}
	








// 	str_replace(
// 	$headers,
// 	array("replace", "items"),
// 	$message
// );

 ?>