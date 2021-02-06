

<html>
    <head>
        <h1> Sessions </h1>
    </head>
    <body>
        <?php
            session_start();

            if( isset( $_SESSION["counter"] ) ) {
                ++$_SESSION["counter"];
            } else {
                $_SESSION["counter"] = 1;
            }

            $msg = "Number of visits: ".  $_SESSION["counter"] . "<br>\n";
            echo $msg;
        ?>

            <a href="safe_page.php"> Safe Page </a>
    <button action=
        "<?php
            unset($_SESSION["counter"]);
            session_destroy();
        ?>
        <?php
            echo htmlspecialchars(string: SID) . "<br>\n";
        ?>">
        Destroy Session </button>
    </body>
</html>

