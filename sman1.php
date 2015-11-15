<!DOCTYPE html>
<html lang="en" ng-app="tugas">
<head>
	<meta charset="UTF-8">
	<title>SMAN 1 Depok</title>
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
	    <li><a href="">Explore</a></li>
		</li>
      </ul>
</header>

<div id="content">
	<div class="content-hero" style="background: url('http://1.bp.blogspot.com/-bbbKvVMai8I/UwS5T1GFt5I/AAAAAAAAAWg/ZRlfkzfBRBA/s1600/CSC_0431.JPG') no-repeat center center">	
		<div class="shade"></div>
		<div class="container">
			<h1 class="heading">SMA Negeri 1 Kota Depok</h1>
		</div>
	</div>

	<div class="content-passing-grade padding-20 margin-20">
		<div class="container">
			<div class="pull-left">
				Terakreditasi A
			</div>

			<div class="pull-right">
				Passing Grade: 35.5
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-sm-12 basic-info margin-20">
				<div class="panel panel-info">
					<div class="panel-heading">
						Basic Information
					</div>

					<div class="panel-body">
						<ul class="fa-ul">
						  <li><i class="fa-li fa fa-map-marker"></i>Jl. Nyai Ronggeng</li>
						  <li><i class="fa-li fa fa-check-square"></i>can be used</li>
						  <li><i class="fa-li fa fa-spinner fa-spin"></i>as bullets</li>
						  <li><i class="fa-li fa fa-square"></i>in lists</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 visi margin-20">
				<div class="panel panel-info">
					<div class="panel-heading">
						Visi
					</div>

					<div class="panel-body">
						<ol>
							<li>List</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="col-sm-6 misi margin-20">
				<div class="panel panel-info">
					<div class="panel-heading">
						Misi
					</div>

					<div class="panel-body">
						<ol>
							<li>List</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>






<!-- print button -->
<button class="btn btn-print btn-default" onclick="window.print()">
	<i class="fa fa-file-pdf-o"></i> Print Document
</button>


</body>
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
<script src="assets/vendor/SmoothScrollWheel/dist/jquery.SmoothScrollWheel.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="assets/js/app.js"></script>
</html>