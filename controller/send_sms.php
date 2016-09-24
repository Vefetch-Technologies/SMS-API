<?php 
	include_once '../admin/controller/common_functions.php';
	include_once '../admin/model/db.php';
	send_message($_POST['sender_id'], $_POST['mobile_numbers'], $_POST['message']);
	print_r($_POST);