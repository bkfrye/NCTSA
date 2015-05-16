
<?php
/*
Template Name: contact-footer
*/
 get_header();?>

<!-- 		<div class="row">
			<div class="small-12 columns" role="main"> -->
				<h2>Contact Us</h2>

				


					<form id="contact-form" method="post" action="" accept-charset="UTF-8">
						<div class="row">

							<div class="small-12 small-centered medium-9 large-3 large-uncentered columns offset">
							    <input id="fromName" type="text" name="fromName" placeholder="YOUR NAME" value="">
							</div>
							<div class="small-12 small-centered medium-9 large-3 large-uncentered columns">   
							    <input id="fromEmail" type="text" name="fromEmail" placeholder="EMAIL ADDRESS" value="">
							</div>
						
							<div class="small-12 small-centered medium-9 large-3 large-uncentered end columns">
						    	<input id="subject" type="text" name="subject" placeholder="SUBJECT" value="">
							</div>
						</div> 

						<div class="row">
							<div class="small-12 medium-9 small-centered columns">
						    	<textarea rows="10" cols="40" id="message" name="message[body]" placeholder="MESSAGE"></textarea>
						    </div>
						</div>
					
					    <input type="submit" class="button" value="Send">
					</form>

<!-- 			</div>
		</div> -->
	</section>
<?php get_footer(); ?>