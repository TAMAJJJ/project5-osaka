<?php include "inc/html-top.php"; ?>
	<body>
		<h1> New Student Data Entry Form</h1>
		<form method="post" action="form.php">

			<div>
				<label for="firstName"> First Name: </label>
				<input type = "text" name="firstName" id="firstName">
			</div>
			<div>
				<label for="lastName"> Last Name: </label>
				<input type="text" name="lastName" id="lastName">
			</div>
			<div> 
				<label for="major"> Major: </label>
				<input type="text" name="major" id="major">
			</div>
			<div>
				<label for="minor"> Minor: </label>
				<input type="text" name="minor" id="minor">
			</div>
			<div> 
				<label for="image"> Picture: </label>
				<input type="file" name="image" id="image">
			</div>
			<div>
				<button class="btn" type="submit" name="Create" > Create </button>
			</div>
		</form>
	</body>
</html>