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
<?php $name = $_GET['name']; ?>
<script src="jscolor.js"></script>
<form action="" method="POST">
Color: <input class="jscolor" value="ab2567" name="color">
<input class="btn btn-primary" type="submit" name="submit" value="Choose">
</form>
</div>
</body>
</html>
<?php
  if (isset($_POST['submit'])) {
      $col = $_POST['color'];
      $sql = $db->prepare("INSERT INTO web_themes SET theme_color='$col', webpage_name='$name'");
      $sql   ->execute();
  }
?>
