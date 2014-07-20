<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="<?php echo PAGES; ?>/search">Αναζήτηση</a>
			<a href="#" class="active">Συνθετή Αναζήτηση</a>
		</div>
	</div>
	<section id="aSearch-logo"></section>
	<section id="aSearch-form">
		<div id="left-form">
			<form >
				<p class="contact">
					<label for="name">Τίτλος</label>
				</p>
				<input id="name" name="name" placeholder="Τίτλος" required type="text">

				<p class="contact">
					<label for="email">Εκδότης</label>
				</p>
				<input id="phone" name="phone" placeholder="Εκδότης" required="" type="text">
				<br>
			</form>
		</div>
		<div id="right-form">
			<form >
				<p class="contact">
					<label for="name">Κωδικός</label>
				</p>
				<input id="name" name="name" placeholder="Κωδικός" required type="text">

				<p class="contact">
					<label for="email">Έτος Εκδόσης</label>
				</p>
				<input id="phone" name="phone" placeholder="Έτος" required="" type="text">
				<br>
			</form>
		</div>
		<div id="aSearch-bot">
		<input class="buttom" name="submit" id="searchSubmit" tabindex="5" value="Αναζήτηση" type="submit">
	</div>
	</section><!-- content -->
	<section id="aSearch-btn">
		<a href="<?php echo PAGES; ?>/search">Απλή Αναζήτηση</a>
		<a href="<?php echo PAGES; ?>/register" >Βοήθεια</a>
	</section>
</div>