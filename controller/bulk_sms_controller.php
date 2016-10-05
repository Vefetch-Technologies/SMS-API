<?php 
	include_once '../view/header.php';
	echo "<pre>";
	$headers = explode('|',$_POST['hidden_format_name']);
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
	?>
	<table>
	<tr>
		<td>
			<p>Enter Message :- </p>
		</td>
		<td>
			<textarea class="form-control" rows="5" id="message" onkeyup="countChar(this)" required></textarea>
			<div id="charNum">Number of SMS will Send = 1 (0)</div>
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<label><input type="checkbox" id="unicode" name="unicode"> Unicode</label>
		</td>
	</tr>
	<tr>
		<td>
		</td>
		<td>
			<button type="submit" class="btn btn-success" id="send_single_sms" style="width: 208px;">Send SMS</button>
		</td>
	</tr>
</table>
<?php include_once '../view/footer.php'; ?>