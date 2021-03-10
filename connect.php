<?php
    define("username","root");
    define("pass","");
    define("host","localhost");
    define("db","test");
    $mysql = new mysqli(host,username,pass,db);

    if ($mysql -> connect_errno) {
        echo "Faild to connect to Mysql:".$mysql -> connect_error;
        exit();
    }
    else{
        echo "DB connect";
    }
?>