
<?php
/*
Template Name: Contact
*/
 get_header();?>


 	<section class="contact-page">
		<div class="row">
			<div class="small-12 large-12 columns" role="main">

				<div id="form-output">
<!-- 						<h2>Thanks for Contacting Us!</h2> -->
					<span class="error" style="display:none"> Please Enter Valid Data</span>
					<span class="success" style="display:none"> Thanks for Submitting</span>
				</div>
				</div>

				<div id="form-input">
					<h2>Contact Us</h2>
					<form id="contact-form" method="post" action="form.php" accept-charset="UTF-8">
					    <input id="name" type="text" name="fromName" placeholder="YOUR NAME" value="">
					    <input id="email" type="text" name="fromEmail" placeholder="EMAIL ADDRESS" value="">		
					    <input id="subject" type="text" name="subject" placeholder="SUBJECT" value="">
					    <textarea rows="10" cols="40" id="message" name="message" placeholder="MESSAGE"></textarea>
					
					    <input type="submit" id="send" class="button" value="Send">

					</form>
				</div>

				

			</div>
		</div>
	</section>
<?php get_footer(); ?>
	