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
				<h3>Major(s):</h3>
				<h4><?php echo htmlspecialchars($row['major']); ?></h4>
				<?php if (isset($row['minor']) && $row['minor'] !== '') { ?>
					<h3>Minor(s):</h3>
					<h4><?php echo htmlspecialchars($row['minor']); ?></h4>
				<?php } ?>
			</div>
			<div class="grid_item_photo">
				<img src="<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars(ucfirst(basename($row['image'], ".jpg"))); ?>'s Photo">
			</div>
			<div class="grid_item_description">
				<p><?php echo htmlspecialchars($row['about']); ?></p>
			</div>
			<div class="grid_item_link">
				<a class="button" href="<?php echo $row['website']; ?>"><?php echo $row['firstname']; ?>'s Website</a>
				<a class="button" href="edit.php?id=<?php echo htmlspecialchars($row['id']); ?>">Edit</a></td>
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