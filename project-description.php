
<!DOCTYPE html>
<html lang="en">

<?php include('include/header.php');
include('include/config.php');
include"dbclass.php";
$db2 = new db();
?>
  <body>
    <div class="container">
      <!-- Portfolio Item Heading -->
      <!--<h3 class="my-4">Fourchon LNG:
        <small>Project Description</small>
      </h3>-->
      <img class="img-fluid" src="img/slide1b.jpg" alt="">
      <div class="row">
        <div class="col-md-12">
          <h4 class="my-3">Project Title: Fourchon LNG</h4>
          <h4 class="my-3">Project Proponent: Fourchon LNG LLC.</h4>
          <h4 class="my-3">Project Description: </h4>
          <?php
          $name = $_GET['name'];
        	 $data_lists = $db2->select('webcontent_desc',"where webpage_name='".$name."' order by position_order asc");

        	 foreach($data_lists as $data_list){
             echo "<p>".$data_list['position_description']."</p>";
           }
        	?>
            <ul>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">



<?php
$FirstRun=true;
$q = $db->query("SELECT * FROM webcontent_desc_bullet WHERE webpage_name='$name' ORDER BY bullet_id ASC");
$q->execute();
while($row = $q->fetch(PDO::FETCH_ASSOC))
{
  $bullet = $row['bullet_id'];
    if ($FirstRun){
    $FirstRun = false;
            ?>



                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="<?php echo 'heading'.$bullet[0]; ?>">
                      <li class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="<?php echo '#collapse'.$bullet[0]; ?>" aria-expanded="true" aria-controls="<?php echo 'collapse'.$bullet[0]; ?>">
            <?php echo $title[0] = $row['bullet_title']; ?>
                        </a>
                      </li>
                    </div>
                    <div id="<?php echo 'collapse'.$bullet[0]; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                                  <?php echo $desc[0] = $row['bullet_description']; ?>
                      </div>
                    </div>
                  </div>


                <?php } else{ ?>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="<?php echo 'heading'.$bullet; ?>">
                      <li class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="<?php echo '#collapse'.$bullet; ?>" aria-expanded="true" aria-controls="<?php echo 'collapse'.$bullet; ?>">
            <?php echo $title = $row['bullet_title']; ?>
                        </a>
                      </li>
                    </div>
                    <div id="<?php echo 'collapse'.$bullet; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                                  <?php  $desc = $row['bullet_description'];
                                  echo $Result = str_replace( "\n", '<br />', $desc );
                                  ?>
                      </div>
                    </div>
                  </div>
                <?php } } ?>


                </div>
            </ul>
      </div>
      <!-- /.row -->
    </div>
  </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include('include/footer.php'); ?>

  </body>

</html>
