<?php
//                          **  Function to connect to the database  **

function connect_db()
{
    $server = "mysql:host=localhost;dbname=php_cms;charset=utf8";
    $user_db = "root";
    $pass_db = "";

    try {
        $pdo = new PDO($server, $user_db, $pass_db);
//        echo "database connection successful";            //** to test the connection **
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $pdo;
}
//connect_db();         //** to test the connection **