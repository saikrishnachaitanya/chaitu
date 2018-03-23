<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="chaitu">
	
	<title>Contact us - kraft core</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<style>
	h4{
		color: "white";
	}
	</style>
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="home.php"><img src="assets/images/logo (2).png" width="150" height="50" border="0" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
				<?php
session_start();
if(!isset($_SESSION["sess_user"]))
{
header("location:signin.php");
}
?>
<html>
<body><div class="#">
<li><h5>welcome<&nbsp><?=$_SESSION['sess_user']?>&nbsp<a href="logout.php">logout</a></h5></li>
</div>
</body>
</html>
	
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>
<div class="container">
<div class="col-sm-2">
<div class="row">
<p><h2>Filter by profession</h2></p>
<table class="table table-striped table-bordered table-hovered">
<tr>
<th align="center">all artisians</th></tr>
<tr><td rowspan=20>art installation <br>calligraphy <br>glass Art<br>FabricArt</td></tr>
</table>
</div>
<div class="row">
<table class="table table-striped table-bordered table-hovered">
<tr><th>Handcrafts</th></tr>
<tr><td>inlay Art<br>metallic Art<br>Orgami<br>Sculpture<br>sketching</td></tr></table>
</div>
</div>

<div class="col-sm-8">
<center><p>Handi crafts include wide variety of work where useful and decorative objects are made completely by hand or simple tools. it is a traditional main work of craft and applies to wide range of creative and design activities.</p></center>
<div class="row">
<table class="table table-hovered table-bordered">
<tr>
		<center><td rowspan=7><img src="m4.png" alt="" width="400"</td>
	</tr>
	<tr><td colspan=2>ANKITHA CHARI<br>art installation</td></tr>
	<tr><td colspan=4>I am a create installer who is eagerly waiting to design crafts</td></tr>
	<tr><td colspan=2> <br></td></tr>
	</table>
</div>
<div class="row">
<table class="table table-hovered table-bordered">
<tr>
		<center><td rowspan=7><img src="m3.png" alt="" width="400"</td>
	</tr>
	<tr><td colspan=2>ANKITHA CHARI<br>art installation</td></tr>
	<tr><td colspan=4>I am a create installer who is eagerly waiting to design crafts</td></tr>
	<tr><td colspan=2> <br></td></tr>
	</table>
</div>
<div class="row">
<table class="table table-hovered table-bordered">
<tr>
		<center><td rowspan=7><img src="m2.png" alt="" width="400"</td>
	</tr>
	<tr><td colspan=2>ANKITHA CHARI<br>art installation</td></tr>
	<tr><td colspan=4>I am a create installer who is eagerly waiting to design crafts</td></tr>
	<tr><td colspan=2> <br></td></tr>
	</table>
</div>

</div>
</div>


	<section class="container-full top-space">
		<div id="map"></div>
	</section>

	



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>
