<?php 

	function send_message($sender_id, $phone_number, $message_content){
		$conn = sms_db_connect();
		$sql = "INSERT INTO `MessageOut` (`MessageFrom`, `MessageTo` , `MessageText`) VALUES ('$sender_id', '$phone_number', '$message_content')";
		mysqli_set_charset($conn, 'utf8mb4'); 
		if(execute_query($sql, $conn)){
			echo "SMS Sent";
		}else{
			echo "not sent";
		}
	}