<?php
    header("Content-Type: application/json; charset=UTF-8");
    $content_raw = file_get_contents("php://input"); // THIS IS WHAT YOU NEED
    
    $decoded_data = json_decode($content_raw, true); 


    $post_id = $decoded_data['post_id'];
    $like_type = $decoded_data['like_type'];
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
   

    
    $sql = "SELECT * FROM posts WHERE id = ".$post_id ;

    $posts = $conn->query($sql);

      

    $post = $posts->fetch_assoc();
    
    if ($post){
        if ($like_type=='like'){
            $updatedLikes = $post['likes']+1;

            $anothersql = "UPDATE posts SET likes = '".$updatedLikes. "' WHERE id = '".$post_id."'";
            if ($conn->query($anothersql) === TRUE) {
                echo "like updated succesffully";
                die;
            } else {
                echo "Error updating record: " . $conn->error;
                die;
            }
        }else {
            $updatedDisLikes = $post['dislikes']+1;

            $anothersql = "UPDATE posts SET dislikes = '".$updatedDisLikes. "' WHERE id = '".$post_id."'";
            if ($conn->query($anothersql) === TRUE) {
                echo "dislike updated succesffully";
                die;
            } else {
                echo "Error updating record: " . $conn->error;
                die;
            }
        }
    }
    


$conn->close();


?>