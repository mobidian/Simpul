<?php
global $total_record;
?>
<?php

session_start();
$_session['N_hr']=0;
$type = $_GET['type'];
if ($type=="show_header_profile"){
	show_header_profile();
}
elseif($type=="show_header_profile_home"){
	show_header_profile_home();
}
elseif($type=="show_profile"){
	show_profile();
}
elseif($type=="show_my_profile"){
	show_my_profile();
}
elseif($type=="show_img"){
	show_img();
}
elseif($type=="logout"){
	logout();
}
elseif($type=="update_status"){
	update_status();
}
elseif($type=="timer"){
	timer();
}
elseif($type=="contact"){
	contact();
}
elseif($type=="showc"){
	showc();
}

function show_header_profile_home(){
$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="";
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data fromT Query String
$phoneN = $_GET['phoneN'];

	// Escape User Input to help prevent SQL Injection
$phoneR = mysql_real_escape_string($phoneR);

	//build query
$query = "SELECT * FROM user_profile WHERE phone = '$phoneN'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String


// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){

	$dis ="<table border=0 width='100%' align='center'><tr><td width='11%' rowspan='2' id='pic'><a onClick='big_img($row[phone])' href='#big_img'><img src='$row[img_url]' style='height:60px; width:64px;'/></a></td><td width='68%' id='$row[phone]' valign='middle' onClick='show()'><div style=' vertical-align:middle;'>$row[username]</div></td><td width='5%' rowspan='2' id='online_status'>&nbsp; </td><td width='16%' rowspan='2'><a href='#page1'><img src='images/home.png' width='30px' height='30px'/></a></td></tr><tr><td valign='top' height='14' id='status_msg'><div style='font-size:10px; font-weight:normal;'>$row[status_msg]</div></td></tr></table>";
	
}

//echo $display_string;
echo $dis;
}



function contact(){
$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="<br />
<br />
<br />

";
$phoneR = $_GET['phoneR'];
	//Connect to MySQL Server
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data fromT Query String
	//build query
$query = "SELECT * FROM user_profile WHERE phone != '$phoneR'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

$k=0;

// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
	$k++;
	if ("$row[phone]"==""){
	exit;
		
	}
	else{
$dis .= '<div class="txt" onclick="'."f".$row[ID]. "();" .'" style="border:solid 1px #999999; margin-top:3px; cursor:pointer; color:#fff; background:#036" id="'.$row[ID].'">
<table width="100%" border="0">
  <tr>
    <td width="12%"><img src="'.$row[img_url].'" style="height:50px; width:70px"/></td>
    <td width="88%">'.$row[name].'</td>
  </tr>

</table>
</div>';
	
	}
}

//echo $dis;
echo $dis;
	
}





function show_header_profile(){
$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="";
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data fromT Query String
$sc = $_GET['sc'];

	// Escape User Input to help prevent SQL Injection
$phoneR = mysql_real_escape_string($phoneR);

	//build query
$query = "SELECT * FROM user_profile WHERE ID = '$sc'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String


// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){

	$dis ="<table border=0 width='100%' align='center'><tr><td width='11%' rowspan='2' id='pic'><a onClick='big_img($row[phone])' href='#big_img'><img src='$row[img_url]' style='height:60px; width:64px;'/></a></td><td width='68%' id='$row[phone]' valign='middle' onClick='show()'><div style=' vertical-align:middle;'>$row[username]</div></td><td width='5%' rowspan='2' id='online_status'>&nbsp; </td><td width='16%' rowspan='2'><a href='#page1'><img src='images/home.png' width='30px' height='30px'/></a></td></tr><tr><td valign='top' height='14' id='status_msg'><div style='font-size:11px; font-weight:normal;'>$row[status_msg]</div></td></tr></table>";
	
}

//echo $display_string;
echo $dis;
}






function show_profile(){
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
$sc = $_GET['sc'];

	// Escape User Input to help prevent SQL Injection
$phoneR = mysql_real_escape_string($phoneR);

	//build query
$query = "SELECT * FROM user_profile WHERE ID = '$sc'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String


// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){

	$dis ="<table border=0 width='100%' align='center'><tr><td><a onClick='big_img($row[phone])' href='#big_img'><img src='$row[img_url]' width='50px' height='50px'/></a></td><td id='usname'>$row[username]</td><td>$row[online_status]</td><td>&nbsp;</td><td><a href='#chat'><img src='images/back.png' width='40px' height='30px'/></a></td></tr><tr><td>Fullname:</td><td colspan='4'>$row[name]</td></tr> <tr><td>Username:</td><td colspan='4'>$row[username]</td></tr> <tr><td>Status Message:</td><td colspan='4'>$row[status_msg]</td></tr> <tr><td>--</td><td colspan='4'>--</td></tr><tr><td>--</td><td colspan='4'>--</td></tr><tr><td>Sex:</td><td colspan='4'>$row[sex]</td></tr> <tr><td>School:</td><td colspan='4'>$row[school]</td></tr> <tr><td>Department:</td><td colspan='4'>$row[department]</td></tr> <tr><td>Level:</td><td colspan='4'>$row[level]</td></tr> <tr><td>Phone Number:</td><td colspan='4'>$row[phone]</td></tr>";
	
}

//echo $display_string;
$dis .="</table>";
echo $dis;
}



function show_my_profile(){
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

	$dis ="<table border=0 width='100%' align='center'><tr><td><a onClick='big_img($row[phone])' href='#big_img'><img src='$row[img_url]' width='50px' height='50px'/></a></td><td id='my_usname'>$row[username]</td><td>$row[online_status]</td><td id='call' onClick='call($row[phone])'><img src='images/call.png' width='30px' height='30px'/></td><td><a href='#chat'><img src='images/back.png' width='40px' height='30px'/></a></td></tr><tr><td>Fullname:</td><td colspan='4'>$row[name]</td></tr> <tr><td>Fullname:</td><td colspan='4'>$row[name]</td></tr> <tr><td>Status Message:</td><td colspan='4'>$row[status_msg]</td></tr> <tr><td>Location:</td><td colspan='4'>$row[location]</td></tr><tr><td>Distance:</td><td colspan='4'>$row[distance]</td></tr><tr><td>Sex:</td><td colspan='4'>$row[sex]</td></tr> <tr><td>School:</td><td colspan='4'>$row[school]</td></tr> <tr><td>Department:</td><td colspan='4'>$row[department]</td></tr> <tr><td>Level:</td><td colspan='4'>$row[level]</td></tr> <tr><td>Phone Number:</td><td colspan='4'>$row[phone]</td></tr>";
	
}

//echo $display_string;
$dis .="</table>";
echo $dis;
}


function update_status(){
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
$str = $_GET['str'];
	// Escape User Input to help prevent SQL Injection
$phoneR = mysql_real_escape_string($phoneR);

	//build query
//$query = "SELECT * FROM user_profile WHERE phone = '$phoneR'";

$query = "UPDATE user_profile SET status_msg = '$str'
WHERE phone = '$phoneR'";

	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String


// Insert a new row in the table for each person returned
//"$row[status_msg]= $str";
	
//echo "knklkjnkll";
}





/*
function show_header_profile(){
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "student";
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

	$dis ="<div><img src='$row[img_url]' width='100%' height='100%'/></div>";
	
}

//echo $display_string;
echo $dis;
} 
*/
function load_chat(){
$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="";
$colo="none";
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String
$sender_phones = $_GET['sender_phone'];
//$sex = $_GET['sex'];
$reciever_phone = $_GET['reciever_phone'];
	// Escape User Input to help prevent SQL Injection
$sender_phones = mysql_real_escape_string($sender_phones);
//$sex = mysql_real_escape_string($sex);
$reciever_phone = mysql_real_escape_string($reciever_phone);
	//build query
$query = "SELECT * FROM chat_table WHERE (reciever_phone = '$reciever_phone' OR reciever_phone= '$sender_phones') AND (sender_phone = '$sender_phones' OR sender_phone= '$reciever_phone') ";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());



// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
	if ($reciever_phone == "$row[sender_phone]"){
	$colo="#00FFFF";	
		
	}
$dis .= "<div style='hieght: 20px; background:" .  $colo . "'>$row[chat_msg]" ."               ". "$row[time]". "</div><br>";
	$colo="none";
}

//echo $dis;
echo $dis;
}

function logout(){
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
$str = $_GET['str'];
	// Escape User Input to help prevent SQL Injection
$phoneR = mysql_real_escape_string($phoneR);

	//build query
//$query = "SELECT * FROM user_profile WHERE phone = '$phoneR'";

$query = "UPDATE user_profile SET online_status = 'offline'
WHERE phone = '$phoneR'";

	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String


// Insert a new row in the table for each person returned
//"$row[status_msg]= $str";
	
//echo "knklkjnkll";
}

function timer(){
$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="no";
$day="";
$code="none";

	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String
$phoneR = $_GET['phoneR'];
$day = strtolower(date('l'));
$hr = date('h')-1;
	// Escape User Input to help prevent SQL Injection
$phoneR = mysql_real_escape_string($phoneR);

	//build query
$query = "SELECT * FROM timetable WHERE user_id = '$phoneR' AND day = '$day' AND checkT=''";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String


// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){

if ("$row[fromT]" == $hr) {
	$dis="yes";
	$code="$row[course_code]" . "<br>" . $day . " <br> "  . $hr;

	update_from();
}
	
}

//echo $display_string;
echo $dis;
echo " <br> "  . $code;
}

function update_from(){
$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="no";
$day="";
$code="none";
$phoneR = $_GET['phoneR'];
$day = strtolower(date('l'));
$hr = date('h')-1;

	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());

$query = "UPDATE timetable SET checkT = 'checked'
WHERE user_id='$phoneR' AND day='$day' AND fromT='$hr' AND checkT=''";
//$total_record
	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

last_update();
}


function last_update(){

$dbhost = "localhost";
$dbuser = "scorpioe_local";
$dbpass = "scorpio123";
$dbname = "scorpioe_student";
$dis="no";
$code="none";
$phoneR = $_GET['phoneR'];
$day = strtolower(date('l'));
$hr = date('h')-1;
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
$query = "SELECT * FROM timetable WHERE user_id = '$phoneR' AND day='$day'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String

$count=0;
// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
$c+=1;
$num[$c]="$row[fromT]";
$count+=1;
echo $num[$c];
}



//checking if all alarm has alarmed !!!

	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
$query = "SELECT * FROM timetable WHERE user_id = '$phoneR' AND day='$day' AND checkT='checked'";


	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String

$count1=0;
// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
$count1+=1;

}

/////////endof checking if all alarm has alarmed !!!

if ($count==$count1){
	echo "reolaced all";
	//clear_check
		//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());

$query = "UPDATE timetable SET checkT = ''
WHERE user_id='$phoneR' AND day='$day' AND checkT='checked'";
//$total_record
	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());
	
}

}

?>
