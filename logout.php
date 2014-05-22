<?php
	session_start(); 	
	if ( $_SESSION['loggedin'] != true ) {
		header( "Location: log-in.php" );
		exit();
	} else {
		session_destroy();
		setcookie( session_name(), '', time() - 4200, '/' );
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
	<link href='http://fonts.googleapis.com/css?family=Allura|Gruppo|Josefin+Slab|Caudex' rel='stylesheet' type='text/css'>
</head>

<body>
		<div id="container">
		<header>
			<h1><a href="home.php">Bistro 214</a></h1>
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
		
	
		<section id='login'>
		
			<h3>You have been logged out.</h3>
			
			<div id='logout'>
			<ul>
				<li><a href="log-in.php">Log back in</a></li>
				<!--<li><a href="logout.php">Log Out</a></li>
				<li><a href="admin.php">Admin</a></li>-->
			</ul>
			</div>
			
		</section><!--close login section-->
		
		<footer>
			<p>Address: 214 Main Place, Sacramento, CA 95811 Phone: (916)551-1234</p>
		</footer>
		
	</div><!--close container-->
</body>

</html>