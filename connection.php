<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "media_db";

    $con = @mysqli_connect($host,$user,$pass,$dbName);
    if (!$con)
        die ("fail to connect");
?>