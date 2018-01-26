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
<h3>Theme Color</h3>
<?php
include 'config.php';
$name = $_GET['name'];
$que = $db->prepare("SELECT * FROM web_themes WHERE webpage_name = '$name'");
$que->execute();
$count = $que->rowCount();
$row = $que->fetch(PDO::FETCH_ASSOC);
if ($count==0) {
  $color = "ab2567";
}else{
    $color = $row['theme_color'];
}
?>
<script src="jscolor.js"></script>
<form action="" method="POST">
Color: <input class="jscolor" value="<?php echo $color; ?>" name="color">
<input class="btn btn-primary" type="submit" name="submit" value="Choose" onclick="window.location.reload();">
</form>
</div>
</body>
</html>
<?php
  if (isset($_POST['submit'])) {
      $col = $_POST['color'];
      $que = $db->prepare("SELECT * FROM web_themes WHERE webpage_name = '$name'");
      $que->execute();
      $count = $que->rowCount();

      if ($count==0) {
        $stmt = $db->prepare("INSERT INTO web_themes SET theme_color='$col', webpage_name='$name'");
        $stmt->execute();
        echo "<script>alert('Save successfully')</script>";
        echo "<meta http-equiv='refresh' content='0'>";
      }else{
        $stmt = $db->prepare("UPDATE web_themes SET theme_color='$col' WHERE webpage_name = '$name'");
        $stmt->execute();
        echo "<script>alert('Save successfully')</script>";
        echo "<meta http-equiv='refresh' content='0'>";
      }
  }
?>
