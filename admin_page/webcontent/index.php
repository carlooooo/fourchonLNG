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

</head>
<body>

<div class="container">
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
</div>
<div style="text-align:center;" >
<input type="submit" class="btn btn-primary"   onClick="save();" />
</div>

</body>
</html>
