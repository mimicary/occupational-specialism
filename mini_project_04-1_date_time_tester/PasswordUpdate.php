<?php

session_start();

require_once "assets/common.php";
require_once "assets/dbconnect.php";
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


        <input type='submit' name='submit' value='Update' />
        <br>
    </form>


</div>

</body>

</html>