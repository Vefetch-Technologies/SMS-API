	<?php 
	include_once 'header.php'; 
	include_once '../admin/model/db.php';
	include_once '../admin/controller/common_functions.php';
	

	$conn = db_connect();
	$condition = "(`user_id`=".$user_details['id'].") ";
	$result = select('*','`files`',$condition,$conn);
	if (isset($_GET['status'])) {
		if ($_GET['status'] == "queued") {
			echo "<div class='alert alert-success'><strong>Success!</strong> Indicates a successful or positive action.</div";
		}else{
			if ($_GET['status'] == "error") {
				echo "<div class='alert alert-danger'><strong>Sorry!</strong> set last fiels as integer</div";
			}else{
			if ($_GET['status'] == "file_exists") {
				echo "<div class='alert alert-danger'><strong>Sorry!</strong> File already exists</div";
			}
			}
		}
	}
?>
<div id="response"></div>
<div>
	<h1>Grouping</h1>
	<hr style="border-top: 1px solid #191616">
</div>
<h3>Upload File</h3>
	<form action="../controller/grouping_controller.php" method="post" enctype="multipart/form-data">
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
	</form>
	<hr style="border-top: 1px solid #191616">
	<?php 
	if($result == "empty"){
		echo "no data found";
	}else{
		foreach ($result as $value) {
			$file_name[] = $value['file_name'];
		}
	?>
	<h3>Uploaded Files</h3>
	<div style="text-align:center;">
		<table class="table">
			<?php  
				foreach ($result as $value) {
					echo "<tr>";
						echo "<td>";
						echo "<a href='grouping_view.php?file_name=".$value['file_name']."'>".$value['file_name']."</a>";
						echo "</td>";
						echo "<td>";
						$file = "../files/".$user_details['email_id']."/".$value['file_name'];
						echo "<a href='delete_file_group.php?file_name=".$value['file_name']."'><button type='button' class='btn btn-danger' style='width:208px;'> Delete </button></a><a href='".$file."' download><button type='button' class='btn btn-primary' style='width:208px;margin-left: 1%;'> Download </button></a>";
						echo "</td>";
					echo "</tr>";
				}

			?>
		</table>
	</div>
	<?php 	} ?>
	


<?php include_once 'footer.php'; ?>