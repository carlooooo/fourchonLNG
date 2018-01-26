<?php

	session_start();
	include 'config.php';
  $out_content2 = $_POST['out_content2'];
  $hid2 = $_POST['hid2'];

$sql1 = $db->prepare("SELECT * FROM webcontent_outreach WHERE webpage_name='$hid2'");
$sql1->execute();
$num = $sql1->rowCount();
		if ($num==0) {
      $sql = $db->prepare("INSERT INTO webcontent_outreach SET position_description='$out_content2', position_order='1', position_status='1', webpage_name='$hid2'");
      $sql->execute();
		}
		else{
      $que = $db->query("SELECT MAX(position_id) as posid FROM webcontent_outreach WHERE webpage_name='$hid2'");
      $que ->execute();
      $temp = $que->fetch(PDO::FETCH_ASSOC);
      $last =  $temp['posid'];
$last++;
      $sql = $db->prepare("INSERT INTO webcontent_outreach SET position_description='$out_content2', position_order='$last', position_status='1', webpage_name='$hid2'");
      $sql->execute();
		}
 ?>
