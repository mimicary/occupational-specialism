<?php // This open the php code section

session_start();

require_once "assets/common.php";
require_once "assets/dbconnect.php";

if (!(isset($_SESSION['userid']))) {
    $_SESSION['usermessage'] = "ERROR: You are not logged in.";
    header("Location: index.php");
    exit;
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
    $appts = check_booking(dbconn());

    foreach ($appts as $appt){

    }

    ?>

</div>

</body>

</html>