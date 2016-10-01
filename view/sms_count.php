<script type="text/javascript">

	function countChar(val) {
		len = val.value.length;
		if(document.getElementById('unicode').checked) {
			<?php get_check_code("unicode"); ?>
		} else {
			<?php get_check_code("normal"); ?>
		}
	}
	$('body').on('click', "#unicode", function(){
		len = $("#message").val().length;
		if(document.getElementById('unicode').checked) {
			<?php get_check_code("unicode"); ?>
		} else {
			<?php get_check_code("normal"); ?>
		}
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
	$('body').on('click', "#send_single_sms", function(){
		$("form").submit(function(e){
			e.preventDefault();
		});
         var sender_id = $("#sender_id").val();
         var mobile_numbers = $("#mobile_numbers").val();
         var message = $("#message").val();
        if(document.getElementById('unicode').checked) {
			var unicode = "checked";
		} else {
			var unicode = "not_checked";
		}
        console.log(sender_id+ "," + mobile_numbers+ "," + message+ "," + unicode);
		$.ajax({
			type: "POST",
			url: "../controller/send_sms.php",
			data: {sender_id : sender_id, mobile_numbers : mobile_numbers, message : message, unicode : unicode},
			success: function(data) {  
				console.log(data);          
			}
		});

	});
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
				$condition = $condition."if(len <".$value."){document.getElementById('charNum').innerHTML = 'Number of SMS will Send = ".$i." ('+ len + ')'; }";
			} else{
				$condition = $condition."else if(len <".$value."){document.getElementById('charNum').innerHTML = 'Number of SMS will Send = ".$i." ('+ len + ')'; }";
			}
			$i++;
		}
		echo $condition;
	}
?>

