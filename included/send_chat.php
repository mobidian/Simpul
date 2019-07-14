<?php 

$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="";
	// Retrieve data from Query String
$phoneN = $_GET['phoneN'];
$txt = $_GET['txt'];
$sc = $_GET['sc'];


mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname) or die(mysql_error());
$query = "SELECT * FROM user_profile WHERE ID = '$sc'";
$qry_result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($qry_result)){
	
	$receiverphone=$row[phone];
	$receivername=$row[username];
}





mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname) or die(mysql_error());
$query = "SELECT * FROM user_profile WHERE phone = '$phoneN'";
$qry_result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($qry_result)){
	
	$senderphone=$row[phone];
	$sendername=$row[username];
}






mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname) or die(mysql_error());
$query = "SELECT * FROM user_profile WHERE ID = '$sc'";
$qry_result = mysql_query($query) or die(mysql_error());


Mysql_query("insert into chat_table set sender_username ='$sendername', sender_phone='$senderphone', reciever_username='$receivername',reciever_phone='$receiverphone', chat_msg='$txt'") or die(mysql_error());

	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String


// Insert a new row in the table for each person returned
//"$row[status_msg]= $str";
	
//echo "knklkjnkll";
  

?>