<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Profile</a>
		</div>
	</div>
	<div id="tabhost">
		<ul id="sidemenu" class="tabmenu">
			<li>
				<a href="#tab1" class="open"><strong>Profile</strong></a>
			</li>

			<li>
				<a href="#tab2"><strong>Book Registrations</strong></a>
			</li>

			<li>
				<a href="#tab3"><strong>Book Exchanges</strong></a>
			</li>
		</ul>

		<div id="content" class="content">
			<div id="tab1" class="contentblock">
				<h2>Profile Info</h2>
			</div>
			<div id="tab2" class="contentblock hidden">
				<h2>Book Registrations</h2>
			</div>
			<div id="tab3" class="contentblock hidden">
				<h2>Book Exchanges</h2>
			</div>
		</div>
	</div>
</div>