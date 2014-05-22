<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Contact Us</title>
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
			<a href="home.php"><img src="assets/logo.png" alt="Logo" /></a>
			<hr>
			<div id='nav'>
				<ul>
					<li><a href="about.php">About</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="reservations.php">Reservations</a></li>
				</ul>
				
			</div><!--close the nav-->
		</header>
		
	<div id='contact'>
		<h2>Contact Us</h2>
		<div id='left'>
			
			
			<h3>ADDRESS</h3>
			<p>214 Main Place<br />
			Sacramento, CA 95811</p>
			
			<h3>PHONE</h3>
			<p>P: (916)551-1234<br />
			F: (916)551-5667</p>
			
			<h3>HOURS</h3>
			<p>Dinner: 5:30pm-11:30pm<br />
			Bar: 4:30pm-1:00am</p>
			
		</div><!--close left section-->
		
		<div id='right'>
			<h3>Please leave us your comments.</h3>
			<form action="thankyou.php" method="post">
			
			<fieldset>
				<p class="form_label">Name</p>
				<p><input name="name" type="text" size="35" maxlength="45" /></p>
				
				<p class="form_label">Email</p>
				<p><input name="email" type="text" size="35" maxlength="45" /></p>
				
				<p class="form_label">Have you dined with us before?</p>
				<p class="radio_label" style="color:#EEEED1; font-family: 'Caudex'"><input name="answer" type="radio" value="Yes" />Yes
				<input name="answer" type="radio" value="No" />No</p>
				
				<p class="form_label">Message</p>
				<p><textarea name="message" class="box" cols="40" rows="8"></textarea></p>
			
			</fieldset>
			
			<div id="send_button">
				<input type="submit" name="submit" value="Send" class="button" />
			</div>
			
			</form>
		
		</div><!--close right comment form-->
		
		
		<footer>
			<p>Address: 214 Main Place, Sacramento, CA 95811 Phone: (916)551-1234</p>
		</footer>
		
	</div><!--close container-->
</body>

</html>