<?php



function string_length($pswd)
{ // check length of a string
    $msg = "";
    if (strlen($pswd) > 8) {
        $msg = "Password long enough!";
    } else {
        $msg = "Password too short!";
    }
    return $msg;
}

function contain_uppercase($pswd) {
    $msg = "";
    if (preg_match("/[A-Z]/", $pswd)) {
        $msg = "Capital used";
    } else {
        $msg = "Capital not used";
    }
    return $msg;
}

function contain_lowercase($pswd) {
    $msg = "";
    if (preg_match("/[a-z]/", $pswd)) {
        $msg = "Lowercase used";
    } else {
        $msg = "Lowercase not used";
    }
    return $msg;
}

function contain_digit($pswd) {
    $msg = "";
    if (preg_match("/[0-9]/", $pswd)) {
        $msg = "Number used";
    } else {
        $msg = "Number not used";
    }
    return $msg;
}

function contains_pswd_word($pswd) {
    $msg = "";
    $pswd = strtolower($pswd);
    if (str_contains($pswd, "password")) {
        $msg = "Contains word -Password-";
    } else {
        $msg = "Does not contain word -Password-";
    }
    return $msg;
}

function contains_special_char($pswd) {
    if (preg_match('/[^A-Za-z0-9_]/', $pswd)) {
        $msg = "Special characters used";
    } else {
        $msg = "Special character not used";
    }
    return $msg;
}

function first_char_not_spec($pswd) {
    if (preg_match('/[^A-Za-z0-9_]/', $pswd[0])) {
        $msg = "Special character first character";
    } else {
        $msg = "Special character not first character";
    }
    return $msg;
}

function last_char_not_spec($pswd) {
    if (preg_match('/[^A-Za-z0-9_]/', $pswd[(strlen($pswd))-1])) {
        $msg = "Special character last character";
    } else {
        $msg = "Special character not last character";
    }
    return $msg;
}

function first_char_not_num($pswd) {
    if (preg_match('/[0-9]/', $pswd[0])) {
        $msg = "Number first character";
    } else {
        $msg = "Number not first character";
    }
    return $msg;
}