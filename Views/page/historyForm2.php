<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="<?php echo PAGES; ?>/user">Προφίλ</a>
			<a href="#" class="active">Ολοοκλήρωση Δηλώσης</a>
		</div>
	</div>
	<div id="historyWrapper">
		<h4>Δήλωση</h4>
		<div id="historyContainer">
			<table class="tablesorter" id="historyTable1">
				<thead>
					<tr>
						<th scope="col">Βιβλίο</th>
						<th scope="col">Εκδοτής</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Εισαγωγή στην πραγματολογία</td>
						<td>ΕΚΔΟΣΕΙΣ ΘΕΜΕΛΙΟ ΕΠΕ</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<form id="Addbtn" onsubmit="return check()" method="get" action="">
				<input type="submit" value="Υπενθυμισή Κωδικού" />
			</form>
			<form id="continuebtn" onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/userEdit">
				<input type="submit" value="Ολοκλήρωση" />
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	///       http://code.google.com/p/one-simple-table-paging/ /////////

	$(document).ready(function() {
		// call the tablesorter plugin
		// $(function(){
		$("#historyTable1").oneSimpleTablePagination({
			rowsPerPage : 10,
			topNav : true
		});
	});

</script>