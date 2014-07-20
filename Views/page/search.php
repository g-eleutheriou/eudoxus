<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχική</a>
			<a href="#" class="active">Αναζήτηση</a>
		</div>
	</div>
	<section id="search-logo"></section>
	<section id="search-form">
		<form onsubmit="return check()" method="post" action="<?php echo SEARCH; ?>/search" class="form-wrapper cf">
			<input name="name" type="text" placeholder="Τίτλος..." required>
			<button type="submit">
				Αναζήτηση
			</button>
		</form>
	</section><!-- content -->
	<section id="search-btn">
		<a href="<?php echo PAGES; ?>/aSearch">Συνθετή Αναζήτηση</a>
		<a href="<?php echo PAGES; ?>/register" >Βοήθεια</a>
	</section>
</div>