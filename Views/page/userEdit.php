<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="<?php echo PAGES; ?>/user">Προφίλ</a>
			<a href="#" class="active">Επεξεργασία</a>
		</div>
	</div>
	<form action="" method="post" class="contact-form">
		<h1>Φόρμα Επεξεργασίας <span>Συμπληρώστε όλα τα στοιχεία.</span></h1>
		<label> <span>Τηλέφωνο :</span>
			<input id="name" type="number" name="name" placeholder="Τηλέφωνο" />
		</label>

		<label> <span>Email :</span>
			<input id="email" type="email" name="email" placeholder="Email" />
		</label>
		<label> <span>&nbsp;</span>
			<input type="button" class="button" value="Αποθήκευση" />
		</label>
	</form>
</div>

