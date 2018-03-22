<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sign up - Progressus Bootstrap template</title>

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
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo (2).png" width="150" height="50" border="0" alt=""></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					
					<li><a href="contact.html">Contact</a></li>
					<li class="active"><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">already registered, you can <a href ="signin.php">Login</a> here. </p>
							<hr>

							<form action="" method="post">
								<div class="top-margin">
								<label>First Name</label>
                                                                <input type="text" name="fname" placeholder="enter your first name" class="form-control">
								</div>
								<div class="top-margin">
									<label>Last Name</label>
                                                               <input type="text" name="lname" placeholder="enter your last name" class="form-control">
								</div>
								<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
                                                                <input type="text" name="email" placeholder="enter your email" class="form-control">
								</div>

								<!--div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
								<input type="password" name="password" placeholder="enter your password" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Confirm Password <span class="text-danger">*</span></label>
							<input type="password" name="confirm_password" placeholder="confirm your password" class="form-control">
									</div>
								</div>-->

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											I've read the <a href="page_terms.html">Terms and Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" name="register">Register</button>
									</div>
								</div>
							</form>
<?php

require_once './vendor/autoload.php';
if(isset($_POST["register"]))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$con=mysqli_connect('localhost','root','','registration');
$query=mysqli_query($con,"select * from login where first_name='".$fname."'");
$numrows=mysqli_num_rows($query);
	if($numrows==0)
{
	$upper="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$lower="abcdefghijklmnopqrstuvwxyz";
	$numbers="0123456789";
	$specchar="!@#$%^&*_";
	$generated_u_case=substr(str_shuffle($upper),0,2);
	$generated_L_case=substr(str_shuffle($lower),0,2);
	$generated_no=substr(str_shuffle($numbers),0,2);
	$generated_spec=substr(str_shuffle($specchar),0,2);
	$mixed=$generated_u_case.$generated_L_case.$generated_no.$generated_spec;
	$password=md5($mixed);
$sql="insert into login(first_name,last_name,email,password)values('$fname','$lname','$email','$password')";
	// echo "query created :  $sql";
	// die();
$result=mysqli_query($con,$sql);
if($result)
{
	// Email processes
	$from = 'admin@localhost';
	$to = $email;
	$subject = "Email Verification";
	$body  = "Hi $fname,<br> Thank you for registering with us, this is your account password: $mixed <br> please login at <a href=\"http:\\\\localhost\bootstrap\login.php\">here</a>";
	$transport = (new Swift_SmtpTransport('smtp.gmail.com',25,'TLS'))
		  ->setUsername('141fa04112@gmail.com')
		  ->setPassword('Seng2k18@301019');

		  $mailer = new Swift_Mailer($transport);
		  $message = (new Swift_Message($subject))
		  				->setFrom(["saichaitanya5960@gmail.com"=>'Chaitu'])
		  				 ->setTo([$to, 'other@domain.org' =>$fname])
		  				->setBody($body,'text/html');

		$result = $mailer->send($message);
		
		if($result)
			{
				echo "your password has been sent to this $email ";
			}
}
else{
	print_r($result);
}
}
else{
echo "that username already exists! please try again with another";
}
}
?>


						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+9100545517<br>
								<a href="mailto:#">kraftcore@gmail.com</a><br>
								<br>
								Computer science and engineering block,vignan's university,vadlamudi
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p> 


</p>
							<p>


p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2017, Your name. Designed by <a href="saichaitanya5960@gmail.com" rel="designer">chaitu</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>