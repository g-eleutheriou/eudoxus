<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="<?php echo PAGES; ?>/search">Search</a>
			<a href="#" class="active">Advanced Search</a>
		</div>
	</div>
	<section id="aSearch-logo"></section>
	<section id="aSearch-form">
		<div id="left-form">
			<form >
				<p class="contact">
					<label for="name">Name</label>
				</p>
				<input id="name" name="name" placeholder="First and last name" required type="text">

				<p class="contact">
					<label for="email">Email</label>
				</p>
				<input id="phone" name="phone" placeholder="phone number" required="" type="text">
				<br>
			</form>
		</div>
		<div id="right-form">
			<form >
				<p class="contact">
					<label for="name">Name</label>
				</p>
				<input id="name" name="name" placeholder="First and last name" required type="text">

				<p class="contact">
					<label for="email">Email</label>
				</p>
				<input id="phone" name="phone" placeholder="phone number" required="" type="text">
				<br>
			</form>
		</div>
		<div id="aSearch-bot">
		<input class="buttom" name="submit" id="searchSubmit" tabindex="5" value="Sign me up!" type="submit">
	</div>
	</section><!-- content -->
	<section id="aSearch-btn">
		<a href="<?php echo PAGES; ?>/search">Simple Search</a>
		<a href="<?php echo PAGES; ?>/register" >Help</a>
	</section>
</div>