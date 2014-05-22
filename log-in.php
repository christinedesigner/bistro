<?php
	session_start();
	if ( isset( $_POST['submit'] ) ) {
		$u = $_POST['username'];
		$p = $_POST['password'];
		if ( $u == "milo" && $p == "cute" ) {
			session_start();
			$_SESSION['loggedin'] = true;
				$host = $_SERVER['HTTP_HOST'];
				$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'admin.php';
			header ( "Location: http://$host$uri/$extra" );
			exit();
		}
	}
?>
<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Log In</title>
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
		
			<div class='left'>
				<h3>Log In</h3>
				<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
					<p><label>User Name:</label>
						<input type='text' name='username' /></p>
					<p><label>Password:</label>
						<input type='password' name='password' /></p>
					<input type='submit' name='submit' value='Login' />
				</form>
			</div><!--close left-->
			
			<div class='right'>
				<?php
					if ( $_SESSION['loggedin'] == true ) {
						echo "<ul>
							<li><a href='logout.php'>Log Out</a></li>
							<li><a href='admin.php'>Admin</a></li>
						</ul>";
					}
				?>
			</div><!--close right-->
			<!--<p>Welcome. You have logged in <?php echo $_SESSION['loggedin']; ?> time(s).</p>-->
			
		</section><!--close login section-->
		
		<footer>
			<p>Address: 214 Main Place, Sacramento, CA 95811 Phone: (916)551-1234</p>
		</footer>
		
	</div><!--close container-->
</body>

</html>