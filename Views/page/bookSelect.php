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
		<h4>Select Book</h4>
		<div id="historyContainer">
			<h4 id="bookSelectH4">1. Select Course</h4>
			<select class="select-style">
				<option value="">Course</option>
				<option  value="01">January</option>
			</select>
			<h4>2. Select Book</h4>
			<select class="select-style">
				<option value="">Book</option>
				<option  value="01">January</option>
			</select>
			<h4>3. Select Spot</h4>
			<select class="select-style">
				<option value="">Spot</option>
				<option  value="01">January</option>
			</select>
		</div>
		<div>
			<form id="Addbtn" onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/historyForm2">
				<input type="submit" value="Cancel" />
			</form>
			<form id="continuebtn" onsubmit="return check()" method="get" action="<?php echo PAGES; ?>/historyForm2">
				<input type="submit" value="Add" />
			</form>
		</div>
	</div>
</div>