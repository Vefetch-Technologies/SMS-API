<?php include_once 'header.php'; ?>

<div>
	<h1>Bulk SMS</h1>
	<hr style="border-top: 1px solid #191616">
</div>
<h3>Upload File</h3>
	<table class="table">
		<tr>
			<td>
				<input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required>
			</td>
			<td>
				<button type="submit" class="btn btn-success" style="width: 208px;">Upload</button>
			</td>
		</tr>
	</table>
	<hr style="border-top: 1px solid #191616">
	<h3>Uploaded Files</h3>
	<div style="text-align:center;">
		<table class="table">
			<tr>
				<td>
					<a href="#"> test page .xlxs</a>
				</td>
				<td>
					<button type="submit" class="btn btn-danger" style="width: 208px;">Delete</button>
				</td>

			</tr>
			<tr>
				<td>
					<a href="#"> test page .xlxs</a>
				</td>
				<td>
					<button type="submit" class="btn btn-danger" style="width: 208px;">Delete</button>
				</td>

			</tr>
			<tr>
				<td>
					<a href="#"> test page .xlxs</a>
				</td>
				<td>
					<button type="submit" class="btn btn-danger" style="width: 208px;">Delete</button>
				</td>

			</tr>
		</table>
	</div>
	


<?php include_once 'footer.php'; ?>
