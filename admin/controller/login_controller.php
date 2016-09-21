<?php
	include_once '../model/db.php';
	session_start();
	$conn = db_connect();
	$sql="SELECT * FROM users WHERE `email_id` ='".$_POST["email"]."' AND `password` = '".$_POST["password"]."'";
	$result = $conn->query($sql);
	if($row = $result->fetch_assoc()){
		$_SESSION[]=$row;
		header("Location:../view/home.php");
	}else{
		header("Location: ../view/login.php?status=false");
	}