<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Bistro 214 Menu</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link href="stylesheets/base.css" rel="stylesheet" type="text/css" />
	<link href="stylesheets/skeleton.css" rel="stylesheet" type="text/css" />
	<link href="stylesheets/layout.css" rel="stylesheet" type="text/css" />
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Allura|Gruppo|Josefin+Slab' rel='stylesheet' type='text/css'>
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
			<p class="clear">&nbsp;</p>
		</header>
		
		
		<div id='main'>
			<div id='links'>
				<ul>
					<li><a href="<?php echo $_SERVER['PHP_SELF'] . "?category=Starters"; ?>">STARTERS</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF'] . "?category=Soups"; ?>">SOUPS</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF'] . "?category=Salads"; ?>">SALADS</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF'] . "?category=Main Plates"; ?>">MAIN PLATES</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF'] . "?category=Desserts"; ?>">DESSERTS</a></li>
					<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">FULL MENU</a></li>
				</ul>
			</div><!--close links div-->
		
			<div id='menu'>
				<?php
				
				// Include the connection script
				require( "dbconnect.php" );
				
				// Check for the $_GET['category']
				if ( isset( $_GET['category'] ) ) {
					
					//category is set, so load only menu items that match the category chosen
					$results = mysql_query( "SELECT * FROM menu WHERE category='{$_GET['category']}' ORDER BY name" );
				} else {
					//category is NOT set, so load the entire menu
					$results = mysql_query( "SELECT * FROM menu ORDER BY cat_sort, name" );
				}

				// Display the results
				
				$current_cat = ""; //Use this variable to mark the current category
		
				while ( $myrow = mysql_fetch_array( $results ) ) {
				// Check the category
				if ( $myrow['category'] != $current_cat ) { // If the record's current category does not match $current_cat
					echo "<h2 class='cat_header'>{$myrow['category']}</h2>"; // // write a new h2 header with the name of current category
					$current_cat = $myrow['category']; // set $current_cat to the value of the current category
				}
				
					$name = $myrow['name'];
					$price = $myrow['price'];
					$desc = $myrow['desc'];
		
					// Each item will be displayed in an inner div with a class name
			
					echo "<div class='item'>
						<h3>$name...$price </h3>
						<h4>$desc</h4>
					</div>\n"; //Close menu item div and add a line return (\n)
				}
				
				?>
			</div><!--close menu div-->
				
		</div><!--close 'main'-->
		<footer>
			<p>Address: 214 Main Place, Sacramento, CA 95811 Phone: (916)551-1234</p>
		</footer>
		
		</div><!--close container-->
</body>

</html>