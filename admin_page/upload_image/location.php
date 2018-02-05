<!DOCTYPE html>
<html lang="en">
<head>
  <title>jquery drag and drop save to database php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <!-- <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->
  <script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
      document.getElementById('preview').src=e.target.result;
  }
  reader.readAsDataURL(input.files[0]);
}
}

</script>
</head>
<body>
  <div class="container row">
  <div class="col-sm-4">
    <form class="" action="#" method="post"  enctype="multipart/form-data">
    <b> Upload an Image </b><br><br>
    <img src="images/Background.png"  id="preview" name="preview" style="min-height:120px min-width:200px; max-height:120px" height="200" width="150" /><br>
    <input type="file" name="image" value="Upload Photo" onchange="readURL(this)"; required style="margin-top:15px;"><br><br>
    <input type="text" name="location_image_desc" placeholder="Image Description" class="form-control"><br><br><br>
    <input type="submit" class="btn btn-primary" name="change" value="Change" style="width:68%;margin-top:15px;">
    </form>
  </div>
  <?php
  // id, location_image, location_image_desc, webpage_name
  $name = $_GET['name'];
  $sql1 = $db->prepare("SELECT * FROM webimage_location WHERE webpage_name='$name'");
  $sql1->execute();
  while (  $row = $sql1->fetch( PDO::FETCH_ASSOC )) {

  if (!empty($row['location_image'])) {
   ?>
  <div class="col-sm-8">

<?php

  echo $row['location_image_desc'].'&emsp;&emsp;<img src="data:image/jpeg;base64,'.base64_encode( $row['location_image'] ).'" width="1110" height="340.78"/><br><br><br>';
  }}?>
  </div>
  </div>

  </body>
  </html>
  <?php

  include'config.php';
            if(isset($_POST['change']))
                {
              $location_image_desc = $_POST['location_image_desc'];
              $imageName = $_FILES["image"]["name"];
              $imageData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
              $imageType = $_FILES["image"]["type"];
              if ($location_image_desc=="") {
                $$location_image_desc="";
              }
                    if(substr($imageType,0,5) == "image")
                        {
                          $stmt = $db->prepare("INSERT INTO webimage_location (location_image, location_image_desc, webpage_name) VALUES ('$imageData', '$location_image_desc', '$name')");
                          $stmt->execute();
                          echo "<script>alert('Save successfully')</script>";
                          echo "<meta http-equiv='refresh' content='0'>";
                        }
                    else
                        {
                          echo "<script>alert('Only Images are allowed!')</script>";
                        }
                }
        ?>



  <!-- <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin-datatables.min.js"></script> -->
