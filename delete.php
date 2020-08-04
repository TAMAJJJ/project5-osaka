<?php
// connect to the database
include('./inc/connect-db.php');

// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	// get id value
	$id = $_GET['id'];

	$image_data = mysqli_query($connection, "SELECT image FROM osaka_directory WHERE id=$id");
	$image = mysqli_fetch_array($image_data)['image'];
	unlink(realpath($image));

	// delete the entry
	$result = mysqli_query($connection, "DELETE FROM osaka_directory WHERE id=$id");

	// redirect back to the homepage to see the results
	header("Location: index.php");

} else {
	// if id isn't set, or isn't valid, redirect back to homepage
	header("Location: index.php");
} ?>