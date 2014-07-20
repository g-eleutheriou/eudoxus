<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="#" class="active">Επικοινωνία</a>
		</div>
	</div>
	<form action="" method="post" class="contact-form">
		<h1>Φόρμα Επικοινωνίας</h1>
		<label> <span>Όνομα :</span>
			<input id="name" type="text" name="name" placeholder="Όνομα" />
		</label>

		<label> <span>Email :</span>
			<input id="email" type="email" name="email" placeholder="Valid Email Address" />
		</label>

		<label> <span>Μήνυμα :</span> 			<textarea id="message" name="message" placeholder="Your Message to Us"></textarea> </label>
		<label> <span>Θέμα :</span>
			<select name="selection">
				<option value="Job Inquiry">Πρόβλημα</option>
				<option value="General Question">Γενικά</option>
			</select> </label>
		<label> <span>&nbsp;</span>
			<input type="button" class="button" value="Υποβόλη" />
		</label>
	</form>
</div>

