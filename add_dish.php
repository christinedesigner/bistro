<?php
	require( "pass.php" );
	//require_once( "utils.php" );
?>
<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Add A New Item</title>
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
	</header>
	<div id="editmenu">
			<ul>
				<li><h4><a href="logout.php">Log Out</a></h4></li>
				<li><h4><a href="edit_menu.php">Edit Menu</a></h4></li>
				<li><h4><a href="admin.php">Admin</a></h4></li>
			</ul>
		<h3>Add an Item</h3>
	<?php
		if ( $_POST['submit'] ) {
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
			
			$name = escape_data( $_POST['name'] );
			$price = escape_data( $_POST['price'] );
			$desc = escape_data( $_POST['desc'] );
			$category = escape_data( $_POST['category'] );
			
			$sql = "INSERT INTO menu ( id, name, price, `desc`, category )
			VALUES( NULL, '$name', '$price', '$desc', '$category' );";
			
			$result = mysql_query( $sql );
			
			if ( $result ) {
				echo "<p>The menu table has been updated with the following:</p>";
				echo "<p><b>$name</b>, at the price of <b>$price</b>, described as <b>$desc</b>, categorized under <b>$category</b>.</p>";
				
			} else {
				echo "<p>There has been an error updating the menu table</p>";
				echo "<p>Error:" . mysql_error() . "</p>";
			}
		} else {
			?>
			
	<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
				<p class="form_label"><label for='name'>NAME:</label><br />
					<input type='text' name='name' id='name' /></p>
				<p class="form_label"><label for='price'>PRICE:</label><br />
					<input type='text' name='price' id='price' /></p>
				<p class="form_label"><label for='desc'>DESCRIPTION:</label><br />
					<textarea id='desc' name='desc'></textarea></p>
				<p>
					<label for='category'>CHOOSE A CATEGORY:</label></p>
					<select id='category' name='category'>
						<option value='Starters'>Starters</option>
						<option value='Soups'>Soups</option>
						<option value='Salads'>Salads</option>
						<option value='Main Plates'>Main Plates</option>
						<option value='Desserts'>Desserts</option>
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