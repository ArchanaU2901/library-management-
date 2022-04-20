<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  			#side_bar{
			background-color:#87ddeb;
  			padding: 65px;
  			width: 300px;
  			height: 450px;
  		}

		  .bg-info {
			background-color: #87ddeb!important;
		}
		h3 {
			font-size: 1.75rem;
			/* right: 13em; */
			/* padding: 1em 4em; */
			margin-right: 3em;
		}
  	</style>
</head>
<body class="bg-info">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 101%;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee style="width: 101%;">This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>		
		<div class="col-md-8" id="main_content">
			<center><h3>User Registration Form</h3></center>
			<form action="register.php" method="post">
				<div class="form-group" style="width:70%; margin:0em 5em;">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group" style="width:70%; margin:0em 5em;">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group" style="width:70%; margin:0em 5em;">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group" style="width:70%; margin:0em 5em;">
					<label for="name">Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group" style="width:70%; margin:0em 5em;">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" style="margin:2em 5em">Register</button>
			</form>
	</div>
	</div>
</body>
</html>