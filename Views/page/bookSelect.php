<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="<?php echo PAGES; ?>/user">Προφίλ</a>
			<a href="#" class="active">Προσθήκη Μαθήματος</a>
		</div>
	</div>
	<div id="historyWrapper">
		<h4>Προσθήκη Μαθήματος</h4>
		<div id="historyContainer">
			<h4 id="bookSelectH4">1. Επιλέξτε Μάθημα</h4>
			<select class="select-style">
				<option value="">Μάθημα</option>
				<option  value="01">ΠΡΑΓΜΑΤΟΛΟΓΙΑ</option>
			</select>
			<h4>2. Επιλέξτε ΒιΒλίο</h4>
			<select class="select-style">
				<option value="">ΒιΒλίο</option>
				<option  value="01">Εισαγωγή στην πραγματολογία</option>
			</select>
			<h4>3. Επιλέξτε Εκδότη</h4>
			<select class="select-style">
				<option value="">Εκδότης</option>
				<option  value="01">ΕΚΔΟΣΕΙΣ ΘΕΜΕΛΙΟ ΕΠΕ</option>
			</select>
		</div>
		<div>
			<form id="Addbtn" onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/historyForm2">
				<input type="submit" value="Ακύρωση" />
			</form>
			<form id="continuebtn" onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/historyForm2">
				<input type="submit" value="Προσθήκη" />
			</form>
		</div>
	</div>
</div>