<?php
	session_start(); 	
	if ( $_SESSION['loggedin'] != true ) {
			$host = $_SERVER['HTTP_HOST'];
			$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra = 'log-in.php';
		header( "Location: http://$host$uri/$extra" );
		exit();
	}
?>

<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Admin</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link href="stylesheets/base.css" rel="stylesheet" type="text/css" />
	<link href="stylesheets/skeleton.css" rel="stylesheet" type="text/css" />
	<link href="stylesheets/layout.css" rel="stylesheet" type="text/css" />
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Allura|Gruppo|Josefin+Slab|Josefin|Caudex' rel='stylesheet' type='text/css'>
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
					<li><a href="admin.php">Administration</a></li>
				</ul>
				
			</div><!--close the nav-->
		</header>
		
	
		<section id='admin'>
		
			<h3>You are logged in to the Administration Page.</h3>
			<p>What changes would you like to make to the menu?</p>
			<ul>
				<li><a href="add_dish.php">Add items to the menu</a></li>
				<li><a href="edit_menu.php">Make changes to the existing menu</a></li>
			</ul>
			<hr>
			<div id='logs'>
			<ul>
				<li><a href="log-in.php">Log-In</a></li>
				<li><a href="logout.php">Log Out</a></li>
				<!--<li><a href="admin.php">Admin</a></li>-->
			</ul>
			
		</section><!--close admin section-->
		
		<footer>
			<p>Address: 214 Main Place, Sacramento, CA 95811 Phone: (916)551-1234</p>
		</footer>
		
	</div><!--close container-->
</body>

</html>