<?php 
	if(isset($_POST['submit_btn'])){
		$to 		= $_POST['toaddress'];
		$subject 	= $_POST['subject'];
		$email 		= $_POST['email'];
		mail($to,$subject,$email);
		header("location:index.php");
		
	}
?>