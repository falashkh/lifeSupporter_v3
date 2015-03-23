<?php
echo '<pre>';
	print_r($_REQUEST);
	print_r($_FILES);

if (isset ( $_REQUEST ['doc_name'] )) {
	$target_dir = "uploads/";
	$file_name = basename($_FILES["userfile"]["name"]);
	$target_file = $target_dir.$file_name;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	
	$check = getimagesize($_FILES["userfile"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["userfile"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["userfile"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	//$data = array();
	$con = mysql_connect ( 'localhost', 'sitarahussain', 'database123' );
	
	if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
	
	
	mysql_select_db("lifesupporter");
	//$imageData =mysql_real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name']));
	

$sql="INSERT INTO documents2(documentname,document_type,descryption,datepicker,userfile) VALUES('".$_REQUEST["doc_name"]."','".$_REQUEST["doc_type"]."','".$_REQUEST["des"]."','".$_REQUEST["datepicker"]."','".$file_name."')";
if (! mysql_query ( $sql, $con )) {
		$data['responce'] = 0;
		$data['responce_message'] = "Error Inserting Data";
	}else{
		$data['responce'] = 0;
		$data['responce_message'] = "Documents added successfully";
	}
	mysql_close ( $con );
	echo '<script type="text/javascript">parent.window.locaion.href = "http://localhost/allModules/inner-page.php";</script>';
	echo json_encode($data);
}
	
	
?>

	
