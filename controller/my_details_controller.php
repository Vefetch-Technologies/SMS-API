<script type="text/javascript">
$('body').on('click', "#submit", function(){
	$("form").submit(function(e){
		e.preventDefault();
	});
	var user_name = $("#user_name").val();
	var mobile_number = $("#mobile_number").val();
	var address = $("#address").val();
	var password = $("#password").val();
	var sender_id = $("#sender_id").val();
	console.log(user_name+"," + mobile_number+"," + address+"," +password+"," +sender_id);
});
</script>