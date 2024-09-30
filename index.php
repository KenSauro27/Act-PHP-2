<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
</head>
<body>
	<?php
	// Check if a user is already logged in
	if (isset($_SESSION['firstName'])) {
		// Display message and prevent further login attempts
		echo "<h2>User " . $_SESSION['firstName'] . " is already logged in. Please log out first.</h2>";
		echo '<a href="unset.php">Logout</a>';
		exit(); // Prevent the form from being shown
	}
	?>

	<h1>Fill in the input fields below</h1>

	<h2>
		<!-- Display logged-in user -->
		User logged in:
		<?php
		// Show first name if set in session (after successful login)
		if(isset($_SESSION['firstName'])) {
			echo $_SESSION['firstName'];
		} else {
			echo "None"; // Default message if no one is logged in
		}
		?>		
	</h2>

	<h2>
		<!-- Display user password -->
		User password:
		<?php
		// Show password if set in session (after successful login)
		if(isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		} else {
			echo "None"; // Default message if no one is logged in
		}
		?>		
	</h2>

	<!-- Logout link -->
	<a href="unset.php">Logout</a>

	<!-- Display the login form -->
	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName" required></p>
		<p><input type="password" placeholder="Password here" name="password" required></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>
</body>
</html>
