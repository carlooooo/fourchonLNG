<?php
include 'sessionchk.php';
include 'config.php';

$email = $_SESSION['userid'];
$sql = $db->prepare("SELECT * FROM login WHERE email='$email'");
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
$pass = $row['password'];

if ($_POST['change']) {
  $old_pass = $_POST['old_password'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $hashold = md5($old_pass);
  $hashpassword = md5($password);
  if ($pass!=$hashold) {
      echo "<script>alert('Incorrect old password.');
      window.location.href = 'change-password.php';</script>";
  }
  else{
  $sql = $db->prepare("UPDATE login SET password='$hashpassword' WHERE email='$email'");
  $sql->execute();
      echo "<script>alert('Change Successfully.');
      window.location.href = 'dashboard.php';</script>";
  }
}
?>
