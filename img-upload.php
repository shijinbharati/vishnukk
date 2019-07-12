<?php
include('header.php');

include('config.php');
// include('class_function.php');
?>


	<section>
		<div class="container">
			<div class="col-md-12">
		<!-- 		<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form> -->

				<form action="#" method="post" enctype="multipart/form-data">
					<div class="img">
						<label>Image Name</label>
						<input type="text" name="imagename">
					</div>
					<div class="img">
						<label>Image</label>
						<input type="file" name="image">
					</div>
					<div class="img">
						<input type="submit" name="submit" value="upload">
					</div>
					<div class="img">
						<a href="view_all.php">viewAll Images</a>
					</div>
				</form>
				
			</div>
			
		</div>
	</section>

<?php

// $statusMsg = '';
// $name = $_POST['imagename'];
// $img_tmp = $_FILES['image']['tmp_name'];
// // File upload path
// $targetDir = "uploads/";
// $fileName = basename($_FILES['image']['name']);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

// if(isset($_POST["submit"])){
//     // Allow certain file formats
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
//     if(in_array($fileType, $allowTypes)){
//         // Upload file to server
//         if(move_uploaded_file($img_tmp, $targetFilePath)){
//             // Insert image file name into database
//             $insert = $db->query("INSERT into images_gallery (i_id,image_name,image) VALUES ('".$fileName."', '".$name."')");
//             if($insert){
//                 $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
//             }else{
//                 $statusMsg = "File upload failed, please try again.";
//             } 
//         }else{
//             $statusMsg = "Sorry, there was an error uploading your file.";
//         }
//     }else{
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//     }
// }else{
//     $statusMsg = 'Please select a file to upload.';
// }


	if(isset($_POST['submit'])){
		// $obj  = new Imageuploads();
		// $obj->add_image();


		$name = $_POST['imagename'];
	$arr = array('jpg','jpeg','png');
	$img_name = $_FILES['image']['name'];
	$img_type = $_FILES['image']['type'];
	$img_size = $_FILES['image']['size'];
	$img_tmp = $_FILES['image']['tmp_name'];


$targetDir = "uploads/";
		$fileName = basename($_FILES['image']['name']);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
		$path  = $targetFilePath;



	if($img_size > 10000000000){
		
		echo "<script>alert('File size is too large');</script>";
	}else{
				if(in_array($fileType, $arr)){
					move_uploaded_file($img_tmp,$targetFilePath);
					$sql = "insert into image_gallery(i_id,image_name,image) values('','$name','$img_name')";
					$uploaded  =mysqli_query($db, $sql);


						if($uploaded){ echo "<script>alert('inserted into db'); window.location.href='view_all.php'</script>"; }
		// echo "<script>alert('Success');</script>";
				}else{
					echo "<script>alert('Invalid File Extension');</script>";
				}


	}
						
		
	

			// echo "string";
	// $img_name=$_POST["imagename"];
	// $img=$_POST["category"];
	// if(mysql_query("insert into gallery(i_id,image_name,image) values('','$img_name','$img')"))
		// echo "<script>alert('Success');</script>";
	}

	
?>



	<?php include('footer.php'); ?>

