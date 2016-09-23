<?php 

	include_once 'default_functions.php';
	include_once '../admin/model/db.php';
	
	$con = db_connect();
	$email = sanitize($_POST['email'], $con);
	$password = sanitize($_POST['password'], $con);
	$raw_data = get_raw_data($email, $password, $con);
	if($raw_data!="empty"){
		create_session($raw_data);
		print_r($_SESSION);
		header('Location: ../view/single_sms.php');
	}else{
		echo "no data";
		header('Location: ../view/login.php?type=login_error');
	}

	function get_raw_data($email, $password, $con){
		$selected_row = select('*', 'users', array("email_id"=>$email, "password"=>$password), $con);
		return $selected_row;
	}

	function create_session($data){
		$user_details = $data['0'];
		$_SESSION["user_details"] = $user_details;
		if(isset($_SESSION['user_details'])){
			return true;
		}
		return false;
	}

