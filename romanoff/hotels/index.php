<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Svet's Hotel Portal</title>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<script src="/js/jquery.js"></script>
</head>
<body>
<div class="container-fluid">
	<div id="header">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">
		<img id="logo" title="My Logo" alt="My Logo Image" src="img/svet_logo.png">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
</div>
	<div id="mycarousel">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div id="form_search">
				<h4>Search your hotel</h4>
				<div  class="myform" >
					<form action="backend.php" method="get">
						<div class="form-group">
							<label for="exampleInputEmail1">Location</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="location">
							<small id="emailHelp" class="form-text text-muted">The dates are subject to change</small>
						</div>

						<button type="submit" class="btn btn-warning">Search</button>
					</form>
				</div>
			</div>
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/slide1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/slide2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/slide3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div id="results">
		<div class="jumbotron">
			<h1 class="display-4">Hello, world!</h1>
			<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<hr class="my-4">
			<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</div>
	</div>
</div>
<style>
	#form_search, h4{
		color: white;
	}
	#form_search{
		width: 740px;
		height: auto;
		background-color: #1c37517a;
		position: absolute;
		left: 20%;
		top: 70px;
		border: 5px double #c07f26;
		z-index: 1000;
		padding: 5px;
	}
	body{
		background-color: #1c3752;
	}
	.container-fluid{
		padding-right: 0px !important;
		padding-left: 0px !important;
	}
	.bg-light a{
		color: #ffae54 !important;
	}
	.bg-light {
		background-color: #1c3752 !important;
	}
	#logo{
		width:200px;
	}
</style>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>