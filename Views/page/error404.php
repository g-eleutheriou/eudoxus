<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Σφάλμα</title>
	
    <!-- metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <link href="<?php echo BOOTSTRAP ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo BOOTSTRAP ?>/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?php echo BOOTSTRAP ?>/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo BOOTSTRAP ?>/js/html5shiv.js"></script>
    <![endif]-->


    
</head>
	<body>
		<div class="hero-unit">
  			<h1>Σφάλμα 404</h1>
  			<p><?php echo $this->msg; ?></p>
  			
		</div>
	</body>
</html>