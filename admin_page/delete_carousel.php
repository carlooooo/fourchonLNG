<?php
       if (isset($_GET['delete'])) {
       echo $delete_values = $_GET['delete'];
       unlink($delete_values);
       echo "<script>
         window.location.href = 'carousel_images.php';
       </script>";
   }
       ?>
