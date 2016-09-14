<?php include_once 'header.php'; ?>
<div class="home_header">
	<h1>Welcome Vani, to SMS History</h1>
	<hr style="border-top: 1px solid #191616">
</div>
<div class="home_content">
	<table class="table">
		<tr>
			<td>
				<input type="date" name="starting_date" class="form-control" id="starting_date" value="<?php echo date("Y-m-d"); ?>">
			</td>
			<td>
				<input type="date" name="ending_date" class="form-control" id="ending_date" value="<?php echo date("Y-m-d"); ?>">
			</td>
			<td>
				<input type="submit" value="Get me report!" id="report" class="btn btn-success">
			</td>
		</tr>
	</table>
</div>
<?php include_once 'footer.php'; ?>
