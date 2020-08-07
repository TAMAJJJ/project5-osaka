<?php $customCSS = "<link rel='stylesheet' href='css/main.css'> ";
include "inc/html-top.php"; ?>

		<header>
			<h2 class="hero-text">CSC 174 Students</h2>
		</header>
		<div class="background">
			<div class="container">
				<div class = "row">
					<div class="col-sm">
						<h2>An Introduction to Rettner Hall</h2>
						<iframe width="280" height="157" src="https://www.youtube.com/embed/CY7zJbmlI0I" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="youtube"></iframe>
					</div>
					<div class="col-sm">
						<h2>What is Digital Media Studies?</h2>
						<p>Digital technology is changing how we do everything. More than ever, it is important to be a critical consumer and educated producer of digital media.Sometimes known as new media, digital media consists of computer-based, networked technologies that represent and imagine the world. It is the new standard for literacy in the 21st century.</p>
					</div>
					<div class="col-sm">
						<a href="studentlist.php" class="button">Meet the Students!</a>
					</div>

				</div>
			<footer>
				<p>CSC 174: Advanced Front-end Web - Project 5</p>

			</footer>
			</div> <!-- container -->
		</div> <!-- background -->
	<?php include "inc/scripts.php" ?>

	<script>
		//only for index.php
		document.getElementById("add-new").style.display= "none";
		document.getElementById("done").style.display= "none";
	</script>

	</body>
</html>
