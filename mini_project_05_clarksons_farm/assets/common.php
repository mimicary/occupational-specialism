<?php

function usermessage(){  # function to check for a user message and return echoable string
    if(isset($_SESSION['usermessage'])){  # checks to see if it is set

        $msg = $_SESSION['usermessage'];  # formats string appropriately
        unset($_SESSION['usermessage']);  # unsets the user message so it doesn't keep being displayed

    } else {
        $msg = "";  # if no message has been set, returns empty string.
    }
    return $msg;
}


function reg_user($conn){

    // Prepare and execute the SQL query
    $sql = "INSERT INTO patient (email, password, dob, addressln1, addressln2, county, postcode, phone, signup) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";  //prepare the sql to be sent
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['email']);  //bind parameters for security
    // Hash the password
    $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt->bindParam(2, $pwd);

    $stmt->bindParam(3, $_POST['dob']);
    $stmt->bindParam(4, $_POST['addressln1']);
    $stmt->bindParam(5, $_POST['addressln2']);
    $stmt->bindParam(6, $_POST['county']);
    $stmt->bindParam(7, $_POST['postcode']);
    $stmt->bindParam(8, $_POST['phone']);
    $stmt->bindParam(9, $_POST['signup']);


    $stmt->execute();  //run the query to insert
    $conn = null;  // closes the connection so cant be abused.
    return true; // Registration successful
}

function login($conn, $email)
{
    $sql = "SELECT user_id, password FROM user WHERE email = ?"; //set up the sql statement
    $stmt = $conn->prepare($sql); //prepares
    $stmt->bindParam(1, $email);  //binds the parameters to execute
    $stmt->execute(); //run the sql code
    $result = $stmt->fetch(PDO::FETCH_ASSOC);  //brings back results
    $conn = null;  // nulls off the connection so cant be abused.

    if ($result) {  // if there is a result returned
        return $result;

    } else {
        return false;
    }
}
function get_user($conn)
{

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM user WHERE user_id = ?";  //prepare the sql to be sent
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_SESSION['userid']);  //bind parameters for security

    $stmt->execute(); //run the sql code
    $result = $stmt->fetch(PDO::FETCH_ASSOC);  //brings back results
    $conn = null;


    return $result;

}

function update_user_info($conn){
    $sql = "UPDATE patient SET 
                   email = ?, 
                   addressln1 = ?, 
                   addressln2 = ?, 
                   county = ?, 
                   postcode = ?, 
                   phone = ?, 
                   signup = ?
               WHERE user_id = ?";  //prepare the sql to be sent

    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1, $_POST['email']);  //bind parameters for security
    $stmt->bindParam(2, $_POST['addressln1']);
    $stmt->bindParam(3, $_POST['addressln2']);
    $stmt->bindParam(4, $_POST['county']);
    $stmt->bindParam(5, $_POST['postcode']);
    $stmt->bindParam(6, $_POST['phone']);

    $stmt->bindParam(7, 'True');

    $stmt->bindParam(8, $_SESSION['userid']);

    $stmt->execute(); //run the sql code
    $conn = null;

    return true;

}