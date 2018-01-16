<?php
 //upload.php
 //echo 'done';
 $output = '';

 if(isset($_FILES['file']['name'][0]))
 {
      //echo 'OK';
      foreach($_FILES['file']['name'] as $keys => $values)
      {
           if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'upload/carousel/' . $values))
           {
                $output .= '<a href="delete_carousel.php?delete=upload/carousel/'.$values.'"><img height="120" width="120" src="upload/carousel/'.$values.'" class="img-responsive confirmation"/></a>&emsp;&emsp;';

           }

      }
 }
 echo "<br><br><h1>Click image to delete</h1><br>";
 echo $output;
// echo $values;
// $delete_values = "images/".$values;
// unlink($delete_values);
 ?>
 <script type="text/javascript">
     $('.confirmation').on('click', function () {
         return confirm('Are you sure you want to delete this image?');
     });
 </script>
