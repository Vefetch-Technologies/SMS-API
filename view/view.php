<?php 
	include_once 'header.php';
	include_once '../controller/view_controller.php';
	if(!empty($_GET['file_name'])){
		$file_path = "../files/".$user_details['email_id']."/".$_GET['file_name'];
		$final_excel_data = get_excel_data($file_path);
	}
?>
	<table class="table table-hover record_table">
		<thead>
			<tr>
				<?php 
					foreach ($final_excel_data[0] as $key => $heading) {
						echo "<th>".$heading."</th>";
					} 
					unset($final_excel_data[0]);
				?>
				<th><input type="checkbox" id="checkAll"/> Check All</th>
			</tr>
		</thead>
		<tbody>
			
				<?php
					$html_content = "";
					foreach ($final_excel_data as $key => $excel_data_array) {
						echo '<tr>';
						foreach ($excel_data_array as $key => $value) {
							echo "<td>".$value."</td>";
						}
						echo '<td ><input type="checkbox" /></td></tr>';
					}
					echo $html_content;
				?>
			</tr>
		</tbody>
	</table>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.record_table tr').click(function(event) {
				if (event.target.type !== 'checkbox') {
					$(':checkbox', this).trigger('click');
				}
			});
			
			$('body').on('change', '#checkAll', function(){
				$("input:checkbox").prop('checked', $(this).prop("checked"));
			});
		});
	</script>
	<style type="text/css">
		.highlight_row {
			background: rgba(165, 165, 165, 0.48);
		}
	</style>
<?php include_once 'footer.php'; ?>
