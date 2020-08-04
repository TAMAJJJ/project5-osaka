<?php
// Handles the file being uploaded and returns the image location
function handleFile() {
// Check if the form was submitted
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Check if file was uploaded without errors
		if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
				$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
				$filename = $_FILES["image"]["name"];
				$filetype = $_FILES["image"]["type"];
				$filesize = $_FILES["image"]["size"];

				// Verify file extension
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
		
				// Verify file size - 5MB maximum
				$maxsize = 5 * 1024 * 1024;
				if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

				// Verify MYME type of the file
				if(in_array($filetype, $allowed)){
						// Check whether file exists before uploading it
						if(file_exists("./images/" . $filename)){
								$error = $filename . " is already exists.";
						} else{
								move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $filename);
								// echo "Your file was uploaded successfully.";
								// header("Location: studentlist.php");
						} 
				} else{
						$error = "Error: There was a problem uploading your file. Please try again."; 
				}
		} else{
				$error = "Error: " . $_FILES["image"]["error"];
		}
	}
	return "./images/" . $_FILES["image"]["name"];
} ?>