<!DOCTYPE html>
<html>
<head>
	<title>Pen</title>
	<style type="text/css">
		h1
		{
			color: blue;
		}
		.cl4
		{
			width: 25%;
			float: left;
		}
		.cl2
		{
			width: 50%;
			float: left;
		}
	</style>
</head>
<body>
	<?php
	if (isset($_POST['submit'])){
		$name=$_POST['name'];
		$mail=$_POST['mail'];

		$message="name :$name". "mail:$mail"."thank you";
		print_r($message);
		exit();

		mail("example@gmail.com", "enquiry", $message);
	}

	?>
	<section>
	<div class="cl4">
		<img src="images/logo.png" alt="xyzlogo">
	</div>
	<div class="cl4">
		<a href="about.php"><h1>About</h1></a>
	</div>
	<div class="cl4">
		<a href="gallery.php"><h1>Gallery</h1></a>
	</div>
	<div class="cl4">
		<a href="contact.php"><h1>Contact</h1></a>
	</div>
</section>
<section>
	<div class="cl2">
		<img src="images/pen.jpg">
	</div>
	<div class="cl2">
		<form method="post">
			Name:
			<input type="text" name="name"><br>
			Email Id:
			<input type="text" name="mail"><br>
			<input type="submit" name="submit">
		</form>
	</div>
</section>
</body>
</html>
