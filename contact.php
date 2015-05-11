
<?php
/*
Template Name: Contact
*/
 ?>


 	<section class="contact">
		<div class="row">
			<div class="small-12 large-12 columns" role="main">
				<h2>Contact Us</h2>
				<form id="contact-form" method="post" action="" accept-charset="UTF-8">
				    <input type="hidden" name="action" value="contactForm/sendMessage">
				    <input type="hidden" name="redirect" value="">
					
					<input id="secondName" type="hidden" name="message[name]" value="">

				    <input id="fromName" type="text" name="fromName" placeholder="YOUR NAME" value="">
				    
				    <input id="fromEmail" type="text" name="fromEmail" placeholder="EMAIL ADDRESS" value="">
				    			
				    <input id="subject" type="text" name="subject" placeholder="SUBJECT" value="">
				    
				    <textarea rows="10" cols="40" id="message" name="message[body]" placeholder="MESSAGE"></textarea>


				    <input type="submit" class="button" value="Send">
				</form>

			</div>
		</div>
	</section>

	