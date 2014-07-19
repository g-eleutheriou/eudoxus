<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="<?php echo PAGES; ?>/user">Profile</a>
			<a href="#" class="active">Edit</a>
		</div>
	</div>
	<form action="" method="post" class="contact-form">
		<h1>Edit Form <span>Please fill all the texts in the fields.</span></h1>
		<label> <span>Your Phone :</span>
			<input id="name" type="number" name="name" placeholder="Your Phone Number" />
		</label>

		<label> <span>Your Email :</span>
			<input id="email" type="email" name="email" placeholder="Valid Email Address" />
		</label>
		<label> <span>&nbsp;</span>
			<input type="button" class="button" value="Save" />
		</label>
	</form>
</div>

