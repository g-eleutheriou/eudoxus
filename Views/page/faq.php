<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Αρχίκη</a>
			<a href="#" class="active">Συχνές Ερωτήσεις</a>
		</div>
	</div>
	<div id="historyWrapper">
		<h4>FAQ</h4>
		<div id="historyContainer">
			<table class="tablesorter" id="newsTable">
				<thead>
					<tr>
						<th scope="col">Ερώτηση</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><h4>Φοιτητές</h4></td>
					</tr>
					<tr>
						<td><a href="#">1.Μπορώ να δηλώσω και να παραλάβω Συγγράμματα για μαθήματα προηγούμενων εξαμήνων;</a></td>
					</tr>
					<tr>
						<td><a href="#">2.Τι σημαίνει όταν δίπλα σε κάποιο Σύγγραμμα βλέπω την ένδειξη "Διαθεσιμότητα: 0"; </a></td>
					</tr>
					<tr>
						<td><a href="#">3.Σε περίπτωση απώλειας του προσωπικού κωδικού PIN, πως μπορεί να γίνει η ανάκτησή του;</a></td>
					</tr>
					<tr>
						<td><h4>Εκδότες</h4></td>
					</tr>
					<tr>
						<td><a href="#">1.Είναι δυνατή η διάθεση Συγγραμμάτων χωρίς να γίνει χρήση της υπηρεσίας «Εύδοξος»;</a></td>
					</tr>
					<tr>
						<td><a href="#">2.Ποιοι έχουν δικαίωμα να καταχωρίσουν Συγγράμματα προς διάθεση;</a></td>
					</tr>
					<tr>
						<td><h5>Γραμματίες</h5></td>
					</tr>
					<tr>
						<td><a href="#">1.Τι πρέπει να προσέξω για την ασφάλειά μου?</a></td>
					</tr>
					<tr>
						<td><a href="#">2.Πως καταχωρίζονται τα μαθήματα που έχουν Θεωρητικό και Εργαστηριακό μέρος;</a></td>
					</tr>
					<tr>
						<td><a href="#">3.Πώς καταχωρίζονται τα υποχρεωτικά βοηθήματα, δηλαδή εκείνα για τα οποία οι φοιτητές δεν έχουν δυνατότητα εναλλακτικής επιλογής;</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	///       http://code.google.com/p/one-simple-table-paging/ /////////

	$(document).ready(function() {
		// call the tablesorter plugin
		// $(function(){
		$("#newsTable").oneSimpleTablePagination({
			rowsPerPage : 7,
			topNav : true
		});
	});

</script>