<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="<?php echo PAGES; ?>/user">Προφίλ</a>
			<a href="#" class="active">Δηλώσεις</a>
		</div>
	</div>
	<div id="historyWrapper">
		<h4>History</h4>
		<div id="historyContainer">
			<table class="tablesorter" id="historyTable1">
				<thead>
					<tr>
						<th scope="col">Μαθήμα</th>
						<th scope="col">Εξάμηνο</th>
						<th scope="col">Βιβλίο</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>ΠΡΑΓΜΑΤΟΛΟΓΙΑ</td>
						<td>3 Χειμερίνο</td>
						<td>Εισαγωγή στην πραγματολογία</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<form id="Addbtn" onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/bookSelect">
				<input type="submit" value="Προσθήκη" />
			</form>
			<form id="continuebtn" onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/historyForm2">
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