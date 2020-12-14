<?php
    
?>



<?php
  require ('parts/header.php');
?>


<main class="o-max-width o-site-main aboutMain">
<div class="services section" id="services" style="padding-top:10px">
    <?php 
      if (isset($_GET['msg'])){
        if ($_GET['msg']=='success'){
          echo '<div class="alert success"><p> Your email was sent successfully !!! </p></div>';
        }
      }
    ?>
			

			<div class="item">
				<figure>
					<img src="img/an.webp" alt="">
				</figure>
				<div class="description">
					<h3><span>Anonymail</span> Send anonymous emails</h3>
					<p>Anonymous emails are the best way to maintain privacy while communicating to others online. The basic purpose of an anonymous email is to keep the recipient unaware of the sender’s identifiable information e.g. name, address and location.  </p>
				</div>
      </div>
      <p>In the form below you can write an email for a receiver anonymously. Note: you can just send the message, and the receiver will get the message from our email: <b style="color:black">info.anonymnotes@gmail.com.</bold></p>

			
		</div>
    <form id="emailForm" onsubmit="return validateEmailForm()" action="submitEmail.php" method="POST" style="display: flex; flex-direction: column;">
        <label> Reciever's email </label>
        <input  type="text" id="receiver_email" name="receiver_email" class="form-control" style="padding-top: 0px;margin-left: 10px;margin-top: 5px; width: 300px" placeholder="Write the receiver's email to send to">
        <div id="errEmail" class="error"></div>
          
        <br/>
        <label> Text for receiver </label>
        <textarea id="text_for_receiver" style="height: 104px; margin:10px" placeholder="Please, write whatever you want let receiver know" class="form-control" name="text_for_receiver"></textarea>
        <div id="errText" class="error"></div>
        <div>
          <button class="btn btn-black" style="margin:10px; width: 100px; outline:none">Send</button>
        </div>
    </form>

    
</main>

<?php
  require ('parts/footer.php');
?>