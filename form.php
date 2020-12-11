<?php
    
?>



<?php
  require ('header.php');
?>


<main class="o-max-width o-site-main">
    <form action="submit.php" method="POST" action="sumbitComment.php" method="POST" style="display: flex; flex-direction: column;">
        <label> Title </label>
        <input required type="text" name="post_title" class="form-control" style="padding-top: 0px;margin-left: 10px;margin-top: 5px;" placeholder="Write title of the post">
        <br/>
        <label> Text </label>
        <textarea style="height: 104px; margin:10px" class="form-control" name="post_text"></textarea>
        <div>
          <button class="btn btn-black" style="margin:10px; width: 100px; outline:none">Submit</button>
        </div>
    </form>

    
</main>

<?php
  require ('footer.php');
?>