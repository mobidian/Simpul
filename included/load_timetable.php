<?php

$typee = $_GET['type'];
if ($typee=="Lecture"){
	load_lecture_reading();
}
elseif($typee=="Reading"){
	load_lecture_reading();
}
elseif($typee=="Exam"){
	load_exam();
}

function load_lecture_reading(){
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "student";
$dis ="";
$day[0]="monday";
$day[1]="tuesday";
$day[2]="wednesday";
$day[3]="thursday";
$day[4]="friday";
$chk="";
$free="";
$typee = $_GET['type'];
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String
$phone = $_GET['phone'];

$phone = mysql_real_escape_string($phone);
// Insert a new row in the table for each person returned
$dis .="<table border='0' width='100%' align='center'>";

for($i=0;$i<=4;$i++){
$dis.="<tr><td colspan='5'><h2>".$day[$i]."</h2></td></tr><tr><td colspan='5'></td></tr><tr><td><h4> Course Code</h4> </td><td> <h4>Venue</h4> </td><td> <h4>From </h4></td><td><h4> To </h4></td><td> <h4>AM/PM</h4> </td></tr>";	
	//build query
$query = "SELECT * FROM timetable WHERE (user_id = '$phone') AND (day = '$day[$i]') AND (table_type = '$typee')";

	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String

while($row = mysql_fetch_array($qry_result)){
$chk.= "$row[course_code]";
 $free.="<tr><td> $row[course_code] </td><td> $row[venue] </td><td> $row[fromT] </td><td> $row[to] </td><td> $row[am_pm] </td></tr>";

	
}
if ($chk==""){
$free="Free Lecture Day..."	;
	
}
$dis .=$free . "<br>";
$free="";
$chk="";
}
$dis.="</table>";
echo $dis;
}





function load_exam(){
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "student";
$dis ="";
$day[0]="monday";
$day[1]="tuesday";
$day[2]="wednesday";
$day[3]="thursday";
$day[4]="friday";
$chk="";
$free="";
$i=0;
$typee = $_GET['type'];
	//Connect to MySQL Server
mysql_connect($dbhost, $dbuser, $dbpass);
	//Select Database
mysql_select_db($dbname) or die(mysql_error());
	// Retrieve data from Query String
$phone = $_GET['phone'];

$phone = mysql_real_escape_string($phone);
// Insert a new row in the table for each person returned
$dis .="<table border='0' width='100%' align='center'>";


	
	//build query
$query = "SELECT * FROM timetable WHERE (user_id = '$phone') AND (table_type = '$typee')";

	//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

	//Build Result String

while($row = mysql_fetch_array($qry_result)){
	$i += 1;
$chk.= "$row[course_code]";
 $dis.="<tr><td colspan='4'><h2> Day ".$i."</h2></td></tr><tr><td><h4> Course Code</h4> </td><td> <h4>Venue</h4> </td><td> <h4>Exam Date </h4></td><td><h4> Exam Time </h4></td></tr><tr><td> $row[course_code] </td><td> $row[venue] </td><td> $row[exam_date] </td><td> $row[exam_time] </td></tr><br>";

	
}
if ($chk==""){
$dis="Exam Timetable not set <a href='#page4'> Click Here </a> to set Exam timetable";

}

$free="";
$chk="";

$dis.="</table>";
echo $dis;
}



?>
