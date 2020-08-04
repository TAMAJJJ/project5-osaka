<?php
$formTitle = "Update";
include('data.php');

// connect to the database
include('./inc/connect-db.php');

//Handle imagetures/files and return the image location
include('./inc/uploadfile.php');

var_dump($connection);

// check if the form (from renderform.php) has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])) {
	// confirm that the 'id' value is a valid integer before getting the form data
	if (is_numeric($_POST['id'])) {
		// get form data, making sure it is valid
		$id = $_POST['id'];
		$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
		$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
		$major = mysqli_real_escape_string($connection, htmlspecialchars($_POST['major']));
		$minor = mysqli_real_escape_string($connection, htmlspecialchars($_POST['minor']));
		$about = mysqli_real_escape_string($connection, htmlspecialchars($_POST['intro']));
		$website = mysqli_real_escape_string($connection, htmlspecialchars($_POST['website']));
		$result = mysqli_query($connection, "SELECT * FROM osaka_directory WHERE id=$id");
		$row = mysqli_fetch_array( $result );
			// check that the 'id' matches up with a row in the databse
			if($row) {
				// get data from db
				$image = htmlspecialchars($row['image']);
			}
		// TODO: ADD CHECK IF IMAGE IS BEING UPDATED
		if (isset($_POST['photo-change']) && $_POST['photo-change']== '1') {
			$image = handleFile();
		}
		// check that firstname/lastname fields are both filled in
		if ($firstname == '' || $lastname == '' || $major == '' || $minor == '' || $about == '' || $website == '' || $image == '') {
			

			// generate error message
			$error = 'ERROR: Please fill in all required fields!';

			//error, display form
			renderForm($id, $firstname, $lastname, $major, $minor, $about, $website, $image, $error, $formTitle);

		} else {
			// save the data to the database
		$result = mysqli_query($connection, "UPDATE oskaka_directory SET firstname='$firstname', lastname='$lastname', major='$major', minor='$minor', about='$about', website='$website', image='$image' WHERE id=$id");

			// once saved, redirect back to the homepage page to view the results
			header("Location: studentlist.php");
		}
	} else {
		// if the 'id' isn't valid, display an error
		echo 'Error!';
	}
} else {
	// if the form (from renderform.php) hasn't been submitted yet, get the data from the db and display the form
	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
		// query db
		$id = $_GET['id'];
		$result = mysqli_query($connection, "SELECT * FROM osaka_directory WHERE id=$id");
		$row = mysqli_fetch_array( $result );

		// check that the 'id' matches up with a row in the databse
		if($row) {
			// get data from db
			$firstname = htmlspecialchars($row['firstname']);
			$lastname = htmlspecialchars($row['lastname']);
			$major = htmlspecialchars($row['major']);
			$minor = htmlspecialchars($row['minor']);
			$about = htmlspecialchars($row['about']);
			$website = htmlspecialchars($row['website']);
			$image = htmlspecialchars($row['image']);

			// show form
			renderForm($id, $firstname, $lastname, $major, $minor, $about, $website, $image, '', $formTitle);
		} else {
			// if no match, display result
			echo "No results!";
		}
	} else {
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		echo 'Error!';
	}
}
?>