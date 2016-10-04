<?php 

	function send_message($sender_id, $phone_number, $message_content){
		$conn = sms_db_connect();
		$sql = "INSERT INTO `MessageOut` (`MessageFrom`, `MessageTo` , `MessageText`) VALUES ('$sender_id', '$phone_number', '$message_content')";
		echo "$sql";
		// mysqli_set_charset($conn, 'utf8mb4'); 
		// if(execute_query($sql, $conn)){
		// 	echo "SMS Sent";
		// }else{
		// 	echo "not sent";
		// }
	}

	function create_folder($folder_name){
		$path = "../../files/$folder_name";
		if (!mkdir($path, 777, true)) {
			header('location: ../view/404.php?status=folder_not_created');
		}else{
			echo "folder created!";
		}
	}

	function is__array($value){
		return is_array($value);
	}
		session_start();

	function landing_page_session_check(){
		if(empty($_SESSION["user_details"])){
			header('location:login.php');
		}
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
