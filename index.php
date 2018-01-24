<!-- <script>
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script> -->
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
          <!-- <p>Please note:- this website is under development and will be updated on a regular basis as the project moves forward. </p>
          <p>Fourchon LNG is an exciting new project which will see the development of up to 5 million tons of Liquified Natural Gas (LNG) production per annum with associated storage and shipping facilities. </p>
          <p>LNG from the Fourchon LNG project will serve the American Domestic market first and then be available for Export. Fourchon LNG is committed to providing local employment and sourcing of USA manufactured equipment. </p>
          <p>Fourchon LNG invites the public to the South Lafourche Library at 16241 E. Main Street in Cut-Off, LA, for an open house on September 19th. The doors will be open from 5 p.m. to 7 p.m. This open house is being held to formally introduce the project to the public. </p> -->
          <?php
          $name = $_GET['name'];
        	 $data_lists = $db->select('webcontent_home',"where webpage_name='".$name."' order by position_order asc");

        	 foreach($data_lists as $data_list){
        	?>
                <td><?php echo "<p>".$data_list['position_description']."</p>"; ?></td>
              </tr>
        	 <?php } ?>
        </div>
        <div class="col-sm-4">
             <h3 class="mt-4">Contact Us</h3>

            <?php
            // contact_id, , project_location, proj_director_name, proj_director_email, admin_outreach_name, admin_outreach_email, webpage_name
          	 $data_lists1 = $db->select('webcontent_contactus',"where webpage_name='".$name."'");
          	 foreach($data_lists1 as $data_list1){
          	?>
                  <?php echo "<address><strong>".$data_list1['project_name']."</strong>"; ?>
                  <br>
            <!-- <strong>Fourchon LNG LLC.</strong>
            <br>2223 S 25th Street
            <br>Fort Pierce, Florida
            <br>34986, USA -->
            <?php echo wordwrap($data_list1['project_location'], 20, "<br />\n"); ?>
            <br>
          </address>
          <address>
            <!-- <strong>Graham Elliott - Project Director</strong>
            <br><abbr title="Email">Email:</abbr>
            <a href="mailto:#">grahame@fourchonLNG.net</a>
            <br><br><strong>Chris Pope - Administration and Outreach</strong>
            <br><abbr title="Email">Email:</abbr>
            <a href="mailto:#">outreach@fourchonLNG.net</a> -->
            <?php echo "<strong>".$data_list1['proj_director_name']." - Project Director</strong>"; ?>
              <br><abbr title="Email">Email:</abbr>
            <a href="mailto:#">  <?php echo $data_list1['proj_director_email']; ?></a>
            <br><br><?php echo "<strong>".$data_list1['admin_outreach_name']." - Administration and Outreach</strong>"; ?>
            <br><abbr title="Email">Email:</abbr>
          <a href="mailto:#">  <?php echo $data_list1['admin_outreach_email']; ?></a>
          </address>
          <?php } ?>
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
