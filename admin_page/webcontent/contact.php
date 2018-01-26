<!DOCTYPE html>
<html lang="en">
<head>
  <title>jquery drag and drop save to database php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
</head>
<body>

<div class="container">
<h3>Contact Us Contents</h3>
<?php
include 'config.php';
$name = $_GET['name'];
$que = $db->prepare("SELECT * FROM webcontent_contactus WHERE webpage_name = '$name'");
$que->execute();
$count = $que->rowCount();
$row = $que->fetch(PDO::FETCH_ASSOC);
if ($count==0) {
  $project_name = "";
  $project_location = "";
  $project_director_name = "";
  $project_director_email = "";
  $ddministration_outreach_name = "";
  $ddministration_outreach_email = "";
}else{
  $project_name = $row['project_name'];
  $project_location = $row['project_location'];
  $project_director_name = $row['proj_director_name'];
  $project_director_email = $row['proj_director_email'];
  $ddministration_outreach_name = $row['admin_outreach_name'];
  $ddministration_outreach_email = $row['admin_outreach_email'];
}
?>
<form action="webcontent/save_contact.php" method="post">
<input type="text" class="form-control" value="<?php echo $project_name; ?>" name="project_name" placeholder="Project Name"><br>
<input type="text" class="form-control" value="<?php echo $project_location; ?>" name="project_location" placeholder="Project Location"><br>
<input type="text" class="form-control" value="<?php echo $project_director_name; ?>" name="project_director_name" placeholder="Project Director Name"><br>
<input type="text" class="form-control" value="<?php echo $project_director_email; ?>" name="project_director_email" placeholder="Project Director Email"><br>
<input type="text" class="form-control" value="<?php echo $ddministration_outreach_name; ?>" name="ddministration_outreach_name" placeholder="Administration and Outreach Name"><br>
<input type="text" class="form-control" value="<?php echo $ddministration_outreach_email; ?>" name="ddministration_outreach_email" placeholder="Administration and Outreach Email"><br>
<input type="hidden" name="webname" value="<?php echo $name; ?>"><br>
<input type="submit"class="btn btn-primary" name="submit" value="Submit">
</form>
</div>
</body>
</html>
