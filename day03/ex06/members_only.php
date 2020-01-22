<?php
    $username = $_SERVER["PHP_AUTH_USER"];
    $password = $_SERVER["PHP_AUTH_PW"];
    if ($username === "zaz" && $password === "Ilovemylittleponey")
    {
    ?><html><body>
Hello Zaz<br />
    <?php
$base = base64_encode(file_get_contents('../img/42.png'));
echo "<img src='data:image/png;base64,".$base."'>\n";
    ?>
</body></html><?php
    }
    else
    {       
        header("HTTP/1.0 401 Unauthorized");
        header("WWW-Authenticate: Basic realm=''Member area''");
            
?>
<html><body>That area is accessible for members only</body></html>
<?php
    }
?>