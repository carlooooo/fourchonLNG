
<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php');
include('include/config.php');
include"dbclass.php";
$db6 = new db();
 ?>
  <body>
    <div class="container">
      <img class="img-fluid" src="img/slide7.jpg" alt="">
      <div class="row">
        <div class="col-md-12">
          <h3 class="my-4">Fourchon LNG - <small>Links</small></h3>
          <?php
          $FirstRun=true;
          $q = $db->query("SELECT * FROM webcontent_link WHERE webpage_name='$name' ORDER BY position_order ASC");
          $q->execute();
          while($row = $q->fetch(PDO::FETCH_ASSOC))
          {
              if ($FirstRun){
              $FirstRun = false;
              echo $title[0] = $row['position_description'];
            }
            else{
           ?>
           <br>
           <br>
          <ul>
            <?php echo "<li>".$row['position_description']."</li>" ?>
          </ul>
        <?php } } ?>
        </div>
      </div>
    <!-- /.container -->
    <!-- Footer -->
  </div>
  <?php include('include/footer.php'); ?>
  </body>
</html>
