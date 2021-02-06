
<html>
    <head>
        <h1> Cookies </h1>
    </head>
    <body>
    <?php
    // Setting new cookies
        setcookie("name", "The Senate", time() + 3600, "/","", 0);
        setcookie("age", "66", time() + 3600, "/", "",  0);

    // Confirming cookies existence
        if( isset($_COOKIE["name"]))
            echo "Welcome " . $_COOKIE["name"] . "<br>\n";
        else
            echo "Unrecognized cookie" . "<br>\n";

        // Deleting cookies by forced expiration
        setcookie( "name", "", time() - 60, "/","", 0);
        setcookie( "age", "", time() - 60, "/","", 0);
    ?>
    </body>
</html>

