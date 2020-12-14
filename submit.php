<?php




    require ('connection.php');

    

    $sql = "INSERT INTO posts (post_title, post_text)
    VALUES ('".$_POST['post_title']."', '".$_POST['post_text']."')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "New record created successfully";
        header('Location: post.php?id='.$last_id.'&msg=success');

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();


?>