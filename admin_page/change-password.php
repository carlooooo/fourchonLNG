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

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php include'navbar.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Change Password</li>
      </ol>
      <div class="row">
        <div class="col-12">

          <div class="card card-login mx-auto mt-5">
            <div class="card-body">
              <form action="change-passwordchk.php" method="post">
                <div class="form-group">
                  <input class="form-control" name="old_password" type="password" placeholder="Enter old password" required><br>
                  <input class="form-control" name="password" id="password" onkeyup='check();' type="password" placeholder="Enter New password" required><br>
                  <input class="form-control" name="confirm_password" id="confirm_password"  onkeyup='check();'type="password" placeholder="Enter Re-enter password" required>
                    <!-- <span id='message'></span> -->
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="change" id="change" value="Change Password" disabled>
              </form>
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

<script type="text/javascript">
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
      $("#password").css("border","1px solid green");
      $("#confirm_password").css("border","1px solid green");
        $('#change').prop('disabled', false);
    // document.getElementById('message').style.color = 'green';
    // document.getElementById('message').innerHTML = 'Password match';
    if (document.getElementById('password').value.length < 8 || document.getElementById('confirm_password').value.length < 8) {
    // document.getElementById('message').style.color = 'red';
    // document.getElementById('message').innerHTML = 'Password atleast 8 characters';
      $('#change').prop('disabled', true);
    }
    else{
      $('#change').prop('disabled', false);
      // document.getElementById('message').innerHTML = ' ';
    }
  }
  else {
      $('#change').prop('disabled', true);
      $("#password").css("border","1px solid red");
      $("#confirm_password").css("border","1px solid red");
    // document.getElementById('message').style.color = 'red';
    // document.getElementById('message').innerHTML = 'Password did not match';
  }
}
</script>
</html>
