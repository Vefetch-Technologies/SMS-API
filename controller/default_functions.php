<?php 
	session_start();
	ini_set('max_execution_time', 300);
	ini_set('post_max_size', '500M');
	ini_set('upload_max_filesize', '500M');
	
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