<?php



function string_length($pswd)
{ // check length of a string
    $msg = "";
    if (strlen($pswd) > 8) {
        $msg = '<span style="color:#008000;text-align:center;"> - Must be over 8 characters long </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - Must be over 8 characters long </span>';
    }
    return $msg;
}

function contain_uppercase($pswd) {
    $msg = "";
    if (preg_match("/[A-Z]/", $pswd)) {
        $msg = '<span style="color:#008000;text-align:center;"> - Contains capital </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - Contains capital </span>';
    }
    return $msg;
}

function contain_lowercase($pswd) {
    $msg = "";
    if (preg_match("/[a-z]/", $pswd)) {
        $msg = '<span style="color:#008000;text-align:center;"> - Contains lowercase </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - Contains lowercase </span>';
    }
    return $msg;
}

function contain_digit($pswd) {
    $msg = "";
    if (preg_match("/[0-9]/", $pswd)) {
        $msg = '<span style="color:#008000;text-align:center;"> - Contains number </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - Contains number </span>';
    }
    return $msg;
}

function contains_pswd_word($pswd) {
    $msg = "";
    $pswd = strtolower($pswd);
    if (!(str_contains($pswd, "password"))) {
        $msg = '<span style="color:#008000;text-align:center;"> - Cannot contain word "Password" </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - Cannot contain word "Password" </span>';
    }
    return $msg;
}

function contains_special_char($pswd) {
    if (preg_match('/[^A-Za-z0-9_]/', $pswd)) {
        $msg = '<span style="color:#008000;text-align:center;"> - Contains special character </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - Contains special character </span>';
    }
    return $msg;
}

function first_char_not_spec($pswd) {
    if (!(preg_match('/[^A-Za-z0-9_]/', $pswd[0]))) {
        $msg = '<span style="color:#008000;text-align:center;"> - First character may not be special </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - First character may not be special </span>';
    }
    return $msg;
}

function last_char_not_spec($pswd) {
    if (!(preg_match('/[^A-Za-z0-9_]/', $pswd[(strlen($pswd))-1]))) {
        $msg = '<span style="color:#008000;text-align:center;"> - Special Character may not be last character </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - Special Character may not be last character </span>';
    }
    return $msg;
}

function first_char_not_num($pswd) {
    if (!(preg_match('/[0-9]/', $pswd[0]))) {
        $msg = '<span style="color:#008000;text-align:center;"> - Number may not be first character </span>';
    } else {
        $msg = '<span style="color:#ff0000;text-align:center;"> - Number may not be first character </span>';
    }
    return $msg;
}