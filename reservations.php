<!DOCTYPE html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<title>Reservations</title>
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
					<li><a href="contact.php">Contact</a></li>
					<li><a href="reservations.php">Reservations</a></li>
				</ul>
				
			</div><!--close the nav-->
		</header>
	
	<div id='reserve'>
	<img src="assets/bistro.jpg" alt="Bistro Shot" />
		<h2>Make a Reservation</h2>
		<p>You may reserve a table by calling us at (916)551-1234 or by using the request form below. Our dining room is open from 5:30pm to 11:30pm seven days a week.</p>	
		
		<div id='request'>
			<h3>Reservation Request</h3>
			<form action="request.php" method="post">
			
			<fieldset>
				<p class="form_label">Name</p>
				<p><input name="name" type="text" size="85" maxlength="95" /></p>
				
				<p class="form_label">Email</p>
				<p><input name="email" type="text" size="85" maxlength="95" /></p>
				
				<p class="form_label">Phone</p>
				<p><input name="phone" type="text" size="45" maxlength="45" /></p>
				
				<p class="form_label">Requested Date</p>
				<p class="date">
					<select name="Day of the Week">
						<option value="monday">Monday</option>
						<option value="tuesday">Tuesday</option>
						<option value="wednesday">Wednesday</option>
						<option value="thursday">Thursday</option>
						<option value="friday">Friday</option>
						<option value="saturday">Saturday</option>
						<option value="sunday">Sunday</option>
					</select>
					<select name="Time">
						<option value="5:30">5:30pm</option>
						<option value="6:30">6:30pm</option>
						<option value="7:30">7:30pm</option>
						<option value="8:30">8:30pm</option>
						<option value="9:30">9:30pm</option>
						<option value="10:00">10:00pm</option>
					</select>
				</p>
				<p class="form_label">Number of Guests</p>
				<p class="guests">
					<select name="guests">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</p>
				<p class="form_label">Please leave us a note with your preferred dates:</p>
				<p><textarea name="message" class="box" cols="70" rows="8"></textarea></p>
			
			</fieldset>
			
			<div id="send_button2">
				<input type="submit" name="submit" value="Send" class="button" />
			</div>
				
			</form>
		
			</div><!--close "reserve" form-->
		</div><!--close "request" form-->
		
		
		<footer>
			<p>Address: 214 Main Place, Sacramento, CA 95811 Phone: (916)551-1234</p>
		</footer>
		
	</div><!--close container-->
</body>

</html>