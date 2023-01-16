<?php  
// startar sessionen 
session_start();  

// avslutar sessionen om användaren är inloggad  
if (isset($_SESSION["logged_in"])) {  
    unset($_SESSION["logged_in"]);  
}  

// öppnar login.php på nytt
header("Location: index.php");  
?> 