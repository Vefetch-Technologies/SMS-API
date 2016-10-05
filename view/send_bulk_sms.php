<?php
	session_start();
	echo "<pre>";
	print_r($_SESSION['bulk_data']);
	print_r($_POST);
	$message = $_POST['message'];
	$headers = $_SESSION['headers'];
	foreach ($headers as $value) {
		$modified_headers[] = "#".$value."#";
	}
	print_r($modified_headers);
	$bulk_data = $_SESSION['bulk_data'];
	$i = 0;
	foreach ($bulk_data as  $value) {
		$test_msg[] = str_replace($modified_headers,$bulk_data[$i],$message);
		$i++;
	}
	print_r($test_msg);
 ?>