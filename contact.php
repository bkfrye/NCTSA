
<?php
/*
Template Name: Contact
*/
 get_header();?>


 	<section class="contact-page">
		<div class="row">
			<div class="small-12 large-12 columns" role="main">

				<h2>Contact Us</h2>
				<form id="contact-form" novalidate="novalidate">
				    <input id="fname" type="text" name="fname" placeholder="YOUR NAME" value="">
				    <input id="email" type="text" name="email" placeholder="EMAIL ADDRESS" value="">		
				    <input id="subject" type="text" name="subject" placeholder="SUBJECT" value="">
				    <textarea rows="10" cols="40" id="message" name="message" placeholder="MESSAGE"></textarea>
				

				    <input type="submit" id="send" class="button" value="Send">
				    <div id="contact_ajax_response"></div>
				</form>

			</div>
		</div>
	</section>


	