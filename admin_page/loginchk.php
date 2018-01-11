<?php
session_start();
include "config.php"; // database connection details stored here

$email=$_POST['email'];
$password=$_POST['password'];
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>

<title> Login Configuration </title>

	<link rel="shortcut icon" href="Background/favicon.jpg">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- bootstrap 3.0.2 -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Morris chart -->
	<link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- jvectormap -->
	<link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
	<!-- bootstrap wysihtml5 - text editor -->
	<link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

</head>

<body>

	<!-- header logo: style can be found in header.less -->
	<header class="header">
        <a href="#">
        	Login Configuration
        </a>

        <nav class="navbar navbar-static-top" role="navigation">

    </header>

<center style="margin-top:15%;">

	<?Php
		//$password=md5($password); // Encrypt the password before comparing
		//// Checking userid and password //////
		$msg='';

		$count=$db->prepare("select * from login where email=:email");
		$count->bindParam(":email",$email,PDO::PARAM_STR);

		if($count->execute()){
			$no=$count->rowCount();

			if($no <> 1) {
				echo"Account does not exist please "; echo"<a href='login.php'>try again ...</a> ";
			}
		else {
			$row = $count->fetch(PDO::FETCH_OBJ);

			if($row->password==md5($password)){
				$try = "";
				// Start session n redirect to last page
				$_SESSION['userid']=$row->email;
				$_SESSION['fullname']=$row->fullname;
				//echo " Inside session  ". $_SESSION['userid'];

				echo "<img src='images/ajax-loader (2).gif'>";
				echo "<BR>";
				echo" Welcome ".$row->fullname.", Login successful , please wait ... ";
				echo "<script language='JavaScript' type='text/JavaScript'>
        window.setTimeout(function() {
                window.location.href='dashboard.php';
            }, 5000);
				</script>";
			}
			else {
				$msg = " Login failed! Try again<br> <INPUT TYPE='button' class='btn btn-primary' VALUE='Back' onClick='history.go(-1);'>";
			} // end of if else for matching password
		} // end of if elase for matching number of records <>1

		}else{
			$msg = " Login failed, try again ... <br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'>";
		} //

		echo $msg;
		?>
</center>
</body>

</html>
