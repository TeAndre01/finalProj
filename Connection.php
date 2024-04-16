<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>


<?php
    $server_name = "localhost";
    $username = "root";
    $email = "";
    $password = "";
    $dbname = "test";

    $conn = new mysqli($server_name, $username, $email, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection Error: ". $conn->connect_error);
    }

    $stmt = $conn->prepare("Insert INTO users (username, email, password) VALUES (?,?,?)");
    $stmt->bind_param("s", $dbname);

    $firstname = "";
    $lastname = "";
    $email = "";
    $password = "password";
    $stmt->execute();

    echo "Record has been made successfully";

    $stmt = close();
    $conn->close();

    ?>
