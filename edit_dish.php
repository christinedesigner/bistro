<?php
	require( "pass.php" );
?>
<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Edit Dishes</title>
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
		<h3>Edit this Dish</h3>
	
	<?php
		require( "dbconnect.php" );
	
		function escape_data( $data ) {
			if ( ini_get( 'magic_quotes_gpc' ) ) {
				$data = stripslashes( $data );
			}
			if ( !is_numeric( $data ) ) {
				$data = mysql_real_escape_string( $data );
			}
		return $data;
		}
	
	$id = $_GET['id'];
	
	if ( $_GET['confirm'] == "yes" ) {
		$name = escape_data( $_POST['name'] );
		$price = escape_data( $_POST['price'] );
		$desc = escape_data( $_POST['desc'] );
		$category = escape_data( $_POST['category'] );	
		
		$sql = "UPDATE menu SET name='$name',`desc`='$desc', category='$category', price='$price' WHERE id='$id' LIMIT 1";
		
		$result = mysql_query( $sql );
		
		if ( $result ) {
	?>
			<p>The item has been successfully updated.</p>
			<p><a href='edit_menu.php'>Return to Edit</a></p>
	<?php
		} else {
	?>
			<p>Unable to update item</p>
			<p>Error:<?php echo mysql_error(); ?></p>
	<?php
		}
		
	} else {
		$sql = "SELECT * FROM menu WHERE id='$id' LIMIT 1";
		$result = mysql_query( $sql );
		$myrow = mysql_fetch_array( $result );
		
		$name  = $myrow['name'];
		$price = $myrow['price'];
		$desc  = $myrow['desc'];
		$category = $myrow['category'];
		
		$cat_array = array( "Starters", "Soups", "Salads", "Main Plates", "Desserts" ); 
		
	?>
	
	<form action='<?php echo $_SERVER['PHP_SELF'] . "?id=$id&confirm=yes"; ?>' method='post'>
				<p><label for='name'>NAME:</label><br />
					<input type='text' name='name' id='name' value='<?php echo $name; ?>' /></p>
				<p><label for='price'>PRICE:</label><br />
					<input type='text' name='price' id='price' value='<?php echo $price; ?>' /></p>
				<p><label for='desc'>DESCRIPTION:</label><br />
					<textarea id='desc' name='desc'><?php echo $desc; ?></textarea></p>
				<p>
					<label for='category'>CHOOSE A CATEGORY:</label></p>
					<select id='category' name='category'>
						<?php
							foreach( $cat_array as $cat_name ) {
							if ( $cat_name == $category ) {
								echo "<option value='$cat_name' selected='selected'>$cat_name</option>";
							} else {
								echo "<option value='$cat_name'>$cat_name</option>";
							}
						}
						?>
					</select>
					
					<p class='submitbutton'>
						<input id='submit' type='submit' name='submit' value='submit' />
					</p>
	</form>
	
	<?php
		}
	?>
	</div><!--close editmenu div-->
	</div><!--close container-->
</body>

</html>