<?php
session_start();
$_SESSION['ho']="12";
?>

<?php
$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="";
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String
$password = $_GET['password'];
//$sex = $_GET['sex'];
$username = $_GET['username'];
	// Escape User Input to help prevent SQL Injection
$password = mysql_real_escape_string($password);
//$sex = mysql_real_escape_string($sex);
$username = mysql_real_escape_string($username);
	//build query
$query = "SELECT * FROM user_profile WHERE password = '$password' AND username= '$username'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String
$dis .="<table>";


// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){

	$dis .="<tr><td id='phonenum'>$row[phone]</td><td id='status'>$row[online_status]</td></tr>";
	
}
//echo "Query: " . $query . "<br />";
$dis .= "</table>";
//echo $display_string;

//changing online_status to online


$query = "UPDATE user_profile SET online_status = 'online'
WHERE password = '$password' AND username= '$username'";

	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());


///////////////////////////////////

echo $dis;
?>
