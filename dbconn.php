<?php
	$dbhost="localhost";
	$dbuser="ljungarssiktge20_sebl";
	$dbpwd="fIQC+@IQ[AhP";
	$dbname="ljungarssiktge20_yp";
	
	$dbconn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

	if($dbconn->connect_error){
		die("Connection failed:<br> ".$dbconn->connect_error);
	}
?>