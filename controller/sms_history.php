<?php 
	include_once '../admin/model/db.php';
	include_once '../controller/default_functions.php';
	// print_r($_POST);
	$conn = sms_db_connect("not_checked");
	$condition = " `SendTime` between '".$_POST['starting_date']." 00:00:00' and '".$_POST['ending_date']." 23:59:59'";
	$result = select('`Id`, `MessageFrom`, `SendTime`, `ReceiveTime`, `MessageTo`, `MessageText`, `StatusText`', '`MessageLog`', $condition, $conn);
	// print_r($result);
	$conn1 = sms_db_connect("checked");
	$condition1 = " `SendTime` between '".$_POST['starting_date']." 00:00:00' and '".$_POST['ending_date']." 23:59:59'";
	$result1 = select('`Id`, `MessageFrom`, `SendTime`, `ReceiveTime`, `MessageTo`, `MessageText`, `StatusText`', '`MessageLog`', $condition1, $conn1);
	// print_r($result1);
	$final_result = array_merge($result, $result1);
	// print_r($final_result);
	function date_compare($a, $b)
	{
	    $t1 = strtotime($a['SendTime']);
	    $t2 = strtotime($b['SendTime']);
	    return $t1 - $t2;
	}    
	usort($final_result, 'date_compare');
	$html = '<table class="table"><thead>
				<tr>
				<th>ID</th>
				<th>Message From</th>
				<th>Send Time</th>
				<th>Receive Time</th>
				<th>Message To</th>
				<th>Message Text</th>
				<th>Status Text</th>
				</tr>
				</thead><tbody>';
	foreach ($final_result as $value) {
		$html = $html . "<td>".$value['Id']."</td><td>".$value['MessageFrom']."</td><td>".$value['SendTime']."</td><td>".$value['ReceiveTime']."</td><td>".$value['MessageTo']."</td><td>".$value['MessageText']."</td><tr>";
	}
	print_r($html);

