<?php include_once 'header.php'; ?>

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
				<input type="number" name="customer_mobile_number" class="form-control" placeholder="Mobile Number" required autofocus><br/>
			</td>
		</tr>
		<tr>
			<td>
				<p>Enter Message :- </p>
			</td>
			<td>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<label><input type="checkbox" name="unicode" value="yes"> Unicode</label>
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
