<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Search Results</a>
		</div>
	</div>
	<section id="results-form">
		<form onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/searchResults" class="form-wrapper cf">
			<input type="text" placeholder="Search here..." required>
			<button type="submit">
				Search
			</button>
		</form>
	</section><!-- content -->
	<section id="search-btn">
		<a href="<?php echo PAGES; ?>/aSearch">Advanced Search</a>
		<a href="<?php echo PAGES; ?>/register" >Help</a>
	</section>
	<section id="results">
		<div class="ResultsTable" >
			<table class="resultsTable" id="hor-minimalist-b">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Results</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="colID">1</td>
						<td>
						<section class="tableCol">
							<div class="imageHolder"></div>
							<div class="dataHolder">
								<a href=""><h2>Test Book</h2></a>
								<table id="simpleTable">
									<tbody>
										<tr>
											<td>University:</td>
											<td>EKPA</td>
										</tr>
										<tr>
											<td>Departement:</td>
											<td>D.I.T</td>
										</tr>
										<tr>
											<td>Name:</td>
											<td>George</td>
										</tr>
										<tr>
											<td>Surname:</td>
											<td>Eleutheriou</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="actions">
								<form id="Addbtn1" onsubmit="return check()" method="get" action="">
									<input type="submit" value="Add for Register" />
								</form>
								<form id="Addbtn2" onsubmit="return check()" method="get" action="">
									<input type="submit" value="Add for Exchange" />
								</form>
							</div>
						</section></td>
					</tr>
				</tbody>
			</table>
		</div>

	</section>
</div>

<script type="text/javascript">
	///       http://code.google.com/p/one-simple-table-paging/ /////////

	$(document).ready(function() {
		// call the tablesorter plugin
		// $(function(){
		$("#hor-minimalist-b").oneSimpleTablePagination({
			rowsPerPage : 4,
			topNav : true
		});
	});

</script>