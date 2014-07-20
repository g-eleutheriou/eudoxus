<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="#" class="active">Εγγράφη</a>
		</div>
	</div>
	<form  id="registerContainer" method="post" action="<?php echo USERS; ?>/create">
		<div  id="form1" class="registerform">
			<div id="contactform">
				<p class="contact">
					<label for="name">Όνομα</label>
				</p>
				<input id="name" name="name" placeholder="Όνομα" required tabindex="1" type="text">

				<p class="contact">
					<label for="username">Username</label>
				</p>
				<input id="username" name="username" placeholder="Username" required tabindex="2" type="text">

				<p class="contact">
					<label for="password">Password</label>
				</p>
				<input type="password" id="password" name="password" required>

				<p class="contact">
					<label for="email">Email</label>
				</p>
				<input id="email" name="email" placeholder="example@domain.com" required type="email">

				<select class="select-style gender" name="type">
					<option value="select">Τύπος</option>
					<option value="student">Φοιτήτης</option>
					<option value="secretary">Γραμματέας</option>
					<option value="publisher">Εκδότης</option>
				</select>

			</div>
		</div>
		<div  id="form2" class="registerform">
			<div id="contactform">
				<p class="contact">
					<label for="name">Επώνυμο</label>
				</p>
				<input id="name" name="surname" placeholder="Επώνυμο" required tabindex="1" type="text">
				<p class="contact">
					<label for="phone">Τηλέφωνο</label>
				</p>
				<input id="phone" name="phone" placeholder="phone number" required type="text">
				<p class="contact">
					<label for="repassword">Επιβεβαίωση password</label>
				</p>
				<input type="repassword" id="repassword" name="repassword" required>
				<br>
			</div>
		</div>
		<div id="register-bot">

			<input class="buttom" name="submit" id="submit" tabindex="5" value="Εγγραφή" type="submit">
			<a href="<?php echo PAGES; ?>/login">Ήδη Χρήστης?</a>

		</div>
	</form>
</div>
