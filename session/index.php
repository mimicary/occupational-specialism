<DOCTYPE HTML>
    <?php
    session_start(); # session start on pages not each file

    require_once('assets/common.php');


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $_SESSION['user_message'] = $_POST["message"];
    }

    ?>
    <html>
    <head>
        <title>Session Page</title>

        <link rel="stylesheet" href="assets/styles.css"

    </head>

    <body>

    <?php
    echo user_message()
    ?>

    <form method="post" action="">

        <input type="text" name="message" required/>
        <input type="submit" name="submit"/>

    </form>



    </body>
    </html>

