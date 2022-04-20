<?php
	session_start();
	function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
	}
	return($user_issue_book_count);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
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
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span><marquee style="width: 101%;">This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-3">
		<div class="card bg-light" style="width: 300px;left: 24em;top: 10em;">
				<div class="card-header">Issued Books:</div>
				<div class="card-body">
					<p class="card-text">No. of Issued Books: <?php echo get_user_issue_book_count();?> </p>
					<a href="view_issued_book.php" class="btn btn-primary" target="_blank">View Issued Books</a>
				</div>
			</div>
			
		</div>
		

		<div class="col-md-3">
		<div class="card bg-light" style="width: 300px;left: 24em;top: 10em;">
				<div class="card-header">Registered Books:</div>
				<div class="card-body">
					<p class="card-text">No. of availbale books: <?php echo get_user_issue_book_count();?> </p>
					<a href="userregbooks.php" class="btn btn-primary" target="_blank">View Registered Books</a>
				</div>
			</div>
			
		</div>

		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>