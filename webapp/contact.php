<?php 
	print '
	<h1>Contact Form</h1>
	<div id="contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.333769867062!2d-2.244156784182342!3d50.69519047758055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4872552b9490d04d%3A0x3b0785b71b79cf5b!2sThe%20Tank%20Museum!5e0!3m2!1sen!2shr!4v1577728057972!5m2!1sen!2shr" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="http://work2.eburza.hr/pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="HU">Hungary</option>
			</select>

			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
	</div>';
?>