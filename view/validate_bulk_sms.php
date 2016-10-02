<?php 
	include_once 'header.php';
	include_once 'bulk_sms_count.php';
	$headers = explode('|',$_POST['hidden_format_name']);
	$_SESSION['headers'] = $headers;
	$raw_data = $_POST['user_data'];
	// print_r($raw_data);
	// print_r($headers);
	$j = 0;
	$count = count($headers)-1;
	$headers[$count] = "number";
	foreach ($raw_data as $value) {
		$final_values = explode('|', $value);
		// print_r($final_values);
		for ($i=0; $i < count($final_values); $i++) { 
			$final_data[$j][$headers[$i]] = $final_values[$i];
		}
		$j++;
	}
	// print_r($final_data);
	$count_final_data = count($final_data)-1;
	// print_r($count_final_data);
	$_SESSION['bulk_data'] = $final_data;
?>	
	<div>
		<h1>Enter Your Message</h1>
		<hr style="border-top: 1px solid #191616">
	</div>
	<form action="send_bulk_sms.php" method="post" >
		<table class="table">
			<tr>
				<td>
				<p>Enter Message :- </p>
				</td>
				<td>
				<textarea class="form-control" rows="5" id="bulk_message" name="message" onkeyup="countChar(this)" required></textarea>
				<div id="bulk_charNum">Number of SMS will Send = 1 (0)</div>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
				<label><input type="checkbox" id="bulk_unicode" name="unicode"> Unicode</label>
				</td>
			</tr>
				<tr>
				<td>
				</td>
				<td>
				<button type="submit" class="btn btn-success" id="send_bulk_sms" style="width: 208px;">Send SMS</button>
				</td>
			</tr>
		</table>
	</form>
<?php include_once '../view/footer.php'; ?>