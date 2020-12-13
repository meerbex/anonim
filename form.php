<?php
    
?>



<?php
  require ('parts/header.php');
?>


<main class="o-max-width o-site-main">
    <form  id="postForm" action="submit.php" onsubmit="return validatePostForm()" method="POST" style="display: flex; flex-direction: column;">
        <label> Title </label>
        <input type="text" name="post_title" id="post_title" class="form-control" style="padding-top: 0px;margin-left: 10px;margin-top: 5px;" placeholder="Write title of the post">
        <div id="errorTitle" class="error"></div>

        <br/>
        <label> Text </label>
        <textarea style="height: 104px; margin:10px" id="post_text" class="form-control" name="post_text" placeholder="Share your great thoughts"></textarea>
        <div id="errText" class="error"></div>

        <div>
          <button class="btn btn-black" style="margin:10px; width: 100px; outline:none">Submit</button>
        </div>
    </form>

    
</main>

<?php
  require ('parts/footer.php');
?>