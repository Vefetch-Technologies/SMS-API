<?php 
	include_once 'header.php';
	phpinfo();
	// add_user($_POST);

	// function add_user($raw_values){
	// 	if(empty($raw_values)){
	// 		echo "no values present";
	// 	}else{
	// 		$conn = db_connect();
	// 		$raw_values['date_of_creation'] = date("Y-m-d h:i:sa");
	// 		$raw_values['active'] = "true";
	// 		if(insert('users', $raw_values, $conn)){
	// 			echo "Inserted";
	// 			$message_content = "Thanks for subscribing Vefetch SMS Services, email : ".$raw_values['email_id']." password : ".$raw_values['password']." log on to vefetch.com/sms_api";
	// 			send_message("VFETCH", $raw_values['mobile_number'], $message_content);
	// 			// send_mail()
	// 			// create_folder($raw_values['email_id']);
	// 		}else{
	// 			echo "Not Inserted";
	// 		}
	// 	}
	// }