<?php include_once 'header.php'; ?>
<?php include_once 'sms_count.php'; ?>
<div>
	<h1>Single SMS</h1>
	<hr style="border-top: 1px solid #191616">
</div>
	<table class="table" style="width:44%;">
	<tr>
			<td>
				<p>Sender ID :- </p>
			</td>
			<td>
				<select class="form-control">
					<option>VVMHSS</option>
					<option>VANISC</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<p>Enter Mobile Number :- </p>
			</td>
			<td>
				<input type="text" name="customer_mobile_number" class="form-control" placeholder="Mobile Number"  onkeypress="return isNumber(event)" required autofocus><br/><div>(split the numbers by giving comma)</div>
			</td>
		</tr>
		<tr>
			<td>
				<p>Enter Message :- </p>
			</td>
			<td>
				<textarea class="form-control" rows="5" id="comment" onkeyup="countChar(this)"></textarea>
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
				<button type="submit" class="btn btn-success" style="width: 208px;">Send SMS</button>
			</td>
		</tr>
	</table>
	<hr>

<?php include_once 'footer.php'; ?>
