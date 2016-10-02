<?php 
	session_start();
	
	function landing_page_session_check(){
		if(empty($_SESSION["user_details"])){
			header('location:login.php');
		}
	}

	function is__array($value){
		return is_array($value);
	}

	function emptty($value){
		return empty($value);
	}

	function login_page_session_check(){
		if(isset($_SESSION["user_details"])){
			header('location:single_sms.php');
		}
	}

	function log_out(){
		session_destroy();   
	}

?>