<?php
    include_once 'config.php';

    session_start();

    if(session_destroy()){
        header("Location: login.php");
    }
?>

<!-- HTML starts here  -->
<head>

</head>

<body>
    Logging out...
</body>