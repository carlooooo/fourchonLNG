<?php include 'sessionchk.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<style>
           .file_drag_area
           {
                width:600px;
                height:400px;
                border:2px dashed #ccc;
                line-height:400px;
                text-align:center;
                font-size:24px;
           }
           .file_drag_over{
                color:#000;
                border-color:#000;
           }
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include'navbar.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Upload Image</li>
      </ol>
      <div class="row">
        <div class="col-12">
            <div class="card-body">
              <div class="container" style="width:700px;" align="center">
              <div class="file_drag_area">
                     Drop Files Here
                </div>
                <div id="uploaded_file"></div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php include 'admin_footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>
</html>
<!--
<label>password :
  <input name="password" id="password" type="password" onkeyup='check();' />
</label>
<br>
<label>confirm password:
  <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' />
  <span id='message'></span>
</label> -->

<script>
 $(document).ready(function(){
      $('.file_drag_area').on('dragover', function(){
           $(this).addClass('file_drag_over');
           return false;
      });
      $('.file_drag_area').on('dragleave', function(){
           $(this).removeClass('file_drag_over');
           return false;
      });
      $('.file_drag_area').on('drop', function(e){
           e.preventDefault();
           $(this).removeClass('file_drag_over');
           var formData = new FormData();
           var files_list = e.originalEvent.dataTransfer.files;
           //console.log(files_list);
           for(var i=0; i<files_list.length; i++)
           {
                formData.append('file[]', files_list[i]);
           }
           //console.log(formData);
           $.ajax({
                url:"upload_carouselchk.php",
                method:"POST",
                data:formData,
                contentType:false,
                cache: false,
                processData: false,
                success:function(data){
                     $('#uploaded_file').html(data);
                }
           })
      });
 });
 </script>
</html>
