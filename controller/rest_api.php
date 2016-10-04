<?php 
	include_once '../admin/controller/common_functions.php';
	include_once '../admin/model/db.php';
	$con = db_connect();
	$email = sanitize($_GET['email'], $con);
	$password = sanitize($_GET['password'], $con);
	$raw_data = get_raw_data($email, $password, $con);
	if($raw_data!="empty"){
		print_r($raw_data);
		$url=$_SERVER['REQUEST_URI'];
		$parts = parse_url($url);
		parse_str($parts['query'], $query);
		echo $query['message'];

	}else{
		echo "Username or password is not valid!";
	}


	function get_raw_data($email, $password, $con){
		$selected_row = select('*', 'users', array("email_id"=>$email, "password"=>$password), $con);
		return $selected_row[0];
	}
