<?php
    $db = "localhost";
    $user = "1129609";
    $pass = "projectlilly";
    $conn = mysql_connect($db,$user, $pass);
    if(!$conn){
        die("Could not connect to database: ".$db);
    }
    echo "Connection to ".$db."...Success!";
    mysql_close();
?>