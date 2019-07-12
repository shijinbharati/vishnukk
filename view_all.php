<?php
include('config.php');
$view  = "select * from image_gallery";

$result=mysqli_query($db,$view);

                while($row = mysqli_fetch_array($result))

{
$id=$row['i_id'];
 ?>
<div>
	<img style="width: 250px; height: 200px" src="<?php echo 'uploads/'.$row['image']; ?>">
<a href="delete.php?id=<?php echo $id; ?>">Delete this Image</a>

<!-- <button name="delete" id="<?php echo $row['i_id']; ?>" class="delete">Delete</button> -->
</div>
	
<?php }
?>
