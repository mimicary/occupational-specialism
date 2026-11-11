<?php

session_start();

require_once "assets/common.php";
require_once "assets/dbconnect.php";

if (!(isset($_SESSION['userid']))) {
    $_SESSION['usermessage'] = "ERROR: You are NOT logged in.";
    header("Location: index.php");
    exit;
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {

    try {

        if(make_booking(dbconn())){
            $_SESSION['usermessage'] = "Booking has been made.";
            header("Location: bookings.php");
            exit;

        } else {
            $_SESSION['usermessage'] = "ERROR: There was a problem with the booking.";
            header("Location: bookings.php");
            exit;
        }
    }
    catch (PDOException $e) {
        $_SESSION['usermessage'] = "ERROR: " . $e->getMessage();
        header("Location: bookings.php");
        exit;
    }

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

    <form action='' method='post'>

        <label for="appt-time">Choose a time for your appointment</label>

        <input
            type="datetime-local"
            id="appt-time"
            name="appt-time"
        />

        <br>
        <select name="professional">

            <?php

            $pro = pro_getter(dbconn());

            foreach ($pro as $staff){

                echo '<option value ="' .$staff['proid']. '">' . $staff['role'] . " " . $staff['fname'] . " " . $staff['sname'] . " - Room " . $staff['roomno'] . "</option>";
            }



            ?>
        </select>

        <br>

        <button type="submit">Submit</button>
    </form>

</div>

</body>

</html>
