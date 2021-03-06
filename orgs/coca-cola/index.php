<?php
	//This is the home coca cola site within Luccero, LLC
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Meta -->
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		
		<!-- Third Party Styles -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' href='/Users/glenlucero/Lucero/assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css'>
		<link rel='stylesheet' href='/Users/glenlucero/Lucero/assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css'>

		<!-- Custom Styles -->
		<link rel='stylesheet' href='assets/css/main.css'>
	</head>
	<body>
		<div class='navbar navbar-default coke-main-nav'>
			<div class='container'>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img alt="Coca-Cola" src='assets/img/coke-logo1.png'>
					</a>
				</div>
				<div class="collapse navbar-collapse" id="main-nav">
					<!--<ul class="nav navbar-nav">
						<li>
							<a href="#">Custom Sofware</a>
						</li>
					</ul>-->
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solutions<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a class="solution" href="#" data-path="" data-page="home">Home</a></li>
								<li><a class="solution" href="#" data-path="solutions/training-management/" data-page="index.html">Training Management</a></li><!--Change this .html to .php-->
								<li role="separator" class="divider"></li>
								<li><a href="#" id='request-module'>Submit Request</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account Management<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Change Info</a></li>
								<li><a href="#">Change Password</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Delete Account</a></li>
							</ul>
						</li>
						<li>
							<a href="#" id='logout'>Logout</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!--/.container-fluid-->
		</div><!--/.navbar-->
		<div id="pseudo-body">
			<div class='home-bg'></div>
			<div class="home-default">
				<div class="container">
					<h1 class='text-center'>This is a Title</h1>
					<p class='text-center'>Ei mei platonem senserit, legendos iracundia repudiandae ad qui, sed oratio dicant ut. </p>
				</div>
			</div>
		</div><!--/.pseudo-body-->
		<div class='footer'>
			<div class='container'>
				<div class='col-xs-6 text-left'>
					<p>&copy; Lucero, LLC - All Rights Reserved</p>
				</div>
				<div class='col-xs-6 text-right'>
					<p>Powered by Lucero, LLC</p>
				</div>
			</div>
		</div><!--/.footer-->
	</body>
	<script type='text/Javascript' src='/Users/glenlucero/Lucero/assets/js/jquery-1.12.0.min.js'></script>
	<script type='text/Javascript' src='/Users/glenlucero/Lucero/assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js'></script>
	<script type='text/Javascript' src='/Users/glenlucero/Lucero/assets/plugins/bootbox.min.js'></script>
	<script type='text/Javascript' src='/Users/glenlucero/Lucero/assets/js/navbar.js'></script>
	<script type='text/javascript' src='assets/js/main.js'></script>
</html>