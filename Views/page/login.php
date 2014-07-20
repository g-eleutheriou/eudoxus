<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="#" class="active">Είσοδος</a>
		</div>
	</div>
	<section id="login-form">
			<h1>Φόρμα Σύνδεσης Χρήστη</h1>
			<form  method="post" action="<?php echo USERS; ?>/login">
				<input name="username" type="text" placeholder="Όνομα Χρήστη" required id="username" />
				<input name="password" type="password" placeholder="Κωδικός" required id="password" />
				<input type="submit" value="Log in" />
				<a href="#">Ξεχάσατε τον κωδικό σας?</a>
				<a href="<?php echo PAGES; ?>/register" >Εγγραφή</a>
			</form>

		</form><!-- form -->
	</section><!-- content -->
</div>

<script>
