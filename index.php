<?php 
$customCSS = "<link rel='stylesheet' href='css/home.css'> ";

include "inc/html-top.php";

?>

</head>


<body>
	<header>
		<div class="flex">
			<h1>CSC 174</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="studentlist.php">Student List</a></li>
				<li class="login"><a href="#">Login</a></li>
			</ul>
		</div>

			<p>City-Team: Osaka</p>
	</header>

	<div class="background">	
		<div class="container">
			<article>
				<div class="column_1">
					<iframe width="280" height="157.5" src="https://www.youtube.com/embed/CY7zJbmlI0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<div class="column_2">
					<h3>What is Digital Media Studies?</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
				</div>

				<div class="column_3">
					<a href="studentlist.php" class="meet">Meet the Students!</a>					
				</div>
			</article>

			<footer>
				<p>CSC 174:Advanced Front-end Web - Project 3</p>
			</footer>
		
		</div><!-- used for center container -->
	</div>


<?php include "inc/scripts.php" ?>
</body>


</html>
