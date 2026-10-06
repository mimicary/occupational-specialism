<DOCTYPE HTML>
    <?php
    session_start(); # session start on pages not each file

    require_once('assets/common.php'); # requires common so functions can be called


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //$_SESSION['user_message'] = $_POST["message"];
        if (string_length($_POST["password"])) {
            $_SESSION["user_message"] = "Password long enough!";
        } else {
            $_SESSION["user_message"] = "Password too short!";
        }
    }

    ?>
    <html>
    <head>
        <title>Session Page</title>

        <link rel="stylesheet" href="assets/styles.css"/> <!-- style sheet -->

    </head>

    <body>
    <h1>Password Checker</h1>

    <div class="navi">
        <a href="index.php">Home Page</a>
    </div>


    <form method="post" action="">

        <input type="text" name="password" required/>
        <input type="submit" name="submit"/>

    </form>
    <?php
    echo user_message() # calls subroutine and runs inside this page so can use variables from this page
    ?>


    </body>
    </html>

