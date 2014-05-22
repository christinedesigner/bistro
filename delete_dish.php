<?php
	require( "pass.php" );
?>
<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Delete An Item</title>
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
	</header>
	
	<div id="editmenu">
			<ul>
				<li><h4><a href="logout.php">Log Out</a></h4></li>
				<li><h4><a href="edit_menu.php">Edit Menu</a></h4></li>
				<li><h4><a href="add_dish.php">Add Item</a></h4></li>
				<li><h4><a href="admin.php">Admin</a></h4></li>
			</ul>
		<h3>Item Delete</h3>
	<?php
		$id = $_GET['id'];
	
		if ( $_GET['confirm'] == "yes" ) {
			require( "dbconnect.php" );	
				//Delete the record from the table whose id matches $id
			$sql = "DELETE FROM menu WHERE id='$id' LIMIT 1";
			$result = mysql_query( $sql );
		
		if ( $result ) {
	?>
			<p>Item deleted successfully.</p>
			<p><a href='edit_menu.php'>Return to Edit</a></p>
	<?php
		} else {
	?>
			<p>Unable to delete item</p>
			<p>Error:<?php echo mysql_error(); ?></p>
	<?php
		}
		
	} else {
	?>
		<div id='confirm'>
		<p>Are you sure you want to delete this item?</p>
			<p><a href='<?php echo $_SERVER['PHP_SELF'] . "?id=$id&confirm=yes"; ?>'>Yes</a>&nbsp;
			<a href='edit_menu.php'>No</a></p>
		</div>
	<?php
		}
	?>
	</div><!--close editmenu div-->
	</div><!--close container-->
</body>

</html>