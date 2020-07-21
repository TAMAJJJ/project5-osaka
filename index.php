
<?php 
$customCSS = "<link rel='stylesheet' href='css/main.css'> ";
include "inc/html-top.php";
?>
</head>

<body>

	<div class="banner">
		<a href="index.php"><h1 class="logo">OSAKA</h1></a>

		<form>
			<label for="username">Login:</label><br>
			<input type="text" id="username" name="username" placeholder="Username..."><br>
			<input type="text" id="password" name="password" placeholder="Password...">
		</form>

	</div>

	<header>

			<section>
				
				<h2>CSC 174 Students</h2>
				<h2 class="h2-large">In Digital Media</h2>

			</section>

	</header>

	<div class="background">
		<div class="container">

				<div class="column_1">
					<h3>An Introduction to Ronald Rettner Hall for Media Arts and Innovation</h3>
                    <iframe width="280" height="157.5" src="https://www.youtube.com/embed/CY7zJbmlI0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="youtube"></iframe>
                </div>

                <div class="column_2">
                    <h3>What is Digital Media Studies?</h3>
                    <p>Digital technology is changing how we do everything. More than ever, it is important to be a critical consumer and educated producer of digital media.Sometimes known as new media, digital media consists of computer-based, networked technologies that represent and imagine the world. It is the new standard for literacy in the 21st century.</p>
                    
                </div>

                <div class="column_3">
                    <a href="studentlist.php" class="button">Meet the Students!</a>                   
                </div>


		</div> <!-- container -->
	</div> <!-- background -->

<?php include "inc/scripts.php" ?>
</body>

</html>
