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


    $sql = "INSERT INTO comments (comment, post_id )
    VALUES ('".$_POST['post_comment']."', '".$_POST['post_id']."')";

    if ($conn->query($sql) === TRUE) {

        $post_comment_count = (int)$_POST['post_comment_count']+1;

        $anothersql = "UPDATE posts SET comments_number = '".$post_comment_count. "' WHERE id = '".$_POST['post_id']."'";
        if ($conn->query($anothersql) === TRUE) {
            echo "COmmen updated succesffully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        header('Location: post.php?id='.$_POST['post_id']);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();


?>