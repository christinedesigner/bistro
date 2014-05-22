<?php
	require( "pass.php" );
?>
<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Edit the Menu</title>
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
		<h3>Edit the Menu</h3>
	<?php
		require( "dbconnect.php" );
		
		$sql = "SELECT * FROM menu ORDER BY category, name";
		
		$result = mysql_query ( $sql );
		
		while ( $myrow = mysql_fetch_array( $result ) ) {
			$name = $myrow['name'];
			$category = $myrow['category'];
			$id = $myrow['id'];
			
			$edit = "<a href='edit_dish.php?id=$id'>Edit</a>";
			$delete = "<a href='delete_dish.php?id=$id'>Delete</a>";
			
			echo "<p><b>Category:</b> $category &nbsp; <b>Menu Item:</b> $name<br /> $edit &nbsp; $delete</p>";
			
		}
	?>
	</div><!--close editmenu div-->
	</div><!--closer container-->
</body>

</html>