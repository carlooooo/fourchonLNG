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
		url:"webcontent/ajaxdesc.php",
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
$page = $_GET['page'];
	 $data_lists = $db->select('webcontent_desc',"where webpage_name='".$name."' order by position_order asc");
	 foreach($data_lists as $data_list){
	?>
      <tr id="<?php echo $data_list['position_id']; ?>" >
        <td><?php echo $data_list['position_description']; ?></td>
          <td><?php $data_list['webpage_name']; ?></td>
          <td><a href="webcontent/deletecontent.php?page=<?php echo $page; ?>&delete=<?php echo $data_list['position_id']; ?>">Delete</a></td>
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
<textarea id="desc_content" name="desc_content" rows="8" cols="80"></textarea>
<input type="hidden" name="hid" id="hid" value="<?php echo $name; ?>">
<input id="btnSend" name="btnSend" type="button" value="Send" class="btn btn-primary"/>

</div>
</div>






<div class="container row">
<div class="col-sm-8">
  <table class="table">
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody>
	<?php

  $host = "localhost";
  $db_name = "fourchonlng";
  $username = "root";
  $password = "";

  try {
     $con= new PDO("mysql:host={$host};dbname={$db_name};",$username,$password) or die("Could not connect database");
  }
  catch(PDOException $exception){
      echo "Connection error: " . $exception->getMessage();
  }



$name = $_GET['name'];
$page = $_GET['page'];
	 $query = $con->prepare("SELECT * FROM webcontent_desc_bullet WHERE webpage_name='$name' ORDER BY bullet_id ASC");
   $query->execute();
   while($row = $query->fetch( PDO::FETCH_ASSOC )){
	?>
      <tr id="<?php echo $row['bullet_id']; ?>" >
          <td><?php echo $row['bullet_title']; ?></td>
          <td><?php echo $row['bullet_description']; ?></td>
          <td><?php $row['webpage_name']; ?></td>
          <td><a href="webcontent/deletecontent.php?page=<?php echo "bullet_".$page; ?>&delete=<?php echo $row['bullet_id']; ?>">Delete</a></td>
      </tr>
	 <?php } ?>
    </tbody>
  </table>
</div>
<div class="col-sm-2">
  <b>Add new content</b>
<input type="text" class="form-control" name="bullettitle" id="bullettitle" value="" placeholder="Bullet Title">
<textarea id="bullet_content" name="bullet_content" rows="8" cols="80"></textarea>
<input type="hidden" name="hidd" id="hidd" value="<?php echo $name; ?>">
<input id="btnSend2" name="btnSend2" type="button" value="Send" class="btn btn-primary"/>

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
  var desc_content = document.getElementsByName('desc_content');
  var hid = document.getElementsByName('hid');

  var desc_content1=desc_content[0];
  var desc_content2 = desc_content1.value;
  var hid1=hid[0];
  var hid2 = hid1.value;

  var dataString  = 'desc_content2=' + desc_content2 +'&hid2=' + hid2;
  jQuery.ajax({

   type: "POST",
   url: "webcontent/addcontentdesc.php",
  dataType:"text",
  data:dataString,
  async:false,
  success:function(data){
     window.location.reload();
  }
  });
}
</script>





<script>
$("#btnSend2").click(function() {
getvalues2();
});
</script>

<script type="text/javascript">
function getvalues2(){
  var bullettitle = document.getElementsByName('bullettitle');
  var bullet_content = document.getElementsByName('bullet_content');
  var hidd = document.getElementsByName('hidd');

  var bullet_content1=bullet_content[0];
  var bullet_content2 = bullet_content1.value;
  var hidd1=hidd[0];
  var hidd2 = hidd1.value;
  var bullet_title1=bullettitle[0];
  var bullet_title2 = bullet_title1.value;

  var dataString  = 'bullet_content2=' + bullet_content2 +'&hidd2=' + hidd2 +'&bullet_title2=' + bullet_title2;
  jQuery.ajax({

   type: "POST",
   url: "webcontent/addcontentdescbullet.php",
  dataType:"text",
  data:dataString,
  async:false,
  success:function(data){
     window.location.reload();
  }
  });
}
</script>
