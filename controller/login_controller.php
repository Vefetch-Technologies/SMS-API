<?php 

	include_once 'default_functions.php';
	include_once '../admin/model/db.php';
	
	$con = db_connect();
	$email = sanitize($_POST['email'], $con);
	$password = sanitize($_POST['password'], $con);
	$id = get_id($email, $password, $con);
	if($id!="empty"){
		print_r($id);
	}else{
		echo "no data";
	}

	function get_id($email, $password, $con){
		$selected_row = select('*', 'users', array("email_id"=>$email, "password"=>$password), $con);
		return $selected_row;
	}


