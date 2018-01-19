
<!DOCTYPE html>
<html lang="en">
<?php include('include/header.php');
include"dbclass.php";
$db = new db();
?>
  <body>
    <!-- Page Content -->
    <div class="container">
      <?php include('include/carousel.php'); ?>
      <div class="row">
        <div class="col-sm-8">
          <h3 class="mt-4">Fourchon LNG</h3>
 <p>Please note:- this website is under development and will be updated on a regular basis as the project moves forward. </p>
          <p>Fourchon LNG is an exciting new project which will see the development of up to 5 million tons of Liquified Natural Gas (LNG) production per annum with associated storage and shipping facilities. </p>
          <p>LNG from the Fourchon LNG project will serve the American Domestic market first and then be available for Export. Fourchon LNG is committed to providing local employment and sourcing of USA manufactured equipment. </p>
<!--           <?php
        	 $data_lists = $db->select('webcontent_home',"order by position_order asc");
        	 foreach($data_lists as $data_list){
        	?> -->
                <td><?php echo "<p>".$data_list['position_description']."</p>"; ?></td>
              </tr>
        	 <?php } ?>
          <!--<p>
            <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
          </p>-->
        </div>
        <div class="col-sm-4">
             <h3 class="mt-4">Contact Us</h3>
          <address>
            <strong>Fourchon LNG LLC.</strong>
            <br>2223 S 25th Street
            <br>Fort Pierce, Florida
            <br>34986, USA
            <br>
          </address>
          <address>
            <strong>Graham Elliott - Project Director</strong>
            <br><abbr title="Email">Email:</abbr>
            <a href="mailto:#">grahame@fourchonLNG.net</a>
            <br><br><strong>Chris Pope - Administration and Outreach</strong>
            <br><abbr title="Email">Email:</abbr>
            <a href="mailto:#">outreach@fourchonLNG.net</a>
          </address>
        </div>
      </div>
      <!-- /.row -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include('include/footer.php'); ?>
  </body>
</html>
