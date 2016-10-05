<script type="text/javascript">

	function countChar(val) {
		len = val.value.length;
		if(document.getElementById('bulk_unicode').checked) {
			<?php get_check_code("unicode"); ?>
		} else {
			<?php get_check_code("normal"); ?>
		}
	}
	$('body').on('click', "#bulk_unicode", function(){
		len = $("#bulk_message").val().length;
		if(document.getElementById('bulk_unicode').checked) {
			<?php get_check_code("unicode"); ?>
		} else {
			<?php get_check_code("normal"); ?>
		}
	});
	$('body').on('click', "#send_bulk_sms", function(){
		bulk_sender_id = document.getElementById('bulk_sender_id').value;
		bulk_message = document.getElementById('bulk_message').value;
		bulk_unicode = document.getElementById('bulk_unicode').value;
			$.ajax({
			type: "POST",
			url: ".php",
			data: {sender_id : sender_id, mobile_numbers : mobile_numbers, message : message, unicode : unicode},
			success: function(data) {  
				console.log(data);          
			}
		});

	});
	function isNumber(evt) {
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode(key);
		var regex = /^[0-9,]+$/;
		if (!regex.test(key)) {
			theEvent.returnValue = false;
		if (theEvent.preventDefault) theEvent.preventDefault();
		}
	}
	</script>
<?php 
	function get_check_code($for){
		include_once '../admin/model/db.php';
		$conn = db_connect();
		if($for == "unicode"){
			$sql = "SELECT `$for` FROM `sms_count`";
		}else{
			$sql = "SELECT `$for` FROM `sms_count`";
		}
		$result = execute_query($sql, $conn);
		while($row = mysqli_fetch_array($result)) {
			$selected_rows[] = $row[$for];
		}
		
		$i = 1;
		$condition="";
		foreach ($selected_rows as $key => $value) {
			if($i == 1){
				$condition = $condition."if(len <".$value."){document.getElementById('bulk_charNum').innerHTML = 'Number of SMS will Send = ".$i." ('+ len + ')'; }";
			} else{
				$condition = $condition."else if(len <".$value."){document.getElementById('bulk_charNum').innerHTML = 'Number of SMS will Send = ".$i." ('+ len + ')'; }";
			}
			$i++;
		}
		echo $condition;
	}
?>