<?php 
	
	include_once 'curd_operations.php';

	function db_connect(){
		$connection = mysqli_connect("localhost", "root", "", "sms_api");
		if (!$connection) {
			die("Connection failed: " . mysqli_connect_error());
			exit();
		}
		return $connection;
	}

	function sms_db_connect(){
		$connection = mysqli_connect('10.0.2.1', "smpp", "smpp1234", "smpp", 3306);
		if (!$connection) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		}
		return $connection;
	}

	function execute_query($query, $link){
		if(!empty($link)){
			return mysqli_query($link, $query);
		}else{
			return mysqli_query(db_connect(), $query);
		}
	}

	function sanitize($input, $con){
		return mysqli_real_escape_string($con, $input);
	}
