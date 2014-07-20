<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="<?php echo PAGES; ?>/user">Profile</a>
			<a href="#" class="active">Links</a>
		</div>
	</div>
	<div id="historyWrapper">
		<h4>History</h4>
		<div id="historyContainer">
			<table class="tablesorter" id="historyTable1">
				<thead>
					<tr>
						<th scope="col">Book</th>
						<th scope="col">Shipping</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>26/04/2013</td>
						<td>Ermou</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<form id="Addbtn" onsubmit="return check()" method="get" action="">
				<input type="submit" value="Remind Pin" />
			</form>
			<form id="continuebtn" onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/userEdit">
				<input type="submit" value="Finish" />
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