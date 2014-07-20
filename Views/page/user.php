<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="#" class="active">Προφίλ</a>
		</div>
	</div>
	<div id="tabhost">
		<ul id="sidemenu" class="tabmenu">
			<li>
				<a href="#tab1" class="open"><strong>Προφίλ</strong></a>
			</li>

			<li>
				<a href="#tab2"><strong>Δηλώσεις</strong></a>
			</li>

			<li>
				<a href="#tab3"><strong>Ανταλλαγές</strong></a>
			</li>
		</ul>

		<div id="content" class="content">
			<div id="tab1" class="contentblock">
				<h2>Πληροφορίες Χρήστη</h2>
				<div class="boxtitle">
					<h4>Γενικές Πληροφορίες</h5>
				</div>
				<div class="profilebox">
					<table>
						<tbody>
							<tr>
								<td>Όνομα:</td>
								<td>Γιώργος</td>
							</tr>
							<tr>
								<td>Επίθετο:</td>
								<td>Ελευθερίου</td>
							</tr>
							<tr>
								<td>Τηλέφωνο:</td>
								<td>210 000</td>
							</tr>
							<tr>
								<td>Email:</td>
								<td>sdiXXX@di.uoa.gr</td>
							</tr>
							<tr>
								<td>Τύπος Χρήστη</td>
								<td>Φοίτητης</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="boxtitle">
					<h4>Πληροφορίες Φοιτητή</h5>
				</div>
				<div class="profilebox">
					<table>
						<tbody>
							<tr>
								<td>Σχολή:</td>
								<td>ΕΚΠΑ</td>
							</tr>
							<tr>
								<td>Τμήμα:</td>
								<td>D.I.T</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div>
					<form onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/userEdit">
						<input type="submit" value="Επεξεργασία" />
					</form>
				</div>
			</div>
			<div id="tab2" class="contentblock hidden">
				<h2>Δηλώσεις</h2>
				<div class="boxtitle">
					<h4>Ιστορίκο</h5>
				</div>
				<div class="profilebox">
					<table class="tablesorter" id="tab2Table">
						<thead>
							<tr>
								<th scope="col">Ημερομηνία</th>
								<th scope="col">Εξάμηνο</th>
								<th scope="col">Ενέργεις</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Χημερινο</td>
								<td><a href="<?php echo PAGES; ?>/historyForm1">Επισκόπιση</a></td>
							</tr>

						</tbody>
					</table>
				</div>
				<div>
					<form onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/userEdit">
						<input type="submit" value="Νέα" />
					</form>
				</div>
			</div>
			<div id="tab3" class="contentblock hidden">
				<h2>Ανταλλάγες</h2>
				<div class="tab3InfoContainer">
					<span class="tab3Icon icon-green"></span>
					<span class="tab3Text">Το κατέχω</span>
					<span class="tab3Icon icon-yellow"></span>
					<span class="tab3Text">Το διαθέτω για ανταλλάγη</span>
					<span class="tab3Icon icon-red"></span>
					<span class="tab3Text">Το έχω αλλάξει</span>
				</div>
				<div class="boxtitle">
					<h4>Λίστα Βιβλίων</h5>
				</div>
				<div class="profilebox">
					<table class="tablesorter" id="tab3Table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">ΒιΒλίο</th>
								<th scope="col">Κατάσταση</th>
								<th scope="col">Λειτουργία</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><div class="icon-green">

								</div></td>
								<td>ΠΡΑΓΜΑΤΟΛΟΓΙΑ</td>
								<td>Εχώ παραλάβει</td>
								<td><a href="#">Δήλωση για Ανταλλαγή</a></td>
							</tr>
							<tr>
								<td><div class="icon-yellow">

								</div></td>
								<td>ΠΡΑΓΜΑΤΟΛΟΓΙΑ</td>
								<td>Εχώ παραλάβει</td>
								<td><a href="#">Δήλωση για Ανταλλαγή</a></td>
							</tr>
							<tr>
								<td><div class="icon-red">

								</div></td>
								<td>ΠΡΑΓΜΑΤΟΛΟΓΙΑ</td>
								<td>Εχώ παραλάβει</td>
								<td><a href="#">Δήλωση για Ανταλλαγή</a></td>
							</tr>
							<tr>
								<td><div class="icon-green">

								</div></td>
								<td>ΠΡΑΓΜΑΤΟΛΟΓΙΑ</td>
								<td>Εχώ παραλάβει</td>
								<td><a href="#">Δήλωση για Ανταλλαγή</a></td>
							</tr>
							<tr>
								<td><div class="icon-yellow">

								</div></td>
								<td>ΠΡΑΓΜΑΤΟΛΟΓΙΑ</td>
								<td>Εχώ παραλάβει</td>
								<td><a href="#">Δήλωση για Ανταλλαγή</a></td>
							</tr>
							<tr>
								<td><div class="icon-red">

								</div></td>
								<td>ΠΡΑΓΜΑΤΟΛΟΓΙΑ</td>
								<td>Εχώ παραλάβει</td>
								<td><a href="#">Δήλωση για Ανταλλαγή</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div>
					<form onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/userEdit">
						<input type="submit" value="Προσθήκη" />
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	///       http://code.google.com/p/one-simple-table-paging/ /////////

	$(document).ready(function() {
		// call the tablesorter plugin
		// $(function(){
		$("#tab2Table").oneSimpleTablePagination({
			rowsPerPage : 10,
			topNav : true
		});
		$("#tab3Table").oneSimpleTablePagination({
			rowsPerPage : 5,
			topNav : true
		});
	});

</script>