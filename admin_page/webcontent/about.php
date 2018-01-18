<?php
include"dbclass.php";
$db = new db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>jquery drag and drop save to database php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   <script>
  $(function() {
	$( ".row_position" ).sortable({
		delay: 150,
		change: function() {
	var selectedLanguage = new Array();
	$('.row_position>tr').each(function() {
	selectedLanguage.push($(this).attr("id"));
	});
	document.getElementById("row_order").value = selectedLanguage;
	}
	});
  });

  function save() {
	var data = new Array();
	$('.row_position tr').each(function() {
	   data.push($(this).attr("id"));
	});

	$.ajax({
		url:"webcontent/ajax.php",
		type:'post',
		data:{position:data},
		success:function(){
			alert('Change successfully saved');
		}
	})
  }
  </script>
  <style>
  .row_position{
  cursor:move
  }
  </style>

  <script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
    document.getElementById('preview').src=e.target.result;
}
reader.readAsDataURL(input.files[0]);
}
}

</script>

</head>
<body>

<div class="container">
  <div class="row">
  <div class="col-sm-8">
  <table class="table">
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody class="row_position" >
	<?php
	 $data_lists = $db->select('webcontent_home',"order by position_order asc");
	 foreach($data_lists as $data_list){
	?>
      <tr id="<?php echo $data_list['position_id']; ?>" >
        <td><?php echo $data_list['position_description']; ?></td>
      </tr>
	 <?php } ?>
    </tbody>
  </table>
  <div style="text-align:center;" >
  <input type="submit" class="btn btn-primary"   onClick="save();" />
  </div>
</div>
<center>
<div class="col-sm-8" style="text-align:center;">
  <b> Upload an Image </b><br><br>
<img src="images/Background.png"  id="preview" name="preview" style="min-height:120px min-width:200px; max-height:120px" height="200" width="150" /><br>
<input type="file" name="image" value="Upload Photo" onchange="readURL(this)"; required style="margin-top:15px;">
</div>
</div>
</div>
</center>
</body>
</html>
<?php
            if(isset($_POST['change']))
                {
                    include'configdb1.php';
              $imageName = $_FILES["image"]["name"];
              $imageData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
              $imageType = $_FILES["image"]["type"];
                    if(substr($imageType,0,5) == "image")
                        {
         $stmt = $db->prepare("INSERT INTO navbackground (background) VALUES('$imageData')");
         $stmt->execute();
                            echo "Save Successfully";
                        }
                    else
                        {
                            echo "Only Images are allowed!";
                        }
                }

        ?>
