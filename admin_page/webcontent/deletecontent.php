<?php
include 'config.php';
$pid = $_GET['delete'];
$page = $_GET['page'];


if ($page=='home') {
  $sql = $db->prepare("DELETE FROM webcontent_home WHERE position_id='$pid'");
  if ($sql->execute()) {
    echo "<script>
      alert('Delete succesfully');
      window.history.go(-1);
    </script>";
  } else {
      echo "Error deleting record ";
  }
}

elseif ($page=='desc') {
  $sql = $db->prepare("DELETE FROM webcontent_desc WHERE position_id='$pid'");
  if ($sql->execute()) {
    echo "<script>
      alert('Delete succesfully');
      window.history.go(-1);
    </script>";
  } else {
      echo "Error deleting record ";
  }
}


elseif ($page=='bullet_desc') {
  $sql = $db->prepare("DELETE FROM webcontent_desc_bullet WHERE bullet_id='$pid'");
  if ($sql->execute()) {
    echo "<script>
      alert('Delete succesfully');
      window.history.go(-1);
    </script>";
  } else {
      echo "Error deleting record ";
  }
}


elseif ($page=='about') {
  $sql = $db->prepare("DELETE FROM webcontent_about WHERE position_id='$pid'");
  if ($sql->execute()) {
    echo "<script>
      alert('Delete succesfully');
      window.history.go(-1);
    </script>";
  } else {
      echo "Error deleting record ";
  }
}

elseif ($page=='pro') {
  $sql = $db->prepare("DELETE FROM webcontent_process WHERE position_id='$pid'");
  if ($sql->execute()) {
    echo "<script>
      alert('Delete succesfully');
      window.history.go(-1);
    </script>";
  } else {
      echo "Error deleting record ";
  }
}

elseif ($page=='safe') {
  $sql = $db->prepare("DELETE FROM webcontent_safety WHERE position_id='$pid'");
  if ($sql->execute()) {
    echo "<script>
      alert('Delete succesfully');
      window.history.go(-1);
    </script>";
  } else {
      echo "Error deleting record ";
  }
}

elseif ($page=='out') {
  $sql = $db->prepare("DELETE FROM webcontent_outreach WHERE position_id='$pid'");
  if ($sql->execute()) {
    echo "<script>
      alert('Delete succesfully');
      window.history.go(-1);
    </script>";
  } else {
      echo "Error deleting record ";
  }
}

elseif ($page=='link') {
  $sql = $db->prepare("DELETE FROM webcontent_link WHERE position_id='$pid'");
  if ($sql->execute()) {
    echo "<script>
      alert('Delete succesfully');
      window.history.go(-1);
    </script>";
  } else {
      echo "Error deleting record ";
  }
}

elseif ($page=='contact') {
include 'webcontent/contact.php';
}

else{
include 'webcontent/color.php';
}



?>
