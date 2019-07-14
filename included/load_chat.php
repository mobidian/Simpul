<?php
$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="<br />
<br />
<br />

";
$colo="none";

	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String
$sc = $_GET['sc'];
$senderphone = $_GET['phoneN'];
$query = "SELECT * FROM user_profile WHERE ID = '$sc'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());



// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
	
	$receiverphone=$row[phone];
}






















	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String


$query = "SELECT * FROM chat_table WHERE (reciever_phone = '$receiverphone' OR reciever_phone= '$senderphone') AND (sender_phone = '$senderphone' OR sender_phone= '$receiverphone') ";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());



// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
	if ($receiverphone == "$row[sender_phone]"){
	$colo="#00FFFF";	
		
	}
$dis .= "<div style='hieght: 20px; background:" .  $colo . "'>$row[chat_msg]" ."               ". "$row[time]". "</div><br>";
	$colo="none";
}

//echo $dis;
echo $dis;
?>
