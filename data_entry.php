<?php
	require_once("config.php");

	mysqli_real_escape_string($connection, htmlspecialchars($_POST('firstName')))
	$firstName = mysqli_real_escape_string($connection, htmlspecialchars($_POST('firstName')));
	$lastName = mysqli_real_escape_string($connection, htmlspecialchars($_POST('lastName')));
	$major = mysqli_real_escape_string($connection, htmlspecialchars($_POST('major')));
	$minor = mysqli_real_escape_string($connection, htmlspecialchars($_POST('minor')));
	$image = mysqli_real_escape_string($connection, htmlspecialchars($_POST('image')));

	$query = "INSERT INTO info (firstName, lastName, major, minor, image) VALUES ('$firstName', '$lastName', '$major', '$minor','$image')";
	$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>



