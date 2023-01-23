<?php
  session_start();
  ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register user</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="background-blur" onclick="location.href='/YP/index.php'">
		<div class="navbar-container">
			<div class="navbar">
				<div class="navbar-left">
					<p>Home</p>
					<p>Create Bracket</p>
					<p>Public Brackets</p>
					<p>About</p>
				</div>
				<div class="navbar-right">
					<button class="btn btn-login" disabled>Sign in</button>
					<button onclick="location.href='/YP/register.php'" class="btn btn-register" disabled>Sign up</button>
					<div class="dark-mode">
						<button id="dark" onclick="toggleDark()" disabled>Dark mode</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	$user="";
	$pass="";
	
	echo '<div class="registerform">';?>
		<button class="back" onclick="location.href='/YP/index.php'">&#8617;</button>
			<?
				echo '<form action="register.php?a=yes" name="newuser" method="post">';
					echo '<h3>Sign up</h3>'; 
					echo '<p>';
						echo '<label for="name">Display name:</label><br />';
						echo '<input type="text" name="name" id="name" size="40" value="" required>';
					echo '</p>';
					echo '<p>';
						echo '<label for="username">Username:</label><br />';
						echo '<input type="text" name="username" id="username" size="40" value="" required>';
					echo '</p>';
					echo '<p>';
						echo '<label for="password">Password:</label><br />';
						echo '<input type="password" name="password" id="password" size="40" value="" required>';
					echo '</p>';
					echo '<p>';
						echo '<label for="password2">Re-enter password:</label><br />';
						echo '<input type="password" name="password2" id="password2" size="40" value="" required>';
					echo '</p>';
					echo '<p>';
						echo '<input type="submit" class="send" name="submit" id="submit" value="Sign up">';
					echo '</p>';
				echo '</form>';
	echo '</div>';
	
	function cleanData($data){
		$data = strip_tags($data, '<b>');
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if(isset($_GET['a']) && $_GET['a']=='yes'){
		
		require "dbconn.php";
		
		if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2'])){
			$errormsg = "You have to fill in all fields!";
			echo "<p class='error'>".$errormsg."</p>";
		} elseif(strcmp($_POST['password'], $_POST['password2']) !==0){
			$errormsg = "Lösenorden matchar inte!";
			echo "<p class='error'>".$errormsg."</p>";
		} else {
			$name = cleanData($_POST['name']);
			$user = cleanData($_POST['username']);
			$pass = cleanData($_POST['password']);
			
			$pwd = password_hash($pass, PASSWORD_ARGON2I);
			
			$sql = "INSERT INTO user(name, uname, pwd) VALUES ('$name','$user','$pwd')";
			
			$dbconn->query($sql);
			
			$dbconn->close();
			
	
			
			header("Location: index.php");
		}
	}
?>
	
	
	
</body>
</html>
