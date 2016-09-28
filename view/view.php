<?php 
	include_once 'header.php';
	include_once '../controller/view_controller.php';
	if(!empty($_GET['file_name'])){
		$file_path = "../files/".$user_details['email_id']."/".$_GET['file_name'];
		$final_excel_data = get_excel_data($file_path);
	}
?>
	<table class="table table-hover">
		<thead>
			<tr>
			<!-- <th><label><input type="checkbox" id="checkAll">Check All</th></label> -->
				<?php 
					foreach ($final_excel_data[0] as $key => $heading) {
						echo "<th>".$heading."</th>";
					} 
					unset($final_excel_data[0]);
				?>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php
					$html_content = "";
					foreach ($final_excel_data as $key => $excel_data_array) {
						foreach ($excel_data_array as $key => $value) {
							echo "<td>".$value."</td>";
						}
						echo "</tr><tr>";
					}
					echo $html_content;
				?>
			</tr>
		</tbody>
	</table>
<?php include_once 'footer.php'; ?>
