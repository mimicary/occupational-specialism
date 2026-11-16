<?php // This open the php code section

session_start();

require_once "assets/common.php";
require_once "assets/dbconnect.php";

if (!(isset($_SESSION['userid']))) {
    $_SESSION['usermessage'] = "ERROR: You are not logged in.";
    header("Location: index.php");
    exit;
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    try {
        if (delete_appointment(dbconn())) {
            $_SESSION['usermessage'] = "Appointment deleted.";
            header("Location: bookings.php");
            exit;

        } else {
            $_SESSION['usermessage'] = "Error deleting appointment.";
            header("Location: bookings.php");
            exit;
        }
    } catch (PDOException $e) {
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

    <?php
    echo usermessage()

    ?>


    <?php
    $appts = check_booking(dbconn());
    if(!$appts){
        echo"<p>There are no booking available.</p>";
    } else {
        foreach ($appts as $appt) {
            echo "<form id=" . $appt['appid'] . " method='post' >";
            echo "<input type=hidden name='appid' value='" . $appt['appid'] . "'>";
            echo $appt['datetime'] . " with " . $appt['role'] . $appt['fname'] . " " . $appt['sname'];
            echo "<input type='submit' name='delete' value='Delete'>";
            echo "<p>";
            echo "</form>";
        }
    }

    ?>

</div>

</body>

</html>