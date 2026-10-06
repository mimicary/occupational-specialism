<DOCTYPE HTML>
    <?php
    session_start(); # session start on pages not each file

    require_once('assets/common.php'); # requires common so functions can be called




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

        <input type="text" name="password" required id="text_box" placeholder="Password..."/>
            <br>
            <br>
        <input type="submit" name="submit"  id="submit_button"/>

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo string_length($_POST["password"]);
        echo nl2br("\n");
        echo contain_uppercase($_POST["password"]);
        echo nl2br("\n");
        echo contain_lowercase($_POST["password"]);
        echo nl2br("\n");
        echo contain_digit($_POST["password"]);
        echo nl2br("\n");
        echo contains_pswd_word($_POST["password"]);
        echo nl2br("\n");
        echo contains_special_char($_POST["password"]);
        echo nl2br("\n");
        echo first_char_not_num($_POST["password"]);
        echo nl2br("\n");
        echo first_char_not_spec($_POST["password"]);
        echo nl2br("\n");
        echo last_char_not_spec($_POST["password"]);
    }
    ?>


    </body>
    </html>

