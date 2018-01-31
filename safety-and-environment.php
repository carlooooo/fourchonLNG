
<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php');
include('include/config.php');
include"dbclass.php";
$db4 = new db();
 ?>
  <body>
    <div class="container">
      <img class="img-fluid" src="img/slide5.jpg" alt="">
      <h3 class="my-4">Fourchon LNG: <small>Safety and The Environment</small></h3>
      <div class="row">
        <div class="col-md-12">
          <?php
          $name = $_GET['name'];
        	 $data_lists = $db4->select('webcontent_safety',"where webpage_name='".$name."' order by position_order asc");

        	 foreach($data_lists as $data_list){
             // echo "<p>".$data_list['position_description']."</p>";
             $data = $data_list['position_description'];


             echo "<p>".$Result = str_replace( "\n", '<br />', $data )."</p>";
           }
            ?>
        </div>
      </div>
    <!-- /.container -->
    <!-- Footer -->
  </div>
  <?php include('include/footer.php'); ?>
  </body>

</html>
