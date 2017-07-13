<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Video Sharing Home Page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="js/jQuery.js"></script>
	</head>

	<body>
		<!-- This is the Navbar in the header-->
		<div class="navbar navbar-custom">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
          </button>
					<a class="navbar-brand" href="#">Video CMS</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<form class="navbar-form navbar-right">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<div class="input-group-btn">
								<button class="btn btn-default">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right">
	         <li class="active"><a href="#">Home</a></li>
	         <li><a href="#">Software</a></li>
	         <li><a href="#">Music</a></li>
					 <li><a href="#">Contact Us</a></li>
				 	</ul>
				</div>
			</div>
    </div>
		<!-- This is the Header section where the Header image is displayed-->
		<header>
			<div class="text-center">
				<h1>My Content Management System</h1>
				<p class="lead">A simple blog which made our life easy</p>
			</div>
		</header>
		<!-- The Content of the Page-->
		<div class="page-content">
			<!-- The second Navigation menu-->
			<div class="container-fluid">
				<nav class="navbar navbar-sub">
					<ul class="nav navbar-nav">
					 <li class="active"><a href="#">Technology</a></li>
					 <li><a href="#">Science</a></li>
					 <li><a href="#">Philosophy</a></li>
					 <li><a href="#">Travel</a></li>
					</ul>
				</nav>
			</div>
			<!-- The main content of the page-->
			<div class="container-fluid">
				<!-- The left section of the content page-->
				<div class="col-sm-8">
					<div class="post">
						<h1><a href="#" class="post-title">First Post</a></h1>
						<div class="meta small">
							<a href="#">12-03-1985</a> | <a href="#">Technology</a> | <a href="#">Harshad Karanjkar</a>
						</div>
						<img src="images/technologyPost.jpg" class="img-responsive" alt="technology Post">
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
						</p>
						<span><a class="label label-default" href="#">I love technology</a></span>
						<span><a class="label label-default" href="#">What is technology?</a></span>
						<span><a class="label label-default" href="#">Where is technology used?</a></span>
					</div>


				</div>
				<!-- The right section of the content page-->
				<div class="col-sm-4">
					<div class="page-header">
						<h2>Latest Posts</h2>
					</div>
					<div class="custom-sidebar-list">
						<a href="#" class="custom-sidebar-list-item">First Post</a>
						<a href="#" class="custom-sidebar-list-item">Second Post</a>
						<a href="#" class="custom-sidebar-list-item">Third Post</a>
					</div>
					<div class="page-header">
						<h2>Post of the day</h2>
					</div>
					<div class="day-post">
						<h3><a href="#" class="post-title">Third Post</a></h3>
						<div class="meta small">
							<a href="#">12-03-1985</a> | <a href="#">Technology</a> | <a href="#">Harshad Karanjkar</a>
						</div>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...
						</p>
						<span><a class="label label-default" href="#">I love technology</a></span>
						<span><a class="label label-default" href="#">What is technology?</a></span>
						<span><a class="label label-default" href="#">Where is technology used?</a></span>
					</div>
					<div class="page-header">
						<h2>About Harshad Karanjkar</h2>
					</div>
					<div class="col-sm-4">
					 <img src="images/me.png" alt="Harshad Karanjkar" class="img-responsive">
				  </div>
					<div class="col-sm-8">
						<a href="#" class="lead">Linkedin Profile</a><br/>
						<a href="#" class="lead">Website Address</a><br/>
						<a href="#" class="lead">Email Address</a>
					</div>
				</div>
			</div>
		</div>
		<!-- The footer of the content page-->
		<div class="navbar navbar-inverse navbar-fixed-bottom">
			<p class="text-center footer">Copyright &copy; Harshad Karanjkar - 2017 </p>
		</div>
	</body>
</html>
