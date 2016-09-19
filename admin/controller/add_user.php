<?php 

	include_once 'header.php';
<<<<<<< HEAD
	add_user($_POST);

	function add_user($raw_values){
		if(empty($raw_values)){
			echo "no values present";
=======

	add_user($_POST);
	function add_user($raw_values){
		if(empty($raw_values)){
			header('location: ../view/404.php');
>>>>>>> 32046267f4fa10fcdb158f5b35b4592dca544202
		}else{
			$conn = db_connect();
			$raw_values['date_of_creation'] = date("Y-m-d h:i:sa");
			$raw_values['active'] = "true";
			if(insert('users', $raw_values, $conn)){
<<<<<<< HEAD
				echo "Inserted";
				$message_content = "Thanks for subscribing Vefetch SMS Services, email : ".$raw_values['email_id']." password : ".$raw_values['password']." log on to vefetch.com/sms_api";
				send_message("VFETCH", $raw_values['mobile_number'], $message_content);
				// send_mail()
				// create_folder($raw_values['email_id']);
			}else{
				echo "Not Inserted";
=======
				$message_content = "Thanks for subscribing Vefetch SMS Services, email : ".$raw_values['email_id']." password : ".$raw_values['password']." log on to vefetch.com/sms_api";
				// send_message("VFETCH", $raw_values['mobile_number'], $message_content);
				// send_mail($row_values['email_id']);
				create_folder($raw_values['email_id']);
				header('location: ../view/add_user.php?status=inserted');
			}else{
				header('location: ../view/404.php?status=not_inserted');
>>>>>>> 32046267f4fa10fcdb158f5b35b4592dca544202
			}
		}
	}

	function test_for_git(){
		echo "test ";
	}
	function test_for_git(){
		echo "test ";
	}