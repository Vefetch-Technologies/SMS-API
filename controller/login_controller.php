<?php
	include_once '../admin/model/db.php';
	session_start();
	$conn = db_connect();
	$sql="SELECT * FROM users WHERE `email_id` ='".$_POST["email"]."' AND `password` = '".$_POST["password"]."'";
	$result = $conn->query($sql);
	if($row = $result->fetch_assoc()){
		$_SESSION=$row;
		header("Location:../view/single_sms.php");
	}else{
		header("Location: ../view/login.php?status=false");
	}