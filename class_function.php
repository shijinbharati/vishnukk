<?php 

class Imageuploads
{
	function add_image()
	{
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


						if($inserted){ echo "<script>alert('inserted into db');</script>"; }
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
}

?>