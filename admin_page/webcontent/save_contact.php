<?php
include 'config.php';
$project_name = $_POST['project_name'];
$project_location = $_POST['project_location'];
$project_director_name = $_POST['project_director_name'];
$project_director_email = $_POST['project_director_email'];
$ddministration_outreach_name = $_POST['ddministration_outreach_name'];
$ddministration_outreach_email = $_POST['ddministration_outreach_email'];
$webname = $_POST['webname'];

$que = $db->prepare("SELECT * FROM webcontent_contactus WHERE webpage_name = '$webname'");
$que->execute();
echo $count = $que->rowCount();

if ($count==0) {
  $stmt = $db->prepare("INSERT INTO webcontent_contactus(project_name, project_location, proj_director_name, proj_director_email, admin_outreach_name, admin_outreach_email, webpage_name)
  VALUES('$project_name','$project_location','$project_director_name','$project_director_email','$ddministration_outreach_name','$ddministration_outreach_email','$webname')");
  if ($stmt->execute()) {
    if (isset($_SERVER["HTTP_REFERER"])) {
      echo "<script>alert('Save successfully')</script>";
          header("Location: " . $_SERVER["HTTP_REFERER"]);
      }
  }
}else{
  $query = $db->prepare("UPDATE webcontent_contactus SET project_name='$project_name', project_location='$project_location', proj_director_name='$project_director_name',
     proj_director_email='$project_director_email', admin_outreach_name='$ddministration_outreach_name', admin_outreach_email='$ddministration_outreach_email'
     WHERE webpage_name = '$webname'");
   if ($query->execute()) {
     if (isset($_SERVER["HTTP_REFERER"])) {
       echo "<script>alert('Save successfully')</script>";
           header("Location: " . $_SERVER["HTTP_REFERER"]);
       }
   }
}
 ?>
