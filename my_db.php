<?php
$hostname = "localhost";
$username ="root";
$password = "";
$database = "sinfo_sys";
$con = mysqli_connect($hostname,$username,$password,$database)or die("Unable to connect database");
$db = mysqli_select_db($con,$database) or die("Unable to connect database");
if(!$db&& $db)
{
	echo "Not connected";
	}
	else
	{
		//echo "Connected";
	}
?>
