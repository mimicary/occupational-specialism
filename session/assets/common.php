<?php

function user_message() {
    $msg = "";
    if (isset($_SESSION["user_message"])) {
        $msg = 'User Message: '.$_SESSION["user_message"];
        $_SESSION["user_message"] = '';
        unset($_SESSION["user_message"]);
    }
    return $msg;
}