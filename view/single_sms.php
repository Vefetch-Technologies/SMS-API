<?php 
	include_once 'header.php'; 
 	include_once 'sms_count.php'; 
	include_once '../admin/controller/common_functions.php';
 	
 ?>
<div>
	<h1>Single SMS</h1>
	<hr style="border-top: 1px solid #191616">
</div>
	<form action="#">
		<input type="hidden" id="user_id" value="<?php echo $user_details['id'];?>">
		<table class="table" style="width:44%;">
			<tr>
				<td>
					<p>Sender ID :- </p>
				</td>
				<td>
					<select class="form-control" id="sender_id">
						<?php
							if(is__array($user_details['sender_id'])){
								foreach ($user_details['sender_id'] as $key => $sender_id) {
									echo $sender_id;
								} 
							}else{
								echo "<option>".$user_details['sender_id']."</option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<p>Enter Mobile Number :- </p>
				</td>
				<td>
					<input type="text" name="customer_mobile_number" class="form-control" placeholder="Mobile Number" id="mobile_numbers" onkeypress="return isNumber(event)" required autofocus><br/><div>(split the numbers by giving comma)</div>
				</td>
			</tr>
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
	</form>
	<hr>
	<div id="response"></div>

<?php include_once 'footer.php'; ?>
