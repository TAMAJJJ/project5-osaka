<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $major, $minor, $pic, $error, $formTitle) { ?>
<?php $customCSS = "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css'> <link rel='stylesheet' href='css/data.css'>";
include "inc/html-top.php"; ?>
<section class="hero is-fullheight">
	<h2 class="title is-1"><?php echo $formTitle; ?> Student Data Entry</h2>
		<div class="box">
				<p class="required has-text-white">*required</p>
				<?php // if there are any errors, display them
					if ($error != '') { echo '<div class="notification is-danger container">'.$error.'</div>'; }?>
					<form action="" method="post" class="data-entery" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<div class="field">
						<label class="label" for="firstName"> First Name: *</label>
						<div class="control">
							<input class="input" type = "text" name="firstName" id="firstName" value="<?php echo $firstname; ?>" required>
						</div>
					</div>
					<div class="field">
						<label class="label" for="lastName"> Last Name: *</label>
						<div class="control">
							<input class="input" type="text" name="lastName" id="lastName" value="<?php echo $lastname; ?>" required>
						</div>
					</div>

					<div class="field">
						<label class="label" for="major"> Major: *</label>
						<div class="control"><input class="input" type="text" name="major" id="major" value="<?php echo $major; ?>" required></div>
					</div>
					<div class="field">
						<label class="label" for="minor"> Minor: </label>
						<div class="control">
							<input class="input" type="text" name="minor" id="minor">
						</div>
					</div>
					<div class="field intro">
						<label class="label" for="intro"> Introduction: *</label>
						<div class="control">
							<textarea class="textarea is-small" rows="2" name="intro" id="intro" required></textarea>
						</div>
					</div>

					<div class="file">
						<label class="file-label">
							<input class="file-input" type="file" name="picture" required>
							<span class="file-cta">
								<span class="file-icon">
									<i class="fas fa-upload"></i>
								</span>
								<span class="file-label">
									Upload a picture*
								</span>
							</span>
						</label>
					</div>
					<div class="field level-right">
						<div class="control"><button class="button create" type="submit" name="Create" > Create Entry</button></div>
					</div>

				</form>
	</div>
</section>
<?php if($formTitle == "Update") { ?>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				$("form div input[type='file']").prop("type", "hidden");
				document.getElementById("photo-label").hidden = true;
				document.getElementById("photo-label").style = "display:none";
				$(".photo-change").click(function(){
					if($(this).prop("checked") == true){
						$("form div input[type='hidden']").prop("type", "file");
						document.getElementById("photo-label").hidden = false;
						document.getElementById("photo-label").style = "display:block";
					}
					else if($(this).prop("checked") == false){
						$("form div input[type='file']").prop("type", "hidden");
						 document.getElementById("photo-label").hidden = true;
						 document.getElementById("photo-label").style = "display:none";
					}
				});
			});
		</script>
	<?php } ?>
</body>
</html>
<?php } ?>
