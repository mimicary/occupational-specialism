<?php // This open the php code section

session_start();

require_once "assets/common.php";
require_once "assets/dbconnect.php";

if (isset($_SESSION['userid'])) {
    $_SESSION['usermessage'] = "ERROR: You have already logged in!";
    header("Location: index.php");
    exit;
}


$bookings = check_booking(dbconn());

if ($bookings === false){
    $_SESSION['usermessage'] = "No Bookings Made";
} else {
    $_SESSION['usermessage'] = $bookings;
}


?>

<!DOCTYPE html>

<html>

<head>

    <title>Version 1</title>
    <link rel='stylesheet' type='text/css' href='assets/styles.css' />

</head>

<body>

<div class='container'>

    <?php
    require_once "assets/nav.php";
    ?>

    <?php
    echo usermessage();
    ?>

</div>

</body>

</html>