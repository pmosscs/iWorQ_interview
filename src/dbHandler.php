<?php

// pdo db connection: 
    $sqlServerName = "localhost\ServerName";
    $dataBase = "my_database";
    $username = "username";
    $password = "password";
    $dataBaseConnectionInfo = "sqlsrv:Server=" . $sqlServerName . ";Database=" . $dataBase; 
    
    try {
        $connection = new PDO($dataBaseConnectionInfo, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "SQL connection failed: " . $e->getMessage();
    }
