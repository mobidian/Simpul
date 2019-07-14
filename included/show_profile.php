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
$phoneR = $_GET['phoneR'];

	// Escape User Input to help prevent SQL Injection
$phoneR = mysql_real_escape_string($phoneR);

	//build query
$query = "SELECT * FROM user_profile WHERE phone = '$phoneR'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String


// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){

	$dis ="<table border=6 width='100%' align='center'><tr><td rowspan='2' id='pic'><img src='$row[img_url]' width='50px' height='50px'/></td><td onClick='show()' id='$row[phone]'>$row[username]</td><td rowspan='2' id='online_status'><i>$row[online_status]</i></td><td rowspan='2' id='distance'>$row[distance]</td><td rowspan='2' id='call' onClick='call($row[phone])'><img src='images/good.png' width='30px' height='30px'/></td></tr><tr><td id='status_msg'>$row[status_msg]</td></tr></table>";
	
}

//echo $display_string;
echo $dis;


?>
