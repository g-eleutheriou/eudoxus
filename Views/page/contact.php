<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Contact</a>
		</div>
	</div>
	<form action="" method="post" class="contact-form">
		<h1>Contact Form <span>Please fill all the texts in the fields.</span></h1>
		<label> <span>Your Name :</span>
			<input id="name" type="text" name="name" placeholder="Your Full Name" />
		</label>

		<label> <span>Your Email :</span>
			<input id="email" type="email" name="email" placeholder="Valid Email Address" />
		</label>

		<label> <span>Message :</span> 			<textarea id="message" name="message" placeholder="Your Message to Us"></textarea> </label>
		<label> <span>Subject :</span>
			<select name="selection">
				<option value="Job Inquiry">Job Inquiry</option>
				<option value="General Question">General Question</option>
			</select> </label>
		<label> <span>&nbsp;</span>
			<input type="button" class="button" value="Send" />
		</label>
	</form>
</div>

