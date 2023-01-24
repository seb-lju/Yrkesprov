<?php
  session_start();
  ob_start();

if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true){
	?>
		<script>
			function guestSettings() {
				body.classList.add("guestSettings");
			}
		</script>
	<?
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About</title>
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
		
		window.onclick = function(event) {
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
		}
	</script>
</head>

<body>
	<div class="navbar-container">
		<div class="navbar">
			<div class="navbar-left">
				<a href="/YP/index.php">Home</a>
				<a href="/YP/create.php">Create Bracket</a>
				<a href="/YP/brackets.php">Public Brackets</a>
				<div class="active">About</div>
			</div>
			<div class="navbar-right">
				
				
				<div class="dropdown">
					<button class="btn btn-login" onclick="dropLogin()">Sign in</button>
					<div id="loginForm" class="dropdown-content">
						<?php 
							$user="";
							$pass="";
						
							if(isset($_POST['username']) && isset($_POST['password'])){
								require "dbconn.php";
								
								$user = $_POST['username'];
								$pass = $_POST['password'];
								
								$sql = "SELECT uname FROM user WHERE uname='$user' AND pwd='$pass'";
								$result = $dbconn->query($sql) or die($dbconn->error);
								
								$row=$result->fetch_assoc();
								$url=$row['url'];
								
								if($result->num_rows == 1){
									$_SESSION['logged_in'] = true;
									
									$dbconn->close();
									
									header("Location:index.php");
									exit;
								} else {
									$errormsg = "Användarnamn eller lösenordet felaktigt!";
								}
							}
						
						if(isset($errormsg)){
							echo '<p class="error">'.$errormsg.'</p>';
						}
						?>
						
						<form action="" id="loginform" name="loginform" method="post">
							<h3>Sign up</h3> 
							<p>
								<label for="username">Username:</label><br /><?
								echo'<input type="text" name="username" id="username" size="40" value="'.$user.'" required>';
								?>
							</p>
							<p>
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
				<div class="dark-mode">
					<button id="dark" onclick="toggleDark()">Dark mode</button>
				</div>
			</div>
		</div>
	</div>

	<div class="object">
		<div class="create">
		  <h1>About</h1><br>
			  <h2>Some text some text some text some text..</h2><br>

			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>

			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
			  <p>Some text some text some text some text..</p><br>
		</div>
	</div>

	<div class="footer">
		<div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt odio lectus, vitae viverra nulla consequat ut. Proin porta, libero non interdum cursus, lectus odio congue nunc, in scelerisque nulla.
        </div>
        <div style="margin-top: 50px">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit.
        </div>
	</div>
</body>
</html>