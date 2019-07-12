<?php
include('config.php');
 $id = $_GET['id']; 
$delete = "delete from image_gallery where i_id = $id";
if($delete){
	echo "<script>alert('Deleted  Successfully'); window.location.href='view_all.php';</script>";
}
?>