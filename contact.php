

<?php
  require ('parts/header.php');
?>

<main class="aboutMain">

		
    
	<!-- Contact section - for containing contact details and contact form -->
		<div class="contact" id="contact">
			<h2 class="section-title">Contacts</h2>

			<img src="img/GIF.gif" alt="Contacts" style=" border-radius: 25px; ">

			<div class="contact-info">
				<!-- Contact details -->
				<div class="contact-details">
					<!-- Street or mailing address -->
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> University of Central Asia, Lenin street 310<br/>Naryn, Kyrgyzstan</p>
					<!-- Phone number -->
					<p><i class="fa fa-mobile" aria-hidden="true"></i> (+996) 700 063 116</p>
					<!-- <p><i class="fa fa-mobile" aria-hidden="true"></i> (+996) 777 194 193</p> -->
					<!-- Email address -->
					<p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:hello@test.com">romiz.abdullaev_2023@ucentralasia.org</a></p>
					<!-- Social media links -->
					
				</div>
				<!-- Contact form -->
				<div class="contact-form">
                    <h1>You can e-mail us here</h1>
					<form id="contact" method="POST" action="submitContact.php">
						
						<p>
							<input type="email" name="email" id="email" placeholder="Your e-mail" required>
						</p>
						<p>
							<textarea name="message" id="message" cols="30" rows="10" placeholder=" Your text should be here..." required></textarea>
						</p>
						<p>
							<input type="hidden" name="_subject" value="Contact Form Submission" />
							<input type="submit" value="submit" class="button dark">
						</p>
					</form>
				</div>
			</div>



	<!-- End of the main content area -->
	</main>


<?php
  require ('parts/footer.php');
?>