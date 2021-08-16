<?php 
   	require('config/config.php'); 
	require('config/db.php'); 
	
		// get from data
		$id = $_GET['id'];
 		$query = mysqli_query($conn, "DELETE FROM posts WHERE id='$id'");
        header('Location:index.php');	
?>