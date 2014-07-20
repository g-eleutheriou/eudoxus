<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Eudoxus</title>

		<!-- metadata -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="<?php echo STYLES; ?>/footer.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/header.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/index.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/breadcrumb.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/about.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/contact.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/register.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/login.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/search.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/aSearch.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/searchResults.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/user.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/links.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/historyForm1.css" rel="stylesheet">
		<link href="<?php echo STYLES; ?>/bookSelect.css" rel="stylesheet">
		<script type="text/javascript" src="<?php echo JS; ?>/jquery.js"></script>
		<script type="text/javascript" src="<?php echo JS; ?>/oneSimpleTablePaging-1.0.js"></script>
		<script type="text/javascript" src="<?php echo JS; ?>/script.js"></script>

	</head>
	<body>
		<div id="main">
			<div id="head">
				<a id="logo" href="<?php echo HOME; ?>">logo</a>
				<div id="navmenu">

					<nav>
						<ul>
							<li id="home">
								<a href="<?php echo HOME; ?>"> <span class="icon"></span> <span
								class="title">Home</span> </a>
							</li>
							<li id="about">
								<a href="<?php echo PAGES; ?>/about"> <span class="icon"></span> <span
								class="title">About</span> </a>
							</li>
							<li id="contact">
								<a href="<?php echo PAGES; ?>/contact"> <span class="icon"></span> <span
								class="title">Contact</span> </a>
							</li>
						</ul>
					</nav>
				</div>
				<div id="head-right">
					<div id="search">
						<form method="post" action="<?php echo SEARCH; ?>/search">
							<input name="name" placeholder="Search here" type="text" />
						</form>
					</div>
					<?php if (!isset($_SESSION['username'])): ?>
					<div id="user-btn">
						<p>
							<a href="#popup">
							<button id="login" href="#popup">
								<span class="icon"></span><span class="text">Login</span>
							</button> </a>
						</p>
					</div>

				</div>

				<!-- based on http://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/-->
				<div id="popup">
					<div id="inner-popup">
						<a href="#close" title="Close" class="close">X</a>

						<section id="form">
								<h1>Login Form</h1>
								<form onsubmit="return check()" method="post" action="<?php echo USERS; ?>/login">
									<div>
										<input type="text" name="username" placeholder="Username" required="" id="username" />
									</div>
									<div>
										<input type="password" name="password" placeholder="Password" required="" id="password" />
									</div>
									<div>

										<input type="submit" value="Log in" />
								</form>
								<a href="#">Lost your password?</a>
								<a href="<?php echo PAGES; ?>/register" >Register</a>
					</div>
					</section><!-- content -->
				</div>
			</div>
			<?php else: ?>
			<div id="user-btn">
				<p>
					<a href="#popup">
					<button id="login" href="#popup">
						<span class="icon"></span><span class="text">Profile</span>
					</button> </a>
				</p>
			</div>

		</div>

		<!-- based on http://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/-->
		<div id="popup">
			<div id="inner-popup">
				<a href="#close" title="Close" class="close">X</a>

				<section id="form">
						<h1>Profile</h1>
						<h5>Logged as, <?php echo $_SESSION['username']; ?></h5>
						<a href="<?php echo PAGES; ?>/user"><button id="profilebtn" class="button">Profile</button></a>
						<a href="<?php echo USERS; ?>/logout"><button id="logoutbtn" class="button">Logout</button></a>
			</section><!-- content -->
		</div>
		</div>
		<?php endif ?>
		</div>
