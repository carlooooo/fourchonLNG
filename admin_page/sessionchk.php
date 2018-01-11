<?php
session_start();
if (empty($_SESSION['userid']) || empty($_SESSION['fullname'])) {
 header("location: login.php");
}
 ?>
