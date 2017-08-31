<?php
    include_once 'config.php';
?>

<?php
    session_start();
	// Check if information has been passed via the POST-function
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Get username, email, password, and confirmed password
        $myUsername = mysqli_escape_string($db, $_POST['username']);
        $myEmail = mysqli_escape_string($db, $_POST['email']);
        $myPassword = mysqli_escape_string($db, $_POST['password']);
        $myConfirmedPassword = mysqli_escape_string($db, $_POST['confirmedPassword']);
        $myRegistrationCode = mysqli_escape_string($db, $_POST['registrationCode']);

        // Confirm username is not taken
        // Confirm email is valid
        // Confirm passwords are matching
        // Confirm the registration code is contained in the database and delete it, if the registration is successfull
    }
?>

<!-- HTML starts here -->
<head>
    <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username:
        <input type="text" name="username">
        </br>
        Email:
        <input type="text" name="email">
        </br>
        Password:
        <input type="password" name="password">
        </br>
        Confirm Password:
        <input type="password" name="confirmedPassword">
        </br>
        Validation Code:
        <input type="text" name="registrationCode">
        </br>
        <input type="submit" value="register">
    </form>
</body>