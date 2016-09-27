<?php 
	include_once 'header.php';
	include_once '../controller/view_controller.php';
	if(!empty($_GET['file_name'])){
		$file_path = "../files/".$user_details['email_id']."/".$_GET['file_name'];
		echo "<pre>";
		get_excel_data($file_path);
	}
?>
<?php include_once 'footer.php'; ?>
