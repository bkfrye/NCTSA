
<?php
/*
Template Name: contact-footer
*/
 get_header();?>



	<h2>Contact Us</h2>
	<form id="contact-form" novalidate="novalidate">
	    <input id="fname" type="text" name="fname" placeholder="YOUR NAME" value="">
	    <input id="email" type="text" name="email" placeholder="EMAIL ADDRESS" value="">		
	    <input id="subject" type="text" name="subject" placeholder="SUBJECT" value="">
	    <textarea rows="10" cols="40" id="message" name="message" placeholder="MESSAGE"></textarea>
	<img id="contact_ajax" style="float:left; display:none;" src="http://nc-tsa.org/ajax-loader.gif"/>

	    <input type="submit" id="send" class="button" value="Send">
	    
	    <div id="contact_ajax_response"></div>
	</form>

	</section>
<?php get_footer(); ?>