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

<script type="text/javascript">
function readURL1(input) {
if (input.files && input.files[0]) {
var reader1 = new FileReader();
reader1.onload = function (e) {
    document.getElementById('preview1').src=e.target.result;
}
reader1.readAsDataURL(input.files[0]);
}
}

</script>

<script type="text/javascript">
function readURL2(input) {
if (input.files && input.files[0]) {
var reader2 = new FileReader();
reader2.onload = function (e) {
    document.getElementById('preview2').src=e.target.result;
}
reader2.readAsDataURL(input.files[0]);
}
}

</script>


<style media="screen">
hr {
  background-color:#e9ecef;;
  color:#e9ecef;;
  -webkit-transform:rotate(90deg);
  position:absolute;
  top: 200px;
  width:1000px;
  height:2px;
  left:60px;
}
</style>
</head>
<body>
  <div class="container row">
  <div class="col-sm-3">
    <form class="" action="#" method="post"  enctype="multipart/form-data">
    <b> Upload an Image for Header </b><br><br>
    <img src="images/Background.png"  id="preview" name="preview" style="min-height:120px min-width:200px; max-height:120px" height="200" width="150" /><br>
    <input type="file" name="image" value="Upload Photo" onchange="readURL(this)"; required style="margin-top:15px;"><br><br>
    <input type="submit" class="btn btn-primary" name="change" value="Change" style="width:68%;margin-top:15px;">
    </form>
  </div>
  <?php
  $name = $_GET['name'];
  $sql1 = $db->prepare("SELECT logo_header FROM web_images WHERE webpage_name='$name'");
  $sql1->execute();
  $row = $sql1->fetch( PDO::FETCH_ASSOC );
  if (!empty($row['logo_header'])) {
   ?>
  <div class="col-sm-3">
<?php
  echo'<img src="data:image/jpeg;base64,'.base64_encode( $row['logo_header'] ).'" width="224" height="36"/>';}?>
  </div>
  <hr>
  <div class="col-sm-3">
    <form class="" action="#" method="post"  enctype="multipart/form-data">
    <b> Upload an Image for Footer </b><br><br>
    <img src="images/Background.png"  id="preview1" name="preview1" style="min-height:120px min-width:200px; max-height:120px" height="200" width="150" /><br>
    <input type="file" name="image1" value="Upload Photo" onchange="readURL1(this)"; required style="margin-top:15px;"><br><br>
    <input type="submit" class="btn btn-primary" name="change1" value="Change" style="width:68%;margin-top:15px;">
    </form>
  </div>
  <?php
  $name = $_GET['name'];
  $sql1 = $db->prepare("SELECT logo_footer FROM web_images WHERE webpage_name='$name'");
  $sql1->execute();
  $row = $sql1->fetch( PDO::FETCH_ASSOC );
  if (!empty($row['logo_footer'])) {
   ?>
  <div class="col-sm-2">

<?php
  echo'<img src="data:image/jpeg;base64,'.base64_encode( $row['logo_footer'] ).'" width="224" height="36"/>';}?>
  </div>
  <br><br><br><br>  <br><br><br><br>  <br><br><br><br>  <br><br><br><br>
  <div class="col-sm-3">
    <form class="" action="#" method="post"  enctype="multipart/form-data">
    <b> Upload an Icon </b><br><br>
    <img src="images/Background.png"  id="preview2" name="preview2" style="min-height:32px min-width:49px; max-height:120px" height="32" width="49" /><br>
    <input type="file" name="image2" value="Upload Photo" onchange="readURL2(this)"; required style="margin-top:15px;"><br><br>
    <input type="submit" class="btn btn-primary" name="change2" value="Change" style="width:68%;margin-top:15px;">
    </form>
  </div>
  <?php
  $name = $_GET['name'];
  $sql1 = $db->prepare("SELECT icon FROM web_images WHERE webpage_name='$name'");
  $sql1->execute();
  $row = $sql1->fetch( PDO::FETCH_ASSOC );
  if (!empty($row['icon'])) {
   ?>
  <div class="col-sm-2">

<?php
  echo'<img src="data:image/jpeg;base64,'.base64_encode( $row['icon'] ).'" width="49" height="32"/>';}?>
  </div>
  </div>

  </body>
  </html>
  <?php

  include'config.php';
            if(isset($_POST['change']))
                {
              $imageName = $_FILES["image"]["name"];
              $imageData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
              $imageType = $_FILES["image"]["type"];
                    if(substr($imageType,0,5) == "image")
                        {
                          $sql1 = $db->prepare("SELECT * FROM web_images WHERE webpage_name='$name'");
                          $sql1->execute();
                          $num = $sql1->rowCount();
                          if ($num==0) {
                          $stmt = $db->prepare("INSERT INTO web_images (logo_header, webpage_name) VALUES ('$imageData', '$name')");
                          $stmt->execute();
                          echo "<script>alert('Save successfully')</script>";
                          echo "<meta http-equiv='refresh' content='0'>";
                          }
                          else{
                            $stmt = $db->prepare("UPDATE web_images SET logo_header='$imageData' WHERE webpage_name='$name'");
                            $stmt->execute();
                            echo "<script>alert('Save successfully')</script>";
                            echo "<meta http-equiv='refresh' content='0'>";
                        }
                        }
                    else
                        {
                          echo "<script>alert('Only Images are allowed!')</script>";
                        }
                }

                if(isset($_POST['change1']))
                    {
                  $imageName = $_FILES["image1"]["name"];
                  $imageData = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
                  $imageType = $_FILES["image1"]["type"];
                        if(substr($imageType,0,5) == "image")
                            {
                              $sql1 = $db->prepare("SELECT * FROM web_images WHERE webpage_name='$name'");
                              $sql1->execute();
                              $num = $sql1->rowCount();
                              if ($num==0) {
                              $stmt = $db->prepare("INSERT INTO web_images (logo_footer, webpage_name) VALUES ('$imageData', '$name')");
                              $stmt->execute();
                              echo "<script>alert('Save successfully')</script>";
                              echo "<meta http-equiv='refresh' content='0'>";
                              }
                              else{
                                $stmt = $db->prepare("UPDATE web_images SET logo_footer='$imageData' WHERE webpage_name='$name'");
                                $stmt->execute();
                                echo "<script>alert('Save successfully')</script>";
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
                            }
                        else
                            {
                              echo "<script>alert('Only Images are allowed!')</script>";
                            }
                    }

                    if(isset($_POST['change2']))
                        {
                      $imageName = $_FILES["image2"]["name"];
                      $imageData = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
                      $imageType = $_FILES["image2"]["type"];
                            if(substr($imageType,0,5) == "image")
                                {
                                  $sql1 = $db->prepare("SELECT * FROM web_images WHERE webpage_name='$name'");
                                  $sql1->execute();
                                  $num = $sql1->rowCount();
                                  if ($num==0) {
                                  $stmt = $db->prepare("INSERT INTO web_images (icon, webpage_name) VALUES ('$imageData', '$name')");
                                  $stmt->execute();
                                  echo "<script>alert('Save successfully')</script>";
                                  echo "<meta http-equiv='refresh' content='0'>";
                                  }
                                  else{
                                    $stmt = $db->prepare("UPDATE web_images SET icon='$imageData' WHERE webpage_name='$name'");
                                    $stmt->execute();
                                    echo "<script>alert('Save successfully')</script>";
                                    echo "<meta http-equiv='refresh' content='0'>";
                                }
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
