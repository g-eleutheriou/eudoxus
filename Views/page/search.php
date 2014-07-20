<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Search</a>
		</div>
	</div>
	<section id="search-logo"></section>
	<section id="search-form">
		<form onsubmit="return check()" method="post" action="<?php echo SEARCH; ?>/search" class="form-wrapper cf">
			<input name="name" type="text" placeholder="Search here..." required>
			<button type="submit">
				Search
			</button>
		</form>
	</section><!-- content -->
	<section id="search-btn">
		<a href="<?php echo PAGES; ?>/aSearch">Advanced Search</a>
		<a href="<?php echo PAGES; ?>/register" >Help</a>
	</section>
</div>