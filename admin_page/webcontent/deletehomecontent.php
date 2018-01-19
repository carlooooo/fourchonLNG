<?php
include 'config.php';
$pid = $_GET['delete'];
$sql = $db->prepare("DELETE FROM webcontent_home WHERE position_id='$pid'");
if ($sql->execute()) {
  echo "<script>
    alert('Delete succesfully');
    window.history.go(-1);
  </script>";
} else {
    echo "Error deleting record ";
}




?>
