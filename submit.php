<?php




    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "anonymous_website";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    

    $sql = "INSERT INTO posts (post_title, post_text)
    VALUES ('".$_POST['post_title']."', '".$_POST['post_text']."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();


?>