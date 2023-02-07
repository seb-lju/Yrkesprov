<?php
  session_start();
  ob_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Bracket</title>
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
				<a href="/YP/index.php">Home</a>
				<div class="active">Create Bracket</div>
				<a href="/YP/brackets.php">Public Brackets</a>
				<a href="/YP/about.php">About</a>
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

		<div class="create">
		  <form action="" method="post">
			<h2>Create Bracket</h2><br/>
			<p>
				<label for="bracket_name">Bracket name: <span style="color:red;">*</span></label>
				<input type="text" name="bracket_name" required>
			</p><br/>

			  <p>
				<label for="bracket_format">Format: <span style="color:red;">*</span></label>
				<select name="format" required>
				  <option value="single">Single Elimination</option>
				  <option value="double">Double Elimination</option>
				  <option value="rr">Round Robin</option>
				  <option value="swiss">Swiss</option>
				</select>
			</p><br/>
			<p>
				<label for="bracket_name">Sport: <span style="color:red;">*</span></label>
				<select name="sport" required>
				  <?php
					require "dbconn.php";
					$sql = "SELECT * FROM sport";
					$result = $dbconn->query($sql);
					
					while ($row = $result->fetch_assoc()){
				  ?>
						<option value="<?php echo $row["sport_id"];?>">
						  <?php echo $row["sport"];?>
						</option>
				  <?php
					}
					$dbconn->close();
				  ?>
				</select>
			</p><br/>
			  
			  <input type="submit" value="Generate">
		  </form>
			<div class="participants ui-sortable">
				<div class="participant" id="participant-1">
					<div class="participant-handle ui-sortable-handle"></div>
					<div class="participant-seed ui-sortable-handle">1</div>
					<div class="participant-name">
						<input class="input-participant" type="text" name="participant-1" maxlength="35" value="Team 1">
					</div>
					<div class="participant-delete">
						<div class="icon icon-close"></div>
					</div>
				</div>
				<div class="participant" id="participant-2">
					<div class="participant-handle ui-sortable-handle"></div>
					<div class="participant-seed ui-sortable-handle">2</div>
					<div class="participant-name">
						<input class="input-participant" type="text" name="participant-2" maxlength="35" value="Team 2">
					</div>
					<div class="participant-delete">
						<div class="icon icon-close"></div>
					</div>
				</div>
				<div class="participant" id="participant-3">
					<div class="participant-handle ui-sortable-handle"></div>
					<div class="participant-seed ui-sortable-handle">3</div>
					<div class="participant-name">
						<input class="input-participant" type="text" name="participant-3" maxlength="35" value="Team 3">
					</div>
					<div class="participant-delete">
						<div class="icon icon-close"></div>
					</div>
				</div>
				<div class="participant" id="participant-4">
					<div class="participant-handle ui-sortable-handle"></div>
					<div class="participant-seed ui-sortable-handle">4</div>
					<div class="participant-name">
						<input class="input-participant" type="text" name="participant-4" maxlength="35" value="Team 4">
					</div>
					<div class="participant-delete">
						<div class="icon icon-close">
						</div>
					</div>
				</div>
			</div>
			<div class="add-buttons">
				<div class="button button-shuffle-seeds" title="Shuffle Seeds">
					<div class="icon icon-shuffle"></div>
				</div>
				<div class="button button-add-participant">+ Add Participant</div>
			</div>

		</div>
		<div class="bracket">
			<div class="round round-16">
				<div class="game" id="game-8">
					<div class="slot slot-top">
						<div class="slot-seed">1</div>
						<div class="slot-name">Team 1</div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">16</div>
						<div class="slot-name">Team 16</div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game" id="game-9">
					<div class="slot slot-top">
						<div class="slot-seed">9</div>
						<div class="slot-name">Team 9</div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">8</div>
						<div class="slot-name">Team 8</div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game" id="game-10">
					<div class="slot slot-top">
						<div class="slot-seed">5</div>
						<div class="slot-name">Team 5</div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">12</div>
						<div class="slot-name">Team 12</div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game" id="game-11">
					<div class="slot slot-top">
						<div class="slot-seed">13</div>
						<div class="slot-name">Team 13</div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">4</div>
						<div class="slot-name">Team 4</div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game game-right" id="game-12">
					<div class="slot slot-top">
						<div class="slot-seed">3</div>
						<div class="slot-name">Team 3</div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">14</div>
						<div class="slot-name">Team 14</div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game game-right" id="game-13">
					<div class="slot slot-top">
						<div class="slot-seed">11</div>
						<div class="slot-name">Team 11</div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">6</div>
						<div class="slot-name">Team 6</div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game game-right" id="game-14">
					<div class="slot slot-top">
						<div class="slot-seed">7</div>
						<div class="slot-name">Team 7</div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">10</div>
						<div class="slot-name">Team 10</div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game game-right" id="game-15">
					<div class="slot slot-top">
						<div class="slot-seed">15</div>
						<div class="slot-name">Team 15</div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed">2</div>
						<div class="slot-name">Team 2</div>
						<div class="slot-score"></div>
					</div>
				</div>
			</div>
			<div class="connectors connectors-8">
				<div class="connector"></div>
				<div class="connector"></div>
				<div class="connector connector-right"></div>
				<div class="connector connector-right"></div>
			</div>
			<div class="round round-8">
				<div class="game" id="game-4">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game" id="game-5">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game game-right" id="game-6">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game game-right" id="game-7">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
			</div>
			<div class="connectors connectors-4">
				<div class="connector"></div>
				<div class="connector connector-right"></div>
			</div>
			<div class="round round-4">
				<div class="game" id="game-2">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
				<div class="game game-right" id="game-3">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
			</div>
			<div class="connectors connectors-2">
				<div class="connector"></div>
			</div>
			<div class="round round-2">
				<div class="game" id="game-1">
					<div class="slot slot-top">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
					<div class="slot slot-bot">
						<div class="slot-seed"></div>
						<div class="slot-name"></div>
						<div class="slot-score"></div>
					</div>
				</div>
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
