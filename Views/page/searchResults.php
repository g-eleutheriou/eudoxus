<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχική</a>
			<a href="#" class="active">Αποτελέσματα Αναζήτησης</a>
		</div>
	</div>
	<section id="results-form">
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
	<section id="results">
		<div class="ResultsTable" >
			<table class="resultsTable" id="hor-minimalist-b">
				<thead>
					<tr>
						<th scope="col">Κωδικός</th>
						<th scope="col">Αποτελέσματα</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (!empty($data)) {
						foreach ($data as &$value) {
					echo"<tr>";
					echo "<td class=\"colID\">". $value->id ."</td><td>";
					echo "<section class=\"tableCol\">";
					echo "<div class=\"imageHolder\"></div>";
					echo "<div class=\"dataHolder\">";
					echo "<a href=\"\"><h5>". $value->name ."</h5></a>";
					echo "<table id=\"simpleTable\">";
					echo "<tbody>";
					echo "<tr>";
					echo "<td>Έτος:</td>";
					echo "<td>" . $value->year . "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>Συγγραφέας:</td>";
					echo "<td>" . $value->writer . "</td>";
					echo "</tr>";
					echo "</tbody>";
					echo "</table>";
					echo "</div>";
					echo "<div class=\"actions\">";
					echo "<form id=\"Addbtn1\" onsubmit=\"return check()\" method=\"get\" action=\"\"><input type=\"submit\" value=\"Δήλωση\" /></form>";
					echo "<form id=\"Addbtn2\" onsubmit=\"return check()\" method=\"get\" action=\"\">";
					echo "<input type=\"submit\" value=\"Ανταλλαγή\" />";
					echo "</form>";
					echo "</div>";
					echo "</section></td>";
					echo "</tr>";

					}
					}
					?>
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