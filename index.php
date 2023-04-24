<?php
  session_start();
  ob_start();

	if(isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] == true){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BracketForge</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
	<script>
		function toggleDark() {
			var btn = document.getElementById("dark");
			var body = document.body;
			if (body.classList.contains("dark-theme")){
				body.classList.remove("dark-theme");
				btn.innerHTML = "Dark mode";
			}
			else{
				body.classList.add("dark-theme");
				btn.innerHTML = "Light mode";
			}
		}

		function dropLogin() {
			var loginForm = document.getElementById("loginForm") 
			if(loginForm.classList.contains("show")){
				loginForm.style.display = "none";
				loginForm.classList.remove("show");
			}
			else {
				loginForm.style.display = "block";
				loginForm.classList.add("show");
			}
		}

		/*window.onclick = function(event) {
			if (!event.target.matches('.btn-login')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
						openDropdown.style.display = "none";
					}
				}
			}
		}*/
	</script>
</head>

<body>
	<div class="navbar-container">
		<div class="navbar">
			<div class="navbar-left">
				<div class="active">Home</div>
				<a href="/YP/create.php">Create Bracket</a>
				<a href="/YP/about.php">About</a>
			</div>
			<div class="navbar-right">
				<button onclick="location.href='/YP/logout.php'" class="btn btn-register">Sign out</button>
			</div>
		</div>
	</div>

	<div class="object">
		<div class="container">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" style="margin-top:20px;">

				<div class="item active">
					<img src="4423859.png" alt="Generator" style="width:50%;margin-left:auto;margin-right:auto;">
					<div class="carousel-caption">
						<h3>Bracket Generator</h3>
						<p>Try out BracketForge's bracket generator!</p>
					</div>
				</div>

				
				<div class="item">
					<img src="about.png" alt="About" style="width:50%;margin-left:auto;margin-right:auto;">
					<div class="carousel-caption">
						<h3>About</h3>
						<p>Learn more about BracketForge!</p>
					</div>
				</div>
			
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

	<div class="footer">
		<div>
			Welcome to BracketForge, the start of a new wave of bracket generators!
        </div>
        <div style="margin-top: 50px">
                Created by Sebastian Ljungars 2023
        </div>
	</div>
</body>
</html>
<?
	}
	else {

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BracketForge</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
	<script>
		function toggleDark() {
			var btn = document.getElementById("dark");
			var body = document.body;
			if (body.classList.contains("dark-theme")){
				body.classList.remove("dark-theme");
				btn.innerHTML = "Dark mode";
			}
			else{
				body.classList.add("dark-theme");
				btn.innerHTML = "Light mode";
			}
		}

		function dropLogin() {
			var loginForm = document.getElementById("loginForm") 
			if(loginForm.classList.contains("show")){
				loginForm.style.display = "none";
				loginForm.classList.remove("show");
			}
			else {
				loginForm.style.display = "block";
				loginForm.classList.add("show");
			}
		}

		/*window.onclick = function(event) {
			if (!event.target.matches('.btn-login')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
						openDropdown.style.display = "none";
					}
				}
			}
		}*/
	</script>
</head>

<body>
	<div class="navbar-container">
		<div class="navbar">
			<div class="navbar-left">
				<div class="active">Home</div>
				<a href="/YP/create.php">Create Bracket</a>
				<a href="/YP/about.php">About</a>
			</div>

			<div class="navbar-right">
				<div class="dropdown">
					<button class="btn btn-login" onclick="dropLogin()">Sign in</button>
					<div id="loginForm" class="dropdown-content">
						<?php 
							$user="";
							$pass="";

							function cleanData($data){
								$data = strip_tags($data);
								$data = htmlspecialchars($data);
								return $data;
							}
							if(isset($_POST['username']) && isset($_POST['password'])){
								require "dbconn.php";

								$user = cleanData($_POST['username']);
								$pass = cleanData($_POST['password']);

								$sql = "SELECT * FROM user WHERE uname='$user'";
								$result = $dbconn->query($sql) or die($dbconn->error);

								$row=$result->fetch_assoc();
								$hash = $row['pwd'];
								$url=$row['url'];

								if(password_verify($pwd, $hash) && $result->num_rows == 1){
									$_SESSION['logged_in'] = true;

									$dbconn->close();

									header("Location:index.php");
									exit;
								} else {
									$errormsg = "Användarnamn eller lösenordet felaktigt!";
								}
							}

						if(isset($errormsg)){
							echo '<script>alert("'.$errormsg.'")</script>';
						}
						?>

						<form action="" id="loginform" name="loginform" method="post">
							<p class="loginP">
								<label for="username">Username:</label><br /><?
								echo'<input type="text" name="username" id="username" size="40" value="'.$user.'" required>';
								?>
							</p>
							<p class="loginP">
								<label for="password">Password:</label><br /><?
								echo'<input type="password" name="password" id="password" size="40" value="'.$pass.'" required>';
								?>
							</p>
							<p>
								<input type="submit" class="send" name="submit" id="submit" value="Sign up">
							</p>
						</form>
					</div>
				</div>

				<button onclick="location.href='/YP/register.php'" class="btn btn-register">Sign up</button>
			</div>
		</div>
	</div>

	<div class="object">
		<div class="container">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

				<div class="item active">
					<img src="4423859.png" alt="Generator" style="width:50%;margin-left:auto;margin-right:auto;">
					<div class="carousel-caption">
						<h3>Bracket Generator</h3>
						<p>Try out BracketForge's bracket generator!</p>
					</div>
				</div>

				
				<div class="item">
					<img src="about.png" alt="About" style="width:50%;margin-left:auto;margin-right:auto;">
					<div class="carousel-caption">
						<h3>About</h3>
						<p>Learn more about BracketForge!</p>
					</div>
				</div>
			
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>

	<div class="footer">
		<div>
			Welcome to BracketForge, the start of a new wave of bracket generators!
        </div>
        <div style="margin-top: 50px">
                Created by Sebastian Ljungars 2023
        </div>
	</div>
	
</body>
</html>
<?php
	}
?>
