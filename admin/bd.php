<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $passwd = "root";
    $bd = "kbevi";

    $connection = mysqli_connect($host,$user,$passwd);

    mysqli_select_db($connection, $bd);

    return $connection;
};

?>
