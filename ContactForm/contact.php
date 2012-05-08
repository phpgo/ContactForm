<?php 
session_start();
if (isset($_POST['submit'])) {
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['code'])) {
		if ($_POST['code'] == $_SESSION['random_code']) {
			echo "Thanks for contacting me!";
		} else {
			echo "<p class='error'>Please verify that you typed in the correct code</p>";
		}
	} else {
		echo "<p class='error'>Please fill out the entire form</p>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Contact Form</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
		<fieldset>
			<legend>Contact Us</legend>
			<label>Name:</label>
			<input type="text" name="name" autofocus />
			
			<label>Email:</label>
			<input type="email" name="email" />
			
			<label>Message:</label>
			<textarea name="message" cols="30" rows="10"></textarea>
			
			<img src="captcha.php" alt="captcha" />
			
			<label>Code:</label>
			<input type="text" name="code" />
		
			<input type="submit" name="submit" value="Send" id="submit" />
		</fieldset>
	</form>
</body>
</html>

