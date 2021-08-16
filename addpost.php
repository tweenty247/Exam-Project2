<?php 
    require('config/config.php'); 
	require('config/db.php'); 

	if(isset($_POST['submit'])){
		// get from data

		$title  = mysqli_real_escape_string($conn, $_POST['title']);
		$author = mysqli_real_escape_string($conn, $_POST['author']);
		$body   = mysqli_real_escape_string($conn, $_POST['body']);

		$query = "INSERT INTO posts(title, body, author) VALUES ('$title','$author','$body')";

		if(mysqli_query($conn, $query)){
			header('Location: index.php');
		} else{
			echo "Error" . mysqli_error($conn);
		}
	}
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
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
			</div>
			<input type="submit" name="submit" value="Submit" class="btn btn-success">
		</form>
	</div>
		
<?php 
	include('inc/footer.php');
 ?>