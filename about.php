

<?php
  require ('header.php');
?>

<main class="o-max-width o-site-main">

  


		<!-- Hero Section - large banner or slideshow -->
		<ul class="hero">
			<!-- Add a class to the hero-slide for different colors, style-1 through style-5 -->
			<!-- Or write your own class to style the slide with a background image or different color -->
			<!-- With only one hero-slide, this section is a big banner -->
			<!-- Add more than one hero-slide to create an animated slider -->
			<!-- TODO: ADD SLIDER CODE -->
			<li class="hero-slide style-5">
				<h2>website building</h2>
				<p>get the<br/>zip of the files</p>
				<div class="cta"><a href="project.zip" download class="button dark">download</a></div>
			</li>
		</ul>


		<!-- Services section - alternating left/right sections with photos -->
		<!-- Images for this section should be 750px wide - any height -->
		<div class="services section" id="services">
			<h2 class="section-title">services</h2>
			<div class="item">
				<figure>
					<img src="images/service1.jpg">
				</figure>
				<div class="description">
					<!-- The portion of the header wrapped in a span will appear on its own line in a lightweight font - the rest of the header will be bold -->
					<h3><span>creative</span> kitchen</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					<p><a href="#" class="button pale">learn more</a></p>
				</div>
			</div>

			<div class="item">
				<figure>
					<img src="images/service2.jpg">
				</figure>
				<div class="description">
					<h3><span>art</span> installation</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					<p><a href="#" class="button pale">learn more</a></p>
				</div>
			</div>

			<div class="item">
				<figure>
					<img src="images/service3.jpg" alt="">
				</figure>
				<div class="description">
					<h3><span>print</span> design</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					<p><a href="#" class="button pale">learn more</a></p>
				</div>
			</div>
		</div>


		<!-- Works section - a masonry-style layout of images with more information on hover -->
		<!-- Images for this section should be 580px wide - any height -->
		<div class="work section" id="work">
			<h2 class="section-title">work</h2>
			<ul class="works">
				<!-- To link the work to another page, just wrap all the li content in a link -->
				<li>
					<a href="#">
						<img src="images/work1.jpg" alt="">
						<div class="description">
							<h3>awesome project</h3>
							<p>print design</p>
						</div>
					</a>
				</li>
				<li>
					<img src="images/work2.jpg" alt="">
					<div class="description">
						<h3>market signage</h3>
						<p>art installation</p>
					</div>
				</li>
				<li>
					<img src="images/work4.jpg" alt="">
					<div class="description">
						<h3>recipe app</h3>
						<p>mobile ux</p>
					</div>
				</li>
				<li>
					<img src="images/work3.jpg" alt="">
					<div class="description">
						<h3>landscapes</h3>
						<p>photography</p>
					</div>
				</li>
				<li>
					<img src="images/work5.jpg" alt="">
					<div class="description">
						<h3>catalog</h3>
						<p>print design</p>
					</div>
				</li>
				<li>
					<img src="images/work6.jpg" alt="">
					<div class="description">
						<h3>book layout</h3>
						<p>print design</p>
					</div>
				</li>
			</ul>
			<p class="cta"><a href="#" class="button dark">learn more</a></p>
		</div>


		<!-- Team section - for highlighting profiles of your team members -->
		<!-- With three or fewer bios, this is a static section. Add more to create a carousel -->
		<!-- Images for this section should be 168px square -->
		<div class="team section">
			<h2 class="section-title">team</h2>
			<div class="team-carousel">
				<ul class="team-members">
					<!-- To link to another page with more info, just wrap all the li content in a link -->
					<li>
						<a href="#">
							<img src="images/team1.jpg" alt="">
							<h3>Marian Rhodes</h3>
							<p>art director</p>
						</a>
					</li>
					<li>
						<img src="images/team2.jpg" alt="">
						<h3>Genesis Hanson</h3>
						<p>founder</p>
					</li>
					<li>
						<img src="images/team3.jpg" alt="">
						<h3>Diane Lewis</h3>
						<p>artist, designer</p>
					</li>
				</ul>
			</div>
		</div>


		<!-- Testimonials section - for display testimonials from clients along with some info about the project -->
		<!-- With only one testimonial, this section is a simple display -->
		<!-- Add more testimonials to create a slider/carousel of testimonials -->
		<div class="testimonials section">
			<h2 class="section-title">testimonials</h2>
			<ul class="testimonial-list">
				<li class="testimonial">
					<div class="testimonial-details">
						<div class="client-info">
							<h3>Frank Sims</h3>
							<p>photographer</p>
						</div>
						<div class="quote">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						</div>
					</div>
					<!-- Images for the portfolio should be about 300px wide - any height -->
					<ul class="portfolio">
						<li><img src="images/client1.jpg" alt=""></li>
						<li><img src="images/client2.jpg" alt=""></li>
						<li><img src="images/client3.jjpg.jpeg" alt=""></li>
						<li><img src="images/client4.jpg" alt=""></li>
					</ul>
				</li>
			</ul>
		</div>


		<!-- Page content section - basic page content layout -->
		<div class="page section" id="about">
			<h1 class="page-title">about us</h1>
			<div class="page-content">
				<!-- Graphic -->
				<div class="graphic">
					<!-- The graphic for this column should be 750px wide -->
					<figure>
						<img src="images/page1.jpg" alt="">
						<figcaption>
							we create the best projects for the best companies!
						</figcaption>
					</figure>
				</div>
				<!-- Text content -->
				<div class="text text-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nihil laboriosam nostrum sunt porro necessitatibus accusantium provident culpa, officia, distinctio consequatur ab pariatur consequuntur facilis rem soluta earum architecto doloremque.</p>
					<p>Commodi dolorem accusantium ullam eveniet repellat. Beatae id eligendi officiis libero, dolorum minima sint veniam veritatis accusantium, vel, eos dignissimos fuga in non dolores. Saepe doloribus dolorem in asperiores est.</p>
					<p>Nostrum fugit natus enim, cupiditate, magnam sapiente error quas possimus vel dolor illo omnis numquam nihil, fuga facere mollitia aliquam nisi? Possimus magni, nesciunt natus error expedita fuga officia maiores.</p>
					<div class="cta">
						<a href="" class="button pale">get in touch</a>
					</div>
				</div>
			</div>
		</div>


		<!-- Stats section - present a collection of fun stats -->
		<div class="stats section">
			<ul class="stats-listing">
				<li><span class="count">45</span> successful projects</li>
				<li><span class="count">36</span> happy clients</li>
				<li><span class="count">852</span> cups of coffee</li>
			</ul>
		</div>


		<!-- Instagram Feed - display the most recent 5 images from your Instagram feed-->
		<!-- For help getting this set up, please go to connectgram.purplepen.com -->
		<div class="insta section">
			<h2 class="section-title">instagram</h2>
			<div id="instafeed"></div>
			<div class="insta-follow">
				<a href="http://instagram.com/username" class="button pale">Follow</a>
			</div>
		</div>


		<!-- Callout - bring attention to a special offer -->
		<div class="callout section">
			<div class="offer">
				best price
				<span class="price">$999</span>
			</div>
			<a href="#" class="button light">get started</a>
		</div>


		<!-- Project - highlight an individual work/project -->
		<!-- Images for the slideshow should be 952 x 618 -->
		<div class="project section">
			<h2 class="section-title">cupcake project</h2>
			<div class="project-wrap">
				<ul class="project-slideshow">
					<li>
						<img src="images/project1.jpg" alt="">
					</li>
					<li>
						<img src="images/project2.jpg" alt="">
					</li>
					<li>
						<img src="images/project3.jpg" alt="">
					</li>
					<li>
						<img src="images/project4.jpg" alt="">
					</li>
				</ul>
			</div>
			<div class="project-info">
				<div class="project-highlight">
					<blockquote>
						<p>we create the best projects for the best companies!</p>
					</blockquote>
				</div>
				<div class="project-details">
					<div class="text-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, deserunt, a. Asperiores omnis exercitationem, reiciendis quis illum quod, dolor repellat! Quas possimus rem iusto laborum totam officiis earum ad ex.</p>
						<p>Incidunt sequi similique assumenda in cumque! Pariatur, voluptatibus maiores dignissimos, dolorum odit molestias dolores! Quas perspiciatis, iure, doloribus, at facilis eos impedit earum et non dignissimos dolores maiores explicabo ipsa.</p>
						<p>Maxime odit laudantium impedit voluptate maiores reprehenderit sed necessitatibus, id, voluptatem a. Assumenda minima ipsa rem repellat veritatis impedit corrupti quod qui quisquam necessitatibus, placeat delectus quasi perspiciatis consequuntur atque.</p>
					</div>
					<ul class="social-media">
						<li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-github-alt fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-snapchat-ghost fa-lg" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>


		<!-- Related items section -->
		<!-- If you want to link to something else, just wrap the items in a link -->
		<div class="section related">
			<h2 class="section-title">related</h2>
			<ul class="related-items">
				<li>
					<a href="#">
						<h3>letters art project</h3>
						<p>print design</p>
					</a>
				</li>
				<li>
					<h3>golfino awards 2015</h3>
					<p>print design</p>
				</li>
				<li>
					<h3>the foodee</h3>
					<p>creative kitchen</p>
				</li>
			</ul>
		</div>


		<!-- Full width content -->
		<!-- A featured image should be 952 x 618 -->
		<div class="section full-width">
			<h2 class="section-title">a big chunk of content</h2>
			<h3 class="section-subtitle">a section subtitle</h3>
			<div class="featured-image">
				<img src="images/content1.png" alt="">
			</div>
			<div class="text-content full-width-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi sunt, eum libero placeat cum consequatur harum doloremque quo accusamus, quibusdam commodi repudiandae totam, possimus illo, quos esse maxime rerum! Qui!</p>
				<p>Accusamus ducimus deserunt culpa asperiores saepe, aspernatur tempora quas fuga veritatis voluptatum quaerat modi eius totam. Libero asperiores quia, consectetur ut maxime mollitia, hic saepe laboriosam, illo quos autem, illum.</p>
				<p>Inventore dolore harum ullam provident tempora nobis non molestias iste maxime atque id, ratione vel eum omnis officia minima, delectus facere numquam cupiditate nostrum natus? Quo culpa laborum repellat cupiditate.</p>
				<h3>subsection title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda et quae dolorum accusantium numquam ipsa enim quasi, fugit sunt, labore ipsam sequi impedit. Modi nemo natus ullam, molestias ea animi.</p>
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi rem commodi voluptates a optio nobis asperiores! Est, saepe quam asperiores quibusdam et, distinctio delectus ratione quas voluptates, facilis debitis repellendus.</li>
					<li>Pariatur, molestiae expedita quasi unde! Esse libero, fugiat ratione officia ex labore necessitatibus ipsam saepe eligendi nihil, aspernatur, laudantium nemo ullam delectus. Rerum est ab, dolorum nemo eveniet, neque impedit!</li>
				</ul>
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</blockquote>
				<h3>another subsection</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos officiis aut, voluptates odit, molestiae, quos ducimus rem recusandae aliquam, eum a. Nesciunt voluptatibus, nostrum nemo nisi, laboriosam ad suscipit obcaecati.</p>
				<p>Consequuntur quo, incidunt molestiae perferendis ullam, culpa vel atque, quaerat qui veniam vero necessitatibus tempore, enim dolorem voluptas saepe aliquam nulla. Eligendi, soluta, laborum. Necessitatibus sunt alias natus inventore nihil.</p>
				<p>Pariatur ab, laudantium facere illum nam sequi. Doloremque optio excepturi fugit, cum commodi quidem fugiat labore qui. Beatae est, suscipit. Quaerat officia praesentium obcaecati, mollitia est et reiciendis esse quo.</p>
			</div>
		</div>


	<!-- Contact section - for containing contact details and contact form -->
		<div class="contact" id="contact">
			<h2 class="section-title">contact</h2>

			<div class="contact-info">
				<!-- Contact details -->
				<div class="contact-details">
					<!-- Street or mailing address -->
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> 23 Mulholland Drive, Suite 721. Los Angeles 10010 <br/>100 S. Main Street. Los Angeles 90012</p>
					<!-- Phone number -->
					<p><i class="fa fa-mobile" aria-hidden="true"></i> +1-670-567-5590</p>
					<!-- Email address -->
					<p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:hello@test.com">hello@test.com</a></p>
					<!-- Social media links -->
					<!-- Get the markup for new social media networks here: http://fontawesome.io/icons/#brand -->
					<ul class="social-media">
						<li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-github-alt fa-lg" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-snapchat-ghost fa-lg" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<!-- Contact form -->
				<div class="contact-form">
					<!-- Get more details on setting up a working contact form here: https://formspree.io/ -->
					<form id="contact" method="POST" action="https://formspree.io/hello@test.com">
						<p>
							<input type="text" name="name" id="name" placeholder="name" required>
						</p>
						<p>
							<input type="email" name="email" id="email" placeholder="e-mail" required>
						</p>
						<p>
							<textarea name="message" id="message" cols="30" rows="10" placeholder="your message" required></textarea>
						</p>
						<p>
							<input type="hidden" name="_subject" value="Contact Form Submission" />
							<input type="submit" value="submit" class="button dark">
						</p>
					</form>
				</div>
			</div>


</main>

<?php
  require ('footer.php');
?>