

<?php
  require ('header.php');
?>

<main class="o-max-width o-site-main">
<div class="hero-slider" data-carousel>
  <div class="carousel-cell" style="background-image:url(https://68.media.tumblr.com/57836ee52bc9355ad7c5fed5abf91ccc/tumblr_oiboo6MaRS1slhhf0o1_1280.jpg);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">Anonim</h3>
      <h2 class="title">Share your great thoughts</h2>
      <a href="form.php" target="_blank" class="btn">Tell us more</a>
    </div>
  </div>
<div class="carousel-cell" style="background-image:url(https://68.media.tumblr.com/c40636a5a0d4aa39c335c8db40d2144f/tumblr_omc7z7Xv8N1slhhf0o1_1280.jpg);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">Anonim</h3>
      <h2 class="title">Your opiniion is important</h2>
      <a href="form.php" target="_blank" class="btn">Start writing</a>
    </div>
  </div>
<div class="carousel-cell" style="background-image:url(https://68.media.tumblr.com/3beb13a4167aa8b5c4743eac17bf351c/tumblr_o8nyvtiHfC1slhhf0o1_1280.jpg);">
    <div class="overlay"></div>
    <div class="inner">
      <h3 class="subtitle">Anonim</h3>
      <h2 class="title">Your thoughts mater</h2>
      <a href="form.php" target="_blank" class="btn">Share story</a>
    </div>
  </div>
</div>

<div class="posts">
  <div class="newPosts">
    <h2>New posts<h2>
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

      
      // For pagination starts

      
      if (!isset ($_GET['page']) ) {  
        $page = 1;  
      } else {  
        $page = $_GET['page'];  
      }
      $results_per_page = 2;  
      $page_first_result = ($page-1) * $results_per_page; 
      $sql = "SELECT * FROM posts";
      $posts = $conn->query($sql);
      $number_of_result = mysqli_num_rows($posts);  
      $number_of_page = ceil ($number_of_result / $results_per_page);  
      
      // For pagination ends

      $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT " . $page_first_result . "," . $results_per_page;
      $posts = $conn->query($sql);


      if ($posts->num_rows > 0) {
        
        while($post = $posts->fetch_assoc()) {
          $post["post_date"] = date("jS F, Y", strtotime($post["post_date"]));
          $post["post_time"] = date("H:i", strtotime($post["post_date"])); 
          echo '<article class="o-box c-card c-post">';
            echo '<a href="post.php?id='.$post["id"].'" ><h2 class="c-post__title">'. $post["post_title"].'</h2></a>';
            echo '<h6 class="c-post__meta">'. $post["post_date"].' &bull; <a class="c-post__link" href="#"> <i class="fa fa-clock"></i> '. $post["post_time"].'</a></h6>';
            echo '<a href="post.php?id='.$post["id"].'" style="color: #2b4450">'.substr($post["post_text"],0, 100)  .'...  <span style="text-decoration:underline; color: blue" >Read More</span> </a>';
            echo '<div class="icons"> <div onclick="like('.$post["id"].', `like`)" id="likeID_'.$post["id"].'"> <i class="fa fa-thumbs-up "  ></i> <span id="likeCountID_'.$post["id"].'">'. $post["likes"].'</span></div> <div onclick="like('.$post["id"].', `dislike`)" id="dislikeID_'.$post["id"].'"> <i class="fa fa-thumbs-down" ></i> <span id="dislikeCountID_'.$post["id"].'">'. $post["dislikes"].'</span></div> <a href="post.php?id='.$post["id"].'"> <i class="fa fa-eye"></i> '. $post["views"].'</a> <a href="post.php?id='.$post["id"].'"> <i class="fa fa-comment"></i> '. $post["comments_number"].'</a> </div>';
          echo '</article>';
        }
      } else {
        echo "0 results";
      }
    ?>
  </div>
  <div class="popularPosts">
  <h2>Popular posts<h2>
    <?php
      
      $sql = "SELECT * FROM posts ORDER BY likes DESC LIMIT " . $page_first_result . "," . $results_per_page;
      $posts = $conn->query($sql);

      

      if ($posts->num_rows > 0) {
        
        while($post = $posts->fetch_assoc()) {
          
          $post["post_date"] = date("jS F, Y", strtotime($post["post_date"]));
          $post["post_time"] = date("H:i", strtotime($post["post_date"])); 
          echo '<article class="o-box c-card c-post">';
            echo '<a href="post.php?id='.$post["id"].'" ><h2 class="c-post__title">'. $post["post_title"].'</h2></a>';
            echo '<h6 class="c-post__meta">'. $post["post_date"].' &bull; <a class="c-post__link" href="#"> <i class="fa fa-clock"></i> '. $post["post_time"].'</a></h6>';
            echo '<a href="post.php?id='.$post["id"].'" style="color: #2b4450">'.substr($post["post_text"],0, 100)  .'...  <span style="text-decoration:underline; color: blue" >Read More</span> </a>';
            echo '<div class="icons"> <div onclick="like('.$post["id"].', `like`)" id="likeID_'.$post["id"].'"> <i class="fa fa-thumbs-up "  ></i> <span id="likeCountID_'.$post["id"].'">'. $post["likes"].'</span></div> <div onclick="like('.$post["id"].', `dislike`)" id="dislikeID_'.$post["id"].'"> <i class="fa fa-thumbs-down" ></i> <span id="dislikeCountID_'.$post["id"].'">'. $post["dislikes"].'</span></div> <a href="post.php?id='.$post["id"].'"> <i class="fa fa-eye"></i> '. $post["views"].'</a> <a href="post.php?id='.$post["id"].'"> <i class="fa fa-comment"></i> '. $post["comments_number"].'</a> </div>';
          echo '</article>';
        }
      } else {
        echo "0 results";
      }
      $conn->close();
    ?>
  </div>
  </div>
</div>

<div class="pagination p12">
      <ul>
        
        <?php
          if (isset($_GET["page"])){
            $current_page = $_GET['page'];
            echo ' <a href="index.php?page='.($current_page-1).'"><li>Previous</li></a>';
          }else {
            $current_page = 1;
          }
          
          for($page = 1; $page<= $number_of_page; $page++) {  
            
            if ($page == $current_page){
              $isActive = "is-active";
            }else {
              $isActive = "";

            }
            echo '<a class="'.$isActive.'" href="index.php?page='.$page.'"><li>'.$page.'</li></a>'; 

             
          }
          if ($current_page!=$number_of_page){
            echo ' <a href="index.php?page='.($current_page+1).'"><li>Next</li></a>';
          }
        ?>
      </ul>
    </div>
  
  
</main>

<?php
  require ('footer.php');
?>