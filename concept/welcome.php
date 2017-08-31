<?php
    session_start();
    include_once "config.php";
    include_once "session.php";
?>

<!-- HTML starts here  -->
<head>
    <title>Shikumi</title>
    <link rel="stylesheet" type="text/css" href="../css/template.css">
</head>

<body>
    <!-- Main Navigation Bar -->
	<?php
		$filename = basename(__FILE__, ".php"); 
		include 'navBar.php'; 
    ?>
    
    <div class="mainBody">
        Hello there <?php echo $_SESSION['LOGIN_USER']; ?>
        </br>
        <a href="logout.php" style="text-decoration:none; margin:10px; padding:10px; background-color:red; display:inline-block; color:white"> Logout </a>
    </div>

</body>