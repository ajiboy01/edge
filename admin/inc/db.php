<?php

// Define username and password
const USERNAME = "ajiboy";
const PASSWORD = "Haziqfird01";
const DSN      = "mysql:host=localhost;dbname=ajiboy";

// Connect to database using PDO
try {
    $conn = new PDO(DSN, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Error ". $e->getMessage();
    exit();
}