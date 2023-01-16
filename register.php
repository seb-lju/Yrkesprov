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
	
	<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
	
<?php
	 $user="";
	 $pass="";
	
	echo '<form action="register.php?a=yes" name="newuser" method="post">';
			echo '<h3>Sign up</h3>';
				echo '<p>';
					echo '<label for="username">Name:</label><br />';
					echo '<input type="text" name="name" id="name" size="40" value="" required>';
				echo '</p>';
				echo '<p>';
					echo '<label for="username">Username:</label><br />';
					echo '<input type="text" name="username" id="username" size="40" value="" required>';
				echo '</p>';
				echo '<p>';
					echo '<label for="username">Password:</label><br />';
					echo '<input type="text" name="password" id="password" size="40" value="" required>';
				echo '</p>';
				echo '<p>';
					echo '<label for="username">Re-enter password:</label><br />';
					echo '<input type="text" name="password2" id="password2" size="40" value="" required>';
				echo '</p>';
				echo '<p>';
					echo '<input type="submit" name="submit" id="submit" value="Sign up">';
				echo '</p>';
	echo '</form>';
	
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
			
			$sql = "INSERT INTO user(name, uname, pwd) VALUES ('$name',$user','$pwd')";
			
			$dbconn->query($sql);
			
			$dbconn->close();
			
			header("Location: index.php");
		}
	}
?>
	
	
	
</body>
</html>