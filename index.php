<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TBD</title>
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
				<a class="active" href="#home">Home</a></li>
				<a href="#create">Create Bracket</a></li>
				<a href="#brackets">Public Brackets</a></li>
				<a href="#about">About</a></li>
			</div>
			<div class="navbar-right">
				
				
				<div class="dropdown">
					<button class="btn btn-login" onclick="dropLogin()">Sign in</button>
					<div id="loginForm" class="dropdown-content">
						<form action="" name="newuser" method="post">
							<h3>Sign up</h3> 
							<p>
								<label for="username">Username:</label><br />
								<input type="text" name="username" id="username" size="40" value="" required>
							</p>
							<p>
								<label for="password">Password:</label><br />
								<input type="password" name="password" id="password" size="40" value="" required>
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
</body>
</html>
