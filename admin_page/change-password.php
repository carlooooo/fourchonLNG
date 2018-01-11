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

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Change Password</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="Enter old password"><br>
            <input class="form-control" name="password" id="password" onkeyup='check();' type="password" placeholder="Enter New password"><br>
            <input class="form-control" name="confirm_password" id="confirm_password"  onkeyup='check();'type="password" placeholder="Enter Re-enter password">
              <span id='message'></span>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Reset Password</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="login.html">Login Page</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>




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
    // document.getElementById('message').style.color = 'green';
    // document.getElementById('message').innerHTML = 'Password match';
  }
  else {
      $("#password").css("border","1px solid red");
      $("#confirm_password").css("border","1px solid red");
    // document.getElementById('message').style.color = 'red';
    // document.getElementById('message').innerHTML = 'Password did not match';
  }
  if (document.getElementById('password').value.length < 8 || document.getElementById('confirm_password').value.length < 8) {
  document.getElementById('message').style.color = 'red';
  document.getElementById('message').innerHTML = 'Password atleast 8 characters';
  }
  else{
    document.getElementById('message').innerHTML = ' ';
  }
}
</script>





</html>
