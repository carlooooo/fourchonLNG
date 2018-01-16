<?php

	session_start();
	include 'admin_page/config.php';

$semail = $_POST['semail2'];


    $sql = $db->prepare("INSERT INTO newsletter SET subscriber_email='$semail'");
    $sql->execute();

 ?>
