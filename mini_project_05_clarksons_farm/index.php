<?php // This open the php code section

if (!isset($_GET['usermessage'])) {
    session_start();
    $message = false;
} else {
    // Decode the message for display
    $message = htmlspecialchars(urldecode($_GET['usermessage']));
}
require_once "assets/common.php";
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

<div class='content'>
<br>

<h2> Clarkson's Farm Website.</h2>

<p class='content'> Boiler plate text about the Farm </p>

<p class='content'> You have to be registered to login and book </p>

<br>
<?php
if (!$message){
    echo usermessage();
} else {
    echo $message;
}
?>

</div>

</div>

</body>

</html>