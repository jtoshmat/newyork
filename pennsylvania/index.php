<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
<link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">

<div class="myheader">Headercsdc</div>
<div class="mybody">
	
<div class="leftcol">
	<nav class="navbar navbar-inverse">
	<ul class="nav navbar-nav">
	  <li class="active">
	  <a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
	</ul>
	</nav>
</div>

<div class="rightcol">
	Rightr Col
</div>

</div>
<div class="myfooter">Footercsac</div>



<style>


	.nav a{
		text-decoration: none
	}

	.nav li{
		width: 150px;
		background-color: red;
		margin:5px;
	}

.leftcol{
	width:30%;
	height: 100%;
	float: left;
}

.rightcol{
	width:70%;
	height: 100%;
	float: left;
	background-color: white;
}


html, 
body{
	width:100%;
	height:100%;
	margin:0;
	padding: 0;
}

body{
}

.myheader{
	width:100%;
	height:50;
	background-color: #555;
}

.mybody{
	width:100%;
	height:350px;
}
.myfooter{
	width:100%;
	height:250;
	background-color: brown;
}


</style>
</div>
</body>
</html>