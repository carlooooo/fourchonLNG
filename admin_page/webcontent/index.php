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
		url:"webcontent/ajaxhome.php",
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
<div class="container row">
<div class="col-sm-8">
  <table class="table">
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody class="row_position" >
	<?php
$name = $_GET['name'];
	 $data_lists = $db->select('webcontent_home',"where webpage_name='".$name."' order by position_order asc");
	 foreach($data_lists as $data_list){
	?>
      <tr id="<?php echo $data_list['position_id']; ?>" >
        <td><?php echo $data_list['position_description']; ?></td>
          <td><?php $data_list['webpage_name']; ?></td>
          <td><a href="webcontent/deletehomecontent.php?delete=<?php echo $data_list['position_id']; ?>">Delete</a></td>
      </tr>
	 <?php } ?>
    </tbody>
  </table>
  <div style="text-align:center;" >
  <input type="submit" class="btn btn-primary"   onClick="save();" />
  </div>
</div>
<div class="col-sm-2">
  <b>Add new content</b>
<textarea id="home_content" name="home_content" rows="8" cols="80"></textarea>
<input type="hidden" name="hid" id="hid" value="<?php echo $name; ?>">
<input id="btnSend" name="btnSend" type="button" value="Send" class="btn btn-primary"/>

</div>
</div>

</body>
</html>

<script>
$("#btnSend").click(function() {
getvalues();
});
</script>

<script type="text/javascript">
function getvalues(){
  var home_content = document.getElementsByName('home_content');
  var hid = document.getElementsByName('hid');

  var home_content1=home_content[0];
  var home_content2 = home_content1.value;
  var hid1=hid[0];
  var hid2 = hid1.value;

  var dataString  = 'home_content2=' + home_content2 +'&hid2=' + hid2;
  jQuery.ajax({

   type: "POST",
   url: "webcontent/addcontenthome.php",
  dataType:"text",
  data:dataString,
  async:false,
  success:function(data){
     window.location.reload();
  }
  });
}
</script>
