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
			<table class="tablesorter" id="hor-minimalist-b" summary="Employee Pay Sheet">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Results</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="colID">1</td>
						<td><section class="tableCol">
							<div class="imageHolder">
							</div>
							<div class="dataHolder">
								<article>
									<a href=""><h2>Test Book</h2></a>
									<p>Book ID        :  4</p>
									<p>Publish Number :  4</p>
									<p>Publish Year   :  4</p>
									<p>Publisher      :  Mike Little</p>
								</article>					
							</div>
						</section></td>			
					</tr>
					<tr>
						<td class="colID">2</td>
						<td><section class="tableCol">
							<div class="imageHolder">
							</div>
							<div class="dataHolder">
								<article>
									<a href=""><h2>Test Book</h2></a>
									<p>Book ID        :  4</p>
									<p>Publish Number :  4</p>
									<p>Publish Year   :  4</p>
									<p>Publisher      :  Mike Little</p>
								</article>					
							</div>
						</section></td>			
					</tr>
					<tr>
						<td class="colID">3</td>
						<td><section class="tableCol">
							<div class="imageHolder">
							</div>
							<div class="dataHolder">
								<article>
									<a href=""><h2>Test Book</h2></a>
									<p>Book ID        :  4</p>
									<p>Publish Number :  4</p>
									<p>Publish Year   :  4</p>
									<p>Publisher      :  Mike Little</p>
								</article>					
							</div>
						</section></td>			
					</tr>
					<tr>
						<td class="colID">4</td>
						<td><section class="tableCol">
							<div class="imageHolder">
							</div>
							<div class="dataHolder">
								<article>
									<a href=""><h2>Test Book</h2></a>
									<p>Book ID        :  4</p>
									<p>Publish Number :  4</p>
									<p>Publish Year   :  4</p>
									<p>Publisher      :  Mike Little</p>
								</article>					
							</div>
						</section></td>			
					</tr>
					<tr>
						<td class="colID">5</td>
						<td><section class="tableCol">
							<div class="imageHolder">
							</div>
							<div class="dataHolder">
								<article>
									<a href=""><h2>Test Book</h2></a>
									<p>Book ID        :  4</p>
									<p>Publish Number :  4</p>
									<p>Publish Year   :  4</p>
									<p>Publisher      :  Mike Little</p>
								</article>					
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
		$("#hor-minimalist-b").oneSimpleTablePagination({rowsPerPage: 4});
	});

</script>