<?php $customCSS = "<link rel='stylesheet' href='css/studentlist.css'>";
include "inc/html-top.php"; ?>
		<?php
		// connect to the database
		include('./inc/connect-db.php');
		// get results from database
		$result = mysqli_query($connection, "SELECT * FROM osaka_directory");
		?>
	<header>
		<h1 class="h1-large">Student Roster</h1>
	</header>

	<div class="background">
		<div class="grid-container">
		<?php while($row = mysqli_fetch_array($result)) { // loop through results of database query, displaying them in the table ?>
			<div class="grid_item_student">
				<h2><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></h2>
				<img src="<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars(ucfirst(basename($row['image'], ".jpg"))); ?>'s Photo">
			</div>


			<div class="grid_item_description">
				<p><?php echo htmlspecialchars($row['about']); ?></p>
			</div>

			<div class="grid_item_link">
				<a class="button" href="<?php echo $row['website']; ?>"><?php echo $row['firstname']; ?>'s Website</a>
<<<<<<< HEAD
			<div class="grid_item_modify">
				<?php if(isset($_SESSION['username'])) { ?>
    				<a class="button revise" href="edit.php?id=<?php echo htmlspecialchars($row['id']); ?>">Edit</a>
					<a class="button delete" onclick="return confirm('Are you sure you want to delete: <?php echo $row["firstname"] . " " . $row["lastname"]; ?>?')" href="delete.php?id=<?php echo htmlspecialchars($row['id']); ?>">Delete</a>
  				<?php } ?>
			
=======
			</div>
			<?php	} // close the loop ?>



			<footer class="list-footer">
				<p>CSC 174: Advanced Front-end Web - Project 4</p>
			</footer>
		</div>
	</div>
	<?php include "inc/scripts.php" ?>
</body>
</html>
