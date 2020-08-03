<?php
$formTitle = "Create";
include('data.php');

// connect to the database
include('./inc/connect-db.php');

//Handle imagetures/files and return the image location
include('./inc/uploadfile.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
	$major = mysqli_real_escape_string($connection, htmlspecialchars($_POST['major']));
	$minor = mysqli_real_escape_string($connection, htmlspecialchars($_POST['minor']));
	$about = mysqli_real_escape_string($connection, htmlspecialchars($_POST['intro']));
	$website = mysqli_real_escape_string($connection, htmlspecialchars($_POST['website']));
	$image = handleFile();

	// check to make sure both fields are entered
	if ($firstname == '' || $lastname == '' || $major == '' || $minor == '' || $about == '' || $website == '' || $image == '') {
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname, $lastname, $major, $minor, $about, $website, $image, $error, $formTitle);

	} else {
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO osaka_directory (firstname, lastname, major, minor, about, image, website) VALUES ('$firstname', '$lastname', '$major', '$minor', '$about', $image', '$website')");

		// once saved, redirect back to the view page
		header("Location: index.php");
	}
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','', '', '', '', '', '', $formTitle);
} ?>