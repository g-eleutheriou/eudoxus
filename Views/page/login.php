<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Login</a>
		</div>
	</div>
	<section id="login-form">
		<form action="">
			<h1>Login Form</h1>
			<select>
				<option>--- Choose Age From Here ---</option>
				<option>Below 18 years</option>
				<option>Between 18-25 years</option>
				<option>Between 25-40 years</option>
				<option>Between 40-60 years</option>
				<option>Above 60 years</option>
			</select>

			<div>
				<input type="text" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="#">Lost your password?</a>
				<a href="<?php echo PAGES; ?>/register" >Register</a>
			</div>
		</form><!-- form -->
	</section><!-- content -->
</div>