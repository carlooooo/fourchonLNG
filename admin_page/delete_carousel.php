<?php
       if (isset($_GET['delete'])) {
       echo $delete_values = $_GET['delete'];
       unlink($delete_values);
       header("location: carousel_images.php");
   }
       ?>
