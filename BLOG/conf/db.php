<?php
    // Create connection
    $conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DATABASE);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?> 