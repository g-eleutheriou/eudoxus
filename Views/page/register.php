<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Register</a>
		</div>
	</div>
	<form  id="registerContainer" method="post" action="<?php echo USERS; ?>/create">
		<div  id="form1" class="registerform">
			<div id="contactform">
				<p class="contact">
					<label for="name">Name</label>
				</p>
				<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text">

				<p class="contact">
					<label for="username">Create a username</label>
				</p>
				<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text">

				<p class="contact">
					<label for="password">Create a password</label>
				</p>
				<input type="password" id="password" name="password" required="">

				<p class="contact">
					<label for="email">Email</label>
				</p>
				<input id="email" name="email" placeholder="example@domain.com" required="" type="email">

				<select class="select-style gender" name="type">
					<option value="select">i am..</option>
					<option value="student">Student</option>
					<option value="secretary">Secretary</option>
					<option value="publisher">Publisher</option>
				</select>

			</div>
		</div>
		<div  id="form2" class="registerform">
			<div id="contactform">
				<p class="contact">
					<label for="name">SurName</label>
				</p>
				<input id="name" name="surname" placeholder="First and last name" required="" tabindex="1" type="text">
				<p class="contact">
					<label for="phone">Mobile phone</label>
				</p>
				<input id="phone" name="phone" placeholder="phone number" required="" type="text">
				<p class="contact">
					<label for="repassword">Confirm your password</label>
				</p>
				<input type="repassword" id="repassword" name="repassword" required="">
				<br>
			</div>
		</div>
		<div id="register-bot">

			<input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit">
			<a href="<?php echo PAGES; ?>/login">Already User?</a>

		</div>
	</form>
</div>
