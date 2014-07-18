<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Register</a>
		</div>
	</div>
	<div  id="form1" class="registerform">
		<form id="contactform">
			<p class="contact">
				<label for="name">Name</label>
			</p>
			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text">

			<p class="contact">
				<label for="email">Email</label>
			</p>
			<input id="email" name="email" placeholder="example@domain.com" required="" type="email">

			<p class="contact">
				<label for="username">Create a username</label>
			</p>
			<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text">

			<p class="contact">
				<label for="password">Create a password</label>
			</p>
			<input type="password" id="password" name="password" required="">
			<p class="contact">
				<label for="repassword">Confirm your password</label>
			</p>
			<input type="password" id="repassword" name="repassword" required="">

			<fieldset>
				<label>Birthday</label>
				<label class="month">
					<select class="select-style" name="BirthMonth">
						<option value="">Month</option>
						<option  value="01">January</option>
						<option value="02">February</option>
						<option value="03" >March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12" >December</option>
				</label>
				</select>
				<label>Day
					<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required="">
				</label>
				<label>Year
					<input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required="">
				</label>
			</fieldset>

			<select class="select-style gender" name="gender">
				<option value="select">i am..</option>
				<option value="m">Male</option>
				<option value="f">Female</option>
				<option value="others">Other</option>
			</select>
			<br>
			<br>

			<p class="contact">
				<label for="phone">Mobile phone</label>
			</p>
			<input id="phone" name="phone" placeholder="phone number" required="" type="text">
			<br>
		</form>
	</div>
	<div  id="form2" class="registerform">
		<form id="contactform">
			<p class="contact">
				<label for="name">Name</label>
			</p>
			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text">

			<p class="contact">
				<label for="email">Email</label>
			</p>
			<input id="email" name="email" placeholder="example@domain.com" required="" type="email">

			<p class="contact">
				<label for="username">Create a username</label>
			</p>
			<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text">

			<p class="contact">
				<label for="password">Create a password</label>
			</p>
			<input type="password" id="password" name="password" required="">
			<p class="contact">
				<label for="repassword">Confirm your password</label>
			</p>
			<input type="password" id="repassword" name="repassword" required="">

			<fieldset>
				<label>Birthday</label>
				<label class="month">
					<select class="select-style" name="BirthMonth">
						<option value="">Month</option>
						<option  value="01">January</option>
						<option value="02">February</option>
						<option value="03" >March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12" >December</option>
				</label>
				</select>
				<label>Day
					<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required="">
				</label>
				<label>Year
					<input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required="">
				</label>
			</fieldset>

			<select class="select-style gender" name="gender">
				<option value="select">i am..</option>
				<option value="m">Male</option>
				<option value="f">Female</option>
				<option value="others">Other</option>
			</select>
			<br>
			<br>

			<p class="contact">
				<label for="phone">Mobile phone</label>
			</p>
			<input id="phone" name="phone" placeholder="phone number" required="" type="text">
			<br>
		</form>
	</div>
	<div id="register-bot">
		<input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit">
		<a href="<?php echo PAGES; ?>/login">Already User?</a>
	</div>
</div>
