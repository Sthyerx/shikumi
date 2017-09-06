
<?php
    /*
     * This file is used to validate that the client currently has a valid session going on.
     * Should this not be the case, the client will be redirected to the login page.
     * It also updates the "LAST_ACTIVITY" session value.
     * This file should be included at the very top of every site that requires a valid session to view.
     */
    include_once 'config.php';
    $session_timeout = 3600; // The time (in seconds) after which the session times out
    // If there is no session, start a new session
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    /*
    $user_check = $_SESSION['LOGIN_USER'];

    $ses_sql = mysqli_query($db, "select <USERNAME_COLUMN> from <USER DATA TABLE> where <USERNAME_COLUMN> = '$user_check'");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['<USERNAME_COLUMN>'];
    */
    // Check if a a login_user is set
    if(!isset($_SESSION['LOGIN_USER'])){
        session_unset();
        session_destroy();
        header("Location: login.php");
    }
    // Check if the session has expired
    if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_timeout) ){
        session_unset();
        session_destroy();
        header("Location: login.php");
    }
    // Update last activity time stamp
    $_SESSION['LAST_ACTIVITY'] = time();
?>