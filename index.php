<!DOCTYPE html>
<html lang="en" ng-app="tugas">
<head>
	<meta charset="UTF-8">
	<title>Berak Bebek</title>
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

<div id="hero">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 hero-start padding-100 align-center">
			<h1>explore everything about schools here</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis sunt quas at soluta possimus dolorum delectus eaque, totam debitis neque necessitatibus, laudantium, harum. Enim dolorem voluptatem autem, error doloremque, nulla.</p>
			<hr style="width:5%">
		</div>
	</div>
</div>

<div id="team" ng-controller="teamController">
	<div class="container padding-60">
		<div class="align-center">
			<h2>proudly crafted by</h2>
			<hr style="width:5%">
		</div>

		<div id="light-slider" class="owl-carousel">
			<div class="team-post align-center" ng-repeat="data in datas">
				<img class="img-responsive img-circle" ng-src="{{data.fb}}">
				<h5>{{data.nama}}</h5>
				<p>{{data.npm}}</p>
			</div>		
		</div>
	</div>
</div>



</body>
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
<script src="assets/vendor/SmoothScrollWheel/dist/jquery.SmoothScrollWheel.min.js"></script>
<script src="assets/vendor/lightslider/dist/js/lightslider.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="assets/js/app.js"></script>
</html>