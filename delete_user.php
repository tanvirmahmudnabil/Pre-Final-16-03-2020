<?php

include("utube.php");

if(isset($_GET['id'])) {

  $id 			= $_GET['id'];
  
  $query 		= "DELETE FROM `qa` WHERE id = $id";
  $result 		= mysqli_query($conn, $query);

  if(!$result) {
    die("Delete Failed. Please try Again.");
  }

  $_SESSION['message'] 			= 'User Removed Successfully';
  $_SESSION['message_type'] 	= 'danger';
  header('Location: aqa.php');

}

?>
