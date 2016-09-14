<?php include_once 'header.php'; ?>

<div>
	<h1>Hi Vani, Update your details here.</h1>
	<hr style="border-top: 1px solid #191616">
</div>
	<table class="table" style="width:44%;">
	<tr>
			<td>
				<p>Name/Organization :- </p>
			</td>
			<td>
				<input type="text" name="customer_name" class="form-control" placeholder="Name" value="Vani" required autofocus><br/>
			</td>
		</tr>
		<tr>
			<td>
				<p>Enter Mobile Number :- </p>
			</td>
			<td>
				<input type="number" name="customer_mobile_number" class="form-control" placeholder="Mobile Number" value="9842972047" required autofocus><br/>
			</td>
		</tr>
		<tr>
			<td>
				<p>Address :- </p>
			</td>
			<td>
				<textarea class="form-control" rows="5" id="comment">Vattur Mettupalayam, Thoratikadu, Tiruchengode(T.K) Namakkal(D.t)</textarea>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<button type="submit" class="btn btn-success" style="width: 208px;">Update</button>
			</td>
		</tr>
	</table>
	<hr>

<?php include_once 'footer.php'; ?>
