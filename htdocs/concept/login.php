<?php
	include_once 'config.php';
?>

<?php
	session_start();
	// Information has been passed via the POST-function
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// Get username and password
		$myusername = mysqli_escape_string($db, $_POST['username']);
		$mypassword = mysqli_escape_string($db, $_POST['password']);

		// Check the DB for matching username and password
		$sql_query = "SELECT id FROM user_data WHERE username = '$myusername' AND password = '$mypassword'";
		$result = mysqli_query($db, $sql_query);
		
		// Get the first row of data of the returned result
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		// Get the row count
		$count = mysqli_num_rows($result);

		// If there is a matching username-password-pair there should only be one row
		if($count == 1) {
			// Discard all previous session data
			session_unset();
			// Register the session under the given username
			$_SESSION['LOGIN_USER'] = $myusername;
			// Forward to welcome.php
			header("Location: welcome.php");
		}else {
			$error = "Username or password is invalid";
		}
	}
?>

<!-- HTML starts here  -->
<head>
	<title> Login </title>
    <link rel="stylesheet" type="text/css" href="../css/template.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <!-- Main Navigation Bar -->
	<?php
		$filename = basename(__FILE__, ".php"); 
		include 'navBar.php'; 
	?>
	
	<!-- Main Body -->
	<div class="mainBody">
		<div class="loginBox">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				Username:
				<input class="textBoxLogIn" style="text" name="username">
				<br>
				<br>
				Password:
				<input class="textBoxLogIn" style="text" type="password" name="password">
				<br>
				<input class="logInButton" type="submit" value="Log in">
				<?php
					// Echo the error message 
					if(isset($error)) echo $error; 
				?>
			</form>
		</div>
	</div>
</body>