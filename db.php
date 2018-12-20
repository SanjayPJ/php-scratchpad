<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "blog";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM posts";
    $result = $conn->query($sql);


    // var_dump($result);
    // var_dump($result->fetch_assoc());
    // var_dump($result->fetch_assoc());

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // echo "yea";
            var_dump($row);  
        }
    } else {
        echo "0 results";
    }

    $sql = "SELECT * FROM posts WHERE id=2";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    var_dump($row);

    $conn->close();

?>