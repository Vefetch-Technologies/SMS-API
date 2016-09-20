<?php 

	function landing_page_session_check(){
		if(empty($_SESSION["userDetails"])){
			header('location:login.php');
		}
	}

	function is__array($value){
		return is_array($value);
	}

	function emptty($value){
		return empty($value);
	}

?>