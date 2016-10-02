<?php
	session_start();
	echo "<pre>";
	print_r($_SESSION['bulk_data']);
	print_r($_POST);
	$message = $_POST['message'];
	$headers = $_SESSION['headers'];
	print_r($headers);
	str_replace(
	   $headers,
	    array("replace", "items"),
    $message
);

 ?>