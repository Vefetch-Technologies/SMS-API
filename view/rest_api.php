<?php include_once 'header.php'; 
 	$words =  $_SERVER['REQUEST_URI'];
	$showword = explode('/',trim($words,'/'));
	 $url='http://' . $_SERVER['HTTP_HOST'].'/'.$showword[0];  
 	
	$remaining_url = "/controller/rest_api.php?email=".$user_details['email_id']."&password=".$user_details['password']."&message=testing%20thisd%20message&phone_number=".$user_details['mobile_number']."&sender_id=".$user_details['sender_id']."&unicode=0"

?>
	
				<input type="textbox" class="form-control" name="url" value="<?php echo $url.$remaining_url; ?>" >
				<br>
				<button class="btn btn-info col-md-3 pull-right" id="test" name="test">Test</button>
				<div id="response"></div>
				<script type="text/javascript">
					$('body').on('click', '#test', function(){
						url = '<?php echo $url.$remaining_url;?>';
						$.ajax(url, { 
							'success': function(data) {
								console.log(data);
								if (data == "SMS Sent") {
									document.getElementById('response').innerHTML = "<div class='alert alert-success col-md-6'><strong>Success!</strong>Message sent</div>"; 
								} else{
									document.getElementById('response').innerHTML = "<div class='alert alert-danger col-md-6'><strong>"+data+"</strong></div>"; 
								} 
							}
						});
					})
				 </script>

<?php include_once 'footer.php'; ?>
