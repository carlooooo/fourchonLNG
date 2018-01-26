<?php

	session_start();
	include 'config.php';
  $bullet_title2 = $_POST['bullet_title2'];
  $bullet_content2 = $_POST['bullet_content2'];
  $hidd2 = $_POST['hidd2'];
      $sql = $db->prepare("INSERT INTO webcontent_desc_bullet SET bullet_title='$bullet_title2', bullet_description='$bullet_content2', webpage_name='$hidd2'");
      $sql->execute();

 ?>
