<?php 
	include_once 'header.php';
	include_once '../controller/view_controller.php';
	if(!empty($_GET['file_name'])){
		$file_path = "../files/".$user_details['email_id']."/".$_GET['file_name'];
		$final_excel_data = get_excel_data($file_path);
	}
?>	<div id="">
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
					<input style="width: 70px;float: right;" type="button" class="form-control" id="next" value="Next">
				</tr>
			</thead>
			<tbody>
				
					<?php
						$html_content = "";
						$index = 1;
						foreach ($final_excel_data as $key => $excel_data_array) {
							echo "<tr id=row".$index.">";
							foreach ($excel_data_array as $key => $value) {
								echo "<td>".$value."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|</td>";
							}
							echo '<td ><input type="checkbox" value="checked" id="check'.$index.'"  /></td></tr>';
							$index++;

						}
						echo $html_content;
					?>
				</tr>
			</tbody>
		</table>
	</div>
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
			contents = [];
			$('body').on('click', "#next", function(){
				j = 1;
				for (i = 1; i <<?php echo $index; ?>; i++) {
					if ($('#check'+i).is(":checked")) {
						contents[j] = (document.getElementById('row'+j+'').innerText).split('|');
						j++;	
					}
				}
				// window.location.href = "../controller/bulk_sms_controller.php?content="+contents[]+"";
			$.ajax({
				type: "POST",
				url: "../controller/bulk_sms_controller.php",
				data: {content : contents},
				success: function(data) {  
					console.log(data);          
				}
			});
			});
		});
	</script>
	<style type="text/css">
		.highlight_row {
			background: rgba(165, 165, 165, 0.48);
		}
	</style>
<?php include_once 'footer.php'; ?>
