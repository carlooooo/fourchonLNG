<?php
// This is to check if the request is coming from a specific URL
if(isset($_SERVER['HTTP_REFERER'])) {
  //do what you need to do here if it's set
   }
else
{
  header("location: index.php");
   //it was not sent, perform your default actions here
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
  </head>
  <body>

  </body>
</html>
