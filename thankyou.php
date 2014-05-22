<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Thank You</title>
	<link href="stylesheets/base.css" rel="stylesheet" type="text/css" />
	<link href="stylesheets/skeleton.css" rel="stylesheet" type="text/css" />
	<link href="stylesheets/layout.css" rel="stylesheet" type="text/css" />
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Allura|Gruppo|Josefin+Slab|Caudex' rel='stylesheet' type='text/css'>
</head>

<body>
		<div id="container">
		<header>
			<a href="home.php"><img src="assets/logo.png" alt="Logo" /></a>
			<hr>
			<div id='nav'>
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="reservations.php">Reservations</a></li>
				</ul>
				
			</div><!--close the nav-->
		</header>

	<div id="thanks">
		<?php
			echo "<h5>Thank you, <b>{$_POST['name']}</b>, for your comments!</h5>
			<p>{$_POST['comments']}</p>";
			echo "<h6>We look forward to your dining with us soon.</h6>";
		?>
	</div><!--close thanks div-->

	<footer>
		<p>Address: 214 Main Place, Sacramento, CA 95811 Phone: (916)551-1234</p>
	</footer>
	
	</div><!--close container-->
</body>

</html>