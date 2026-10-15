<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $server = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "lekcija13";

    try {

        $conn = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8mb4", $username, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    

        } catch (PDOException $e) {
            error_log("Connection failed: " . $e->getMessage());
            exit("greskapri povezivanju sa bazom");
        }


?>
        


