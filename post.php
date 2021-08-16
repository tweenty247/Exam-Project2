<?php 
	require('config/config.php'); 
	require('config/db.php'); 

	//get id
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	//create query
	$query = 'SELECT * FROM posts WHERE id ='.$id;

	//get result
	$result = mysqli_query($conn, $query);

	//fetch data
	$post = mysqli_fetch_assoc($result);

	
    
?>
<?php 
	include('inc/header.php');
?>
	<div class="container">
		<h1><?php echo $post['title']; ?></h1>
		<small>Created On <?php echo $post['created_at']; ?> by <?php  echo $post['author'] ?></small>
		<p><?php echo $post['body'] ?></p>
		<hr>
		<a href="editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-info">Edit</a> || <a href="deletepost.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
	</div>
		
<?php 
	include ('inc/footer.php');
 ?>