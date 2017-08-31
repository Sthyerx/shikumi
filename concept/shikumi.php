<?php
    session_start();
    include_once 'config.php';
    include_once 'session.php';
?>

<!-- HTML starts here -->
<head>
    <title>Shikumi</title>
    <link rel="stylesheet" type="text/css" href="../css/shikumi.css">
</head>

<header>
   <!-- move titleBar here --> 
</header>

<body>
    <!-- Title bar -->
    <div class="titleBar">
        <div class="title">Shikumi</div>
        <span class="greeting">Logged in as <?php echo $_SESSION['LOGIN_USER']; ?></span>
        <form class="searchForm" method="get"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" name="search" class="searchBox" placeholder="Search...">
        </form>
    </div>

    <!-- Side bar left (navBar) -->
    <!-- TODO: Actually use "nav" tag -->
    <ul class="sideBar">
        <li class="sideBarItem"><a class="" href="login.php">Login</a></li>
        <li class="sideBarItem"><a class="" href="shikumi.php">Shikumi</a></li>
        <li class="sideBarItem"><a class="" href="shikumi.php">Lorem</a></li>
        <li class="sideBarItem"><a class="" href="shikumi.php">Ipsum</a></li>
        <li class="sideBarItem"><a class="" href="shikumi.php">Dolor</a></li>
        <li class="sideBarItem"><a class="" href="shikumi.php">Sit</a></li>
        <li class="sideBarItem"><a class="" href="shikumi.php">Amet</a></li>
    </ul>

    <!-- Main Body -->
    <!-- use "main" tag? -->
    <div class="mainBody">
        Hier könnte unser content stehen
    </div>
    <!-- Side bar right (ad Content?)-->
    <div class="adBox">
        Hier könnte ihre Werbung stehen
    </div>
</body>