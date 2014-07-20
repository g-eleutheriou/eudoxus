<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Login</a>
		</div>
	</div>
	<section id="login-form">
			<h1>Login Form</h1>
			<form  method="post" action="<?php echo USERS; ?>/login">
				<input name="username" type="text" placeholder="Username" required id="username" />
				<input name="password" type="password" placeholder="Password" required id="password" />
				<input type="submit" value="Log in" />
				<a href="#">Lost your password?</a>
				<a href="<?php echo PAGES; ?>/register" >Register</a>
			</form>

		</form><!-- form -->
	</section><!-- content -->
</div>

<script>
