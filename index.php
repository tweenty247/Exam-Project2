 <?php 
    require('config/config.php'); 
	require('config/db.php'); 

	//create query
	$query = 'SELECT * FROM posts ORDER BY created_at DESC';

	//get result
	$result = mysqli_query($conn, $query);

	//fetch data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php 
	include'inc/header.php';
?>
	<!-- navbar -->
	<!-- navbar -->
	<div class="container"> 
		<h2 class="text-center">Blog Posts</h2>
		<?php foreach($posts as $post): ?>
			<div class="alert alert-secondary display" id="example">
				<h3><?php echo $post['title']; ?></h3>
				<small>Created On <?php echo $post['created_at']; ?> by <?php  echo $post['author'] ?></small>
				<p><?php echo substr($post['body'], 0,20) . '.....' ?></p>
				<a class="btn btn-info" href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
			</div>
		<?php endforeach ?>
	</div>
		
<?php 
	include('inc/footer.php');
 ?>