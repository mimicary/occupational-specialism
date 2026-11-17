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
        if (update_user_info(dbconn())) {
            $_SESSION['usermessage'] = "Updated successfully.";
            header("Location: bookings.php");
            exit;

        } else {
            $_SESSION['usermessage'] = "Error Updating User Info.";
            header("Location: bookings.php");
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['usermessage'] = "ERROR: " . $e->getMessage();
        header("Location: bookings.php");
        exit;
    } catch (Exception $e){
        $_SESSION['usermessage'] = "ERROR: " . $e->getMessage();
        header("Location: register.php");
        exit;
}
}

$userInfo = get_user(dbconn());

?>
<!DOCTYPE html>

<html>

<head>

    <title> Version 1</title>
    <link rel='stylesheet' type='text/css' href='assets/styles.css' />

</head>

<body>

<div class='container'>


    <?Php
    require_once "assets/nav.php";
    ?>

    <form action='' method='post'>
        <br>

        <input id ="emailbox" type='email' name='email' placeholder='E-mail Address' value='<?php echo $userInfo["email"]?>' required/>
        <br>

        <input type='text' name='fname' placeholder='Firstname' value='<?php echo $userInfo["fname"]?>' required/>
        <br>

        <input type='text' name='sname' placeholder='Surname' value='<?php echo $userInfo["sname"]?>' required/>
        <br>


        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value='' disabled selected>Select an option</option>
            <option value='<?php echo $userInfo['gender']?>' selected='selected'><?php echo $userInfo['gender']?></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="prefer_not_to_say">Prefer not to say</option>
        </select>
        <br>

        <input type='text' name='addressln1' placeholder='Address Line 1' value='<?php echo $userInfo["addressln1"]?>' required/>
        <br>

        <input type='text' name='addressln2' placeholder='Address Line 2' value='<?php echo $userInfo["addressln2"]?>' />
        <br>

        <input type='text' name='postcode' placeholder='Postcode' value='<?php echo $userInfo["postcode"]?>' required/>
        <br>

        <input type='text' name='county' placeholder='County' value='<?php echo $userInfo["county"]?>' required/>
        <br>

        <input type='text' name='phone' placeholder='Phone Number' value='<?php echo $userInfo["phone number"]?>' required/>
        <br>

        <li class='linkbox'> <a href='PasswordUpdate.php'>Update Password?</a></li>

        <input type='submit' name='submit' value='Update' />
        <br>
    </form>


</div>

</body>

</html>