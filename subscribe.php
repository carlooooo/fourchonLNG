<?php

	session_start();
	include 'admin_page/config.php';

$semail = $_POST['semail2'];

$sql1 = $db->prepare("SELECT * FROM newsletter WHERE subscriber_email='$semail'");
$sql1->execute();
$num = $sql1->rowCount();
		if ($num==0) {
			$sql = $db->prepare("INSERT INTO newsletter SET subscriber_email='$semail'");
	    $sql->execute();
		}
		else{
			echo ' <script>
			alert("Email already subscribed.");
			 </script>';
		}
 ?>
