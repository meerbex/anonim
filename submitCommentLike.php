<?php
    header("Content-Type: application/json; charset=UTF-8");
    $content_raw = file_get_contents("php://input"); // THIS IS WHAT YOU NEED
    
    $decoded_data = json_decode($content_raw, true); 


    $comment_id = $decoded_data['comment_id'];
    $comment_type = $decoded_data['comment_type'];
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

    if ($comment_type == "main"){
        $commentTable = "comments";
    }else {
        $commentTable = "comments_replies";

    }
   

    
    $sql = "SELECT * FROM ".$commentTable." WHERE id = ".$comment_id ;

    $comments = $conn->query($sql);

      

    $comment = $comments->fetch_assoc();
    
    if ($comment){
        $updatedLikes = $comment['likes']+1;

        $anothersql = "UPDATE ".$commentTable." SET likes = '".$updatedLikes. "' WHERE id = '".$comment_id."'";
        if ($conn->query($anothersql) === TRUE) {
            echo "comment updated succesffully";
            die;
        } else {
            echo "Error updating record: " . $conn->error;
            die;
        }
    }
    


$conn->close();


?>