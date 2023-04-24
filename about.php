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
<title>BracketForge - About</title>
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
				<div class="active">About</div>
			</div>
			
		</div>
	</div>

		<div class="object">
			<div class="about">
		  		<h1 style="font-weight:bold;">About</h1><br>
			  
			  	<p>Welcome to BracketForge, the start of a new wave of bracket generators!<br><br>
				On this webpage you have the possibility to create your own tournament bracket. <br><br>We will in the future provide
				a lot of different formats so stay tuned!</p><br>
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
