<?php 
    require('config/config.php'); 
     require('config/db.php'); 
     require('auth.php');
 $result = mysqli_query($conn,"SELECT * FROM `users` order by id asc");
 ?>
 
<?php 
include'inc/header.php';
?>
     <div class="container">
     <table id="example" class="table table-hover table-bordered">
     	<thead>
     		<tr class="text-center">
     			<th>User Name</th>
     			<th>Email</th>
     		</tr>
     	</thead>
     	<tbody>
     		<?php 
     		   while($show = mysqli_fetch_array($result)){
     		 ?>
     		 <tr>
     		 	
                    <td><?php echo $show['username']; ?></td>
     		 	<td><?php echo $show['email']; ?></td>
     		 </tr>
     		 <?php } ?>
     	</tbody>
     </table>
</div>
<?php 
     include('inc/footer.php');
 ?>  