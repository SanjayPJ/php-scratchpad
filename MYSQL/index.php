<?php 
    require('db.php');

    $sql = "SELECT * FROM blog";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            print_r($row);
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>