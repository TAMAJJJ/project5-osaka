<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $major, $minor, $about, $website, $image, $error, $formTitle) { ?>
<?php $customCSS = "<link rel='stylesheet' 
href='css/data.css'>";
include "inc/html-top.php"; ?>

<section class="hero is-fullheight">
	<div class = "container">

		<div class = "row row-centered">

			<div class = "col-centered">

				<div class = "login">

					<div class="wrapper">

						<h1 class="text-center"><?php echo $formTitle; ?> Student Data Entry</h1>
							<p class="required text-center">*required</p>

							<?php // if there are any errors, display them
								if ($error != '') { echo '<div class="notification is-danger">'.$error.'</div>'; 
							}?>

							<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post" class="data-entry" enctype="multipart/form-data">
								<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

								<div class="form-group">
									<label class="label" for="firstname">First Name: *</label>
										<input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" required>
								</div>

								<div class="form-group">
									<label class="label" for="lastname">Last Name: *</label>
										<input class="form-control" type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" required>
								</div>

								<div class="form-group">
									<label class="label" for="major">Major: *</label>
										<input class="form-control" type="text" name="major" id="major" value="<?php echo $major; ?>" required>
								</div>

								<div class="form-group">
									<label class="label" for="minor">Minor: </label>
										<input class="form-control" type="text" name="minor" id="minor" value="<?php echo $minor; ?>">
								</div>

								<div class="form-group fullwidth">
									<label class="label" for="intro">Introduction: *</label>
										<textarea class="form-control" rows="4" name="intro" id="intro" required><?php echo $about; ?></textarea>
								</div>

								<div class="form-group fullwidth">
									<label class="label" for="website">Website: *</label>
									<div class="row">
										<div class="col-2">https://</div>
										<input class="form-control col-10" type="text" name="website" id="website" value="<?php echo $website; ?>" required>
									</div>
								</div>

								<div class="form-group fullwidth">
									<?php 
										if($formTitle == "Update") 
										{ ?>
											<input type="checkbox" name="photo-change" class="form-control photo-change data-check" value="1" id="photo-change"><label class="has-text-white" for="photo-change">I want to replace the current photo.</label>
									<?php 
										} ?>
										<div>
											<label class="label" for="image" id="image-label">Upload an image*</label>
											<input type="file" name="image" id="image" class="form-control-file" required>
										</div>
								</div>

								<!-- TODO: Need to remove the inline style -->
								<div class="fullwidth">
									<input class="btn btn-primary btn-block btn-lg" type="submit" name="submit">
									<a class="btn btn-danger btn-block btn-lg" href="studentlist.php">Cancel</a>
								</div>

							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

</body>
</html>
<?php } ?>