<!DOCTYPE html>
<html lang="en" ng-app="tugas">
<head>
	<meta charset="UTF-8">
	<title>Explore</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header class="nav navbar-default">
	<div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">Berak Bebek</a>
	    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Sekolah <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<?php for($i=1; $i<14; $i++) { ?>
            <li><a href="sman<?php echo $i; ?>.php">SMAN <?php echo $i; ?></a></li>
            <?php } ?>
          </ul>
	    <li><a href="explore.php">Explore</a></li>
		</li>
      </ul>
</header>

<div id="explore"></div>