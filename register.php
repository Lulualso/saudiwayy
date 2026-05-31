<?php

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST["first_name"];
    $last_name  = $_POST["last_name"];
    $email      = $_POST["email"];
    $phone      = $_POST["phone"];
    $password   = $_POST["password"];

    $stmt = $conn->prepare("INSERT INTO user (fname, lname, Email, Phone, password)
                            VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssis", $first_name, $last_name, $email, $phone, $password);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>