<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alumni Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="img/VIT.ico"/>
</head>
<style>
	.section-1 h1 {
	color: black;
	font-size: 30px;
}
	</style>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">VP Alumni Connect
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<a href="logout.php">
		<i class="fa fa-sign-out" aria-hidden="true"><span> Logout</span></i>		
		</a>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/alumni.png">
				<?php require("config.php"); 
    
				if(!isset($_SESSION['email'])) 
				{
        			header("location:alumnilogin.php");
    			}
    
    			?>
				<h4>Welcome <?php echo $_SESSION['fname']; ?></h4>
			</div>
			<ul>
				<li>
					<a href="update_alumni.php">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<span>Update Details</span>
					</a>
				</li>
				<li>
					<a href="searchalumni.php">
						<i class="fa fa-search" aria-hidden="true"></i>
						<span>Search Alumni</span>
					</a>
				</li>
		
				<li>
					<a href="eventmanager/gallery.php">
						<i class="fa fa-picture-o" aria-hidden="true"></i>
						<span>Photo Gallary</span>
					</a>
				</li>
				<li>
					<a href="viewevents.php">
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<span>View Events</span>
					</a>
				</li>
				<li>
					<a href="viewjobs.php">
						<i class="fa fa-briefcase" aria-hidden="true"></i>
						<span>View Jobs</span>
					</a>
				</li>
				<li>
					<a href="home.php">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<span>Chat</span>
					</a>
				</li>
				
			</ul>
		</nav>
		<section class="section-1">
		<marquee style="background: white" behavior="scroll" direction="left">
		
		<h1>Hello <?php echo $_SESSION['fname']; ?> !! Welcome to VP Alumni Connect Alumni Panel </h1>
	
	  	</marquee>
	
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
		</section>
	</div>

</body>
</html>