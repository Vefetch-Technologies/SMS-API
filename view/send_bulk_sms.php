<?php
	session_start();
	// echo "<pre>";
	// print_r($_SESSION['bulk_data']);
	// print_r($_POST);
	$message = $_POST['bulk_message'];
	$headers = $_SESSION['headers'];
	foreach ($headers as $value) {
		$modified_headers[] = "#".$value."#";
	}
	// print_r($modified_headers);
	$bulk_data = $_SESSION['bulk_data'];
	$i = 0;
	foreach ($bulk_data as  $value) {
		$test_msg = str_replace($modified_headers,$bulk_data[$i],$message);
		
		echo $test_msg;
		echo $bulk_data[$i]['number'];
		$i++;
	}
	// print_r($test_msg);
 ?>