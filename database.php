<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "signupdetails";


    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>

<?php

    $sql = "select * from users;";
    $result = mysqli_query($conn, $sql);

    $resultcheck = mysqli_num_rows($result);

    if($resultcheck > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['Name']. <br>;
        }
    }
?>