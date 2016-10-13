<?php 
	include_once '../admin/controller/common_functions.php';
	include_once '../admin/model/db.php';

	// $sql = 'SELECT SendTime, MessageText, MessageTo, StatusText FROM MessageLog WHERE SendTime LIKE "%'.date("Y-m-d").'%" AND MessageFrom = "LEGEND"';
	
	function get_today_sent_or_failed_data(){
		$sql = 'SELECT SendTime, MessageText, MessageTo, StatusText, StatusCode FROM MessageLog WHERE SendTime LIKE "%'.date("Y-m-d").'%" ORDER by SendTime DESC';
		$conn = sms_db_connect(0);
		$result = execute_query($sql, $conn);
		while($row = get_array_from_object($result)) {
			$selected_row[] = $row;
		}
		return $selected_row;
	}

	function get_qued_data(){
		$sql = 'SELECT COUNT(MessageFrom) FROM MessageOut WHERE MessageFrom = "LEGEND"';
	
		$conn = sms_db_connect(0);
		$result = execute_query($sql, $conn);
		$row = get_array_from_object($result);
		return $row;
	}

	