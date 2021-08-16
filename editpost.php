<?php 
    require('config/config.php'); 
	require('config/db.php'); 
	
	if(isset($_POST['submit'])){
		// get from data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$title     = mysqli_real_escape_string($conn, $_POST['title']);
		$author    = mysqli_real_escape_string($conn, $_POST['author']);
		$body      = mysqli_real_escape_string($conn, $_POST['body']);

		$query = "UPDATE posts SET
						 title  = '$title',
						 author = '$author',
						 body   = '$body'
				  WHERE  id     = {$update_id}";
		
		if(mysqli_query($conn, $query)){
			header('Location: index.php');
		} else{
			echo "Error" . mysqli_error($conn);
		}
	}

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
	include'inc/header.php';
?>
	<!-- navbar -->
	<!-- navbar -->
	<div class="container">
		<h2 class="text-center">Add New Post</h2>
		<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"> 
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" value="<?php  echo $post['title'];?>">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" id="" cols="30" rows="10" class="form-control"> <?php echo $post['body']; ?></textarea>
			</div>
			<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
			<input type="submit" name="submit" value="Submit" class="btn btn-success">
		</form>
	</div>
		
<?php 
	include('inc/footer.php');
 ?>