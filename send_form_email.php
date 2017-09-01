<html>
	<head>
		<link rel="shortcut icon" href="pics/favicon.ico">
		<title>Fernando's Portfolio</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/animate.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://use.fontawesome.com/214cb03c69.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<div id="header">
			<h1>Fernando de la Concha</h1>
			<h3>Programming enthusiast & Web developer</h3>
		</div>
		<div>
			<?php
				$email_to = "fernandodelaconcha@gmail.com";
				$subject = "Website contact form";
				$name = $_POST['name'];
				$comments = $_POST['comments'];
				$email_from = $_POST['email'];
				$body="Name: $name.\n Email: $email_from. \n Message: .$comments";
				$link_address="index.html";
				mail($email_to,$subject,$body);
			?>
		<div class="col-xs-8 col-xs-offset-2 send-email animated zoomIn"><p>The message was succesfully sent! <br><br> Click <a href="index.html">here</a> to go to go back to the main site</p><div>
		</div>
	</body>
</html>