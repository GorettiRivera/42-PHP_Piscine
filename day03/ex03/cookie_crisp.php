<?php
    if ($_GET["action"] === NULL);
    switch ($_GET['action'])
    {
        case "set":
            setcookie($_GET['name'], $_GET['value'], time() + 3600); /* expire in 1 hour */
            break;
        case "get":
            if ($_COOKIE[$_GET['name']] != "")
                echo $_COOKIE[$_GET['name']];
            break;
        case "del":
            setcookie($_GET['name'],"", -1);//there is not a way to directly delete a cookie. Just use setcookie with expiration date in the past, to trigger the removal 
            break;
        default:
            break;
    }
?>
