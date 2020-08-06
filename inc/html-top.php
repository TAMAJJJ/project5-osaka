<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Osaka | Project 4</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Playfair+Display&family=Zilla+Slab:wght@500&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"> -->

		<link rel="stylesheet" href="css/override.css">


		<?php echo $customCSS; ?>
		<?php if(isset($formTitle) && $formTitle == "Update") { ?>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

		<script>
			$(document).ready(function(){
				document.getElementById("image").required = false;
				$("form div div input[type='file']").prop("type", "hidden");
				document.getElementById("image-label").hidden = true;
				document.getElementById("image-label").style = "display:none";
				$(".photo-change").click(function(){
					if($(this).prop("checked") === true){
						$("form div div input[type='hidden']").prop("type", "file");
						document.getElementById("image").required = true
						document.getElementById("image-label").hidden = false;
						document.getElementById("image-label").style = "display:unset";
					}
					else if($(this).prop("checked") === false){
						document.getElementById("image").required = false;
						$("form div div input[type='file']").prop("type", "hidden");
						 document.getElementById("image-label").hidden = true;
						 document.getElementById("image-label").style = "display:none";
					}
				});
			});
		</script>
	<?php } ?>

	</head>


	<body>
		<nav class="banner" id="navbar">
			<a href="index.php"><h1 class="logo" id="logo">OSAKA</h1></a>



			<?php if ($formTitle=="Update") { ?>
				<a href="studentlist.php" id="add-entry">Back to Student List</a>
			<?php } elseif ($formTitle =="Create") { ?>
				<a href="index.php" id="add-entry">Back to Student List</a>
			<?php } else { ?>
				
				<?php if(isset($_SESSION['username'])) { ?>
					<a href="new.php" id="add-new" class="new-btn" title="Expected to be more obvious than other buttons in navigation bar">Add New Student</a>

					<div class="logout-reset" id="logout-reset">
						<a class="btn" href="reset-password.php" id="reset">Reset Password</a>
						<a class="btn" href="logout.php" id="logout" title="Expecteed to be more distinguishable than reset Password">Logout</a>
					</div>

					<div class="modify-done" id="modify-done">
						<a href="" title="Done with modfify. Hide all buttons.">Done</a>
					</div>
				<?php } else { ?>
					<a class="btn" href="login.php" id="login">Login</a>
				<?php } ?>
				
			<?php } ?>

		</nav>
