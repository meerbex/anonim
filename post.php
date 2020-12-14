

<?php
  require ('parts/header.php');
?>


<main class="o-max-width o-site-main">
<?php 
  if (isset($_GET['msg'])){
    if ($_GET['msg']=='success'){
    echo '<div class="alert success"><p> Post created successfully </p></div>';
  }
  }
?>


<?php
  require ('connection.php');

  $post_id = $_GET['id'];

  $post_comment_count = 0;
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM posts WHERE id = ".$post_id ;
  $posts = $conn->query($sql);

  while($post = $posts->fetch_assoc()) {

    $updatedView = (int)$post["views"]+1;
  

    $anothersql = "UPDATE posts SET views = '".$updatedView. "' WHERE id = '".$post_id."'";
    if ($conn->query($anothersql) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $post["post_date"] = date("jS F, Y", strtotime($post["post_date"]));
    $post["post_time"] = date("H:i", strtotime($post["post_date"])); 
    echo '<article class="o-box c-card c-post">';
      echo '<h2 class="c-post__title">'. $post["post_title"].'</h2>';
      echo '<p>'.$post["post_text"].'</p>';
      echo '<div class="icons"> <div onclick="like('.$post["id"].', `like`)" id="likeID_'.$post["id"].'"> <i class="fa fa-thumbs-up "  ></i> <span id="likeCountID_'.$post["id"].'">'. $post["likes"].'</span></div> <div onclick="like('.$post["id"].', `dislike`)" id="dislikeID_'.$post["id"].'"> <i class="fa fa-thumbs-down" ></i> <span id="dislikeCountID_'.$post["id"].'">'. $post["dislikes"].'</span></div> <a href="post.php?id='.$post["id"].'"> <i class="fa fa-eye"></i> '. $post["views"].'</a> <a href="post.php?id='.$post["id"].'"> <i class="fa fa-comment"></i> '. $post["comments_number"].'</a> </div>';
      echo '<h6 class="c-post__meta">'. $post["post_date"].' &bull; <a class="c-post__link" href="#"> <i class="fa fa-clock"></i> '. $post["post_time"].'</a></h6>';
    echo '</article>';

    


    $post_comment_count = $post["comments_number"];

    
  }

  
  
?>




<div class="comments-container">
		<h1>Comments </h1>
    <form action="sumbitComment.php" method="POST" style='display: flex; flex-direction: column;'>
        <label> Leave a comment </label>
        <input type="hidden" name="post_id" value="<?php echo $post_id ?>"/>
        <input type="hidden" name="post_comment_count" value="<?php echo $post_comment_count ?>"/>
        <textarea style="height: 74px; margin:10px" name="post_comment" class="form-control"></textarea>
        <div>
          <button class="btn btn-black" style="margin:10px; width: 100px; outline:none">Submit</button>
        </div>
        
    </form>
		<ul id="comments-list" class="comments-list">
			<!-- <li>
				<div class="comment-main-level">
					
					<div class="comment-box">
						<div class="comment-head">
							
							<span>hace 20 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
						</div>
					</div>
				</div>
				<ul class="comments-list reply-list">
					<li>
						
						<div class="comment-box">
							<div class="comment-head">
								
								<span>hace 10 minutos</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</li>

					<li>
						
						<div class="comment-box">
							<div class="comment-head">
								
								<span>hace 10 minutos</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</li>
				</ul> 
      </li>-->
      

      <?php 
      $sql = "SELECT * FROM comments WHERE post_id = ".$post_id." ORDER BY id DESC " ;
      $comments = $conn->query($sql);

      while($comment = $comments->fetch_assoc()) {

        $comment["date"] = date("jS F, Y", strtotime($comment["date"]));

        $time = new DateTime($comment["date"]);
        $comment["comment_time"] = $time->format('H:i:s');

      ?>


      <li>
				<div class="comment-main-level">
					<!-- Avatar -->
					
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							
              <span><?php echo $comment["comment_time"]. ", " .$comment['date'] ?></span>
              <i class="fa fa-reply" > <?php echo $comment['replies'] ?></i>
							<i class="fa fa-heart" onclick="likeComment(<?php echo $comment['id'] ?>,'main')" id="likeMainCommentID_<?php echo $comment['id'] ?>"> <?php echo $comment['likes'] ?></i>
						</div>
						<div class="comment-content">
              <?php echo $comment['comment'] ?>
						</div>
					</div>
				</div>
			</li>

        
      <?php
      }
      $conn->close();
      ?>
        

			
		</ul>
	</div>

</main>
<?php
  require ('parts/footer.php');
?>