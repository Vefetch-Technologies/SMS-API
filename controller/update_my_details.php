<?php 
	include_once '../admin/model/db.php';
	include_once '../admin/controller/common_functions.php';
	session_start();
	$con = db_connect();
	$updated_details = 	array(
		"user_name" => $_POST['user_name'],
		"mobile_number" => $_POST['mobile_number'],
		"address" => $_POST['address'],
		"password" => $_POST['password'],
		"email_id" => $_POST['email_id'],
	);
	$conditions = array(
		"id" => $_POST['id']
	);
	if($val = update($updated_details, 'users', $conditions, $con)){
		session__update();
	}
	function session__update(){
		$_SESSION['user_details'] =array(
			"user_name" => $_POST['user_name'],
			"mobile_number" => $_POST['mobile_number'],
			"address" => $_POST['address'],
			"password" => $_POST['password'],
			"email_id" => $_POST['email_id']
		);
	}