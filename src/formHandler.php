<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // destructuring obj
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $address = $_POST['address']; 
    $propertyType = $_POST['propertyType']; 
    $otherAddress = $_POST['otherAddress']; 
    $notes = $_POST['notes']; 

    echo "Form received";

    // inject the dbHandler page, and make the sql query

    try {
        require_once "dbHandler.php";

        $SQLquery = "INSERT INTO permits (name, email, phone, address, propertyType, otherAddress, notes) VALUES (:name, :email, :phone, :address, :propertryType, :otherAddress, :notes);";

        $statement = $connection->prepare($SQLquery);

        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":address", $address);
        $statement->bindParam(":propertyType", $propertyType);
        $statement->bindParam(":otherAddress", $otherAddress);
        $statement->bindParam(":notes", $notes);

        $statement->execute();

        $connection = null;
        $statement = null;

        header("Location: ../ui/index.html");

        die();
    } catch (PDOException $e) {
        die("SQL query failed: " . $e->getMessage());
    }

    } else {
        header("Location: ../ui/index.html");
    }
