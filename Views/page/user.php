<div id="container">
	<div id="top">
		<!-- based on http://thecodeplayer.com/walkthrough/css3-breadcrumb-navigation-->
		<div class="breadcrumb">
			<a href="<?php echo HOME; ?>">Home</a>
			<a href="#" class="active">Profile</a>
		</div>
	</div>
	<div id="tabhost">
		<ul id="sidemenu" class="tabmenu">
			<li>
				<a href="#tab1" class="open"><strong>Profile</strong></a>
			</li>

			<li>
				<a href="#tab2"><strong>Book Registrations</strong></a>
			</li>

			<li>
				<a href="#tab3"><strong>Book Exchanges</strong></a>
			</li>
		</ul>

		<div id="content" class="content">
			<div id="tab1" class="contentblock">
				<h2>Profile Information</h2>
				<div class="boxtitle">
					<h4>Student Info</h5>
				</div>
				<div class="profilebox">
					<table>
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
				<div class="boxtitle">
					<h4>General Info</h5>
				</div>
				<div class="profilebox">
					<table>
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
				<div>
					<form onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/userEdit">
						<input type="submit" value="Edit Info" />
					</form>
				</div>
			</div>
			<div id="tab2" class="contentblock hidden">
				<h2>Book Registrations</h2>
				<div class="boxtitle">
					<h4>Past Registrations</h5>
				</div>
				<div class="profilebox">
					<table class="tablesorter" id="tab2Table">
						<thead>
							<tr>
								<th scope="col">Date</th>
								<th scope="col">Semester</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>26/04/2013</td>
								<td>Winter</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>
							<tr>
								<td>26/04/2013</td>
								<td>Summer</td>
								<td><a href="#">Check</a></td>
							</tr>

						</tbody>
					</table>
				</div>
				<div>
					<form onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/userEdit">
						<input type="submit" value="Create New" />
					</form>
				</div>
			</div>
			<div id="tab3" class="contentblock hidden">
				<h2>Book Exchanges</h2>
				<div class="tab3InfoContainer">
					<span class="tab3Icon icon-green"></span>
					<span class="tab3Text">text text text</span>
					<span class="tab3Icon icon-yellow"></span>
					<span class="tab3Text">text text text</span>
					<span class="tab3Icon icon-red"></span>
					<span class="tab3Text">text text text</span>
				</div>
				<div class="boxtitle">
					<h4>Book List</h5>
				</div>
				<div class="profilebox">
					<table class="tablesorter" id="tab3Table">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Book</th>
								<th scope="col">Status</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><div class="icon-green">

								</div></td>
								<td>Winter</td>
								<td>Winter</td>
								<td><a href="#">Register for Exchange</a></td>
							</tr>
							<tr>
								<td><div class="icon-yellow">

								</div></td>
								<td>Winter</td>
								<td>Winter</td>
								<td><a href="#">Register for Exchange</a></td>
							</tr>
							<tr>
								<td><div class="icon-red">

								</div></td>
								<td>Winter</td>
								<td>Winter</td>
								<td><a href="#">Register for Exchange</a></td>
							</tr>
							<tr>
								<td><div class="icon-green">

								</div></td>
								<td>Winter</td>
								<td>Winter</td>
								<td><a href="#">Register for Exchange</a></td>
							</tr>
							<tr>
								<td><div class="icon-yellow">

								</div></td>
								<td>Winter</td>
								<td>Winter</td>
								<td><a href="#">Register for Exchange</a></td>
							</tr>
							<tr>
								<td><div class="icon-red">

								</div></td>
								<td>Winter</td>
								<td>Winter</td>
								<td><a href="#">Register for Exchange</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div>
					<form onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/userEdit">
						<input type="submit" value="Add Book" />
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