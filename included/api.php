<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";

  $databaseName = "student";
  $tableName = "timetable";
  
  #      data: {coscodeA: cosCode, venuA: venu, frmA: frm, toA: to, apA: ap, typeA: type, dayA: day, useridA: userid},
  
  
  $userid = $_POST['useridA'];
  $type = $_POST['typeA'];
  $day = $_POST['dayA'];
  $type = $_POST['typeA'];
  $coscode = $_POST['coscodeA'];
  $frm = $_POST['frmA'];
  $to = $_POST['toA'];
  $venu = $_POST['venuA'];
  $ap = $_POST['apA'];
$examdate=$_POST['examdateA'];
$examtime=$_POST['examtimeA'];  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
 // include 'file:///C|/xampp/htdocs/test/DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  /* `user_id`  ,
`table_type` ,
`day` ,
`course_code` ,
`from` ,
`to` ,
`venue` ,
`exam_date` ,
`am_pm`  */
  
  
  
  
 if(mysql_query("INSERT INTO timetable VALUES ('$userid', '$type', '$day', '$coscode', '$frm', '$to', '$venu', '$examdate', '$ap', '$examtime')")){        
	echo json_encode("successfull....");
 }
else{
echo json_encode("failed..."); 
}                          

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  

?>