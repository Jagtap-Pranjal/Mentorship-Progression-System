<?php

	$date_notice = $_POST['date_notice'];
	$notice = $_POST['notice'];
// Database connection
	$conn = new mysqli('localhost','root','','mentorship_systemdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into add_notice(date_notice, notice) values(?,?)");
		
		$stmt->bind_param("ss",$date_notice, $notice);
		$execval = $stmt->execute();

		echo $execval;
		echo $alert="<script>alert('Notice Send Successfully !!')
    window.location='adminvalidation_hod.php'</script>";
		$stmt->close();
		$conn->close();
	}
?>
