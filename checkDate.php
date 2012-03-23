<?php
ini_set('display_errors', 'On');

function theDate()
{

$current_date = date("Y-m-d");


$resultDate = mysql_query("SELECT * FROM Weeks WHERE end_date >= '$current_date' LIMIT 1");
while($rowDate = mysql_fetch_array($resultDate))
{
  $week = $rowDate['week'];

  
}

return $week;
mysql_free_result($resultDate);
 

}

function theSemester()
{

$current_date = date("Y-m-d");


$resultDate = mysql_query("SELECT * FROM Weeks WHERE end_date >= '$current_date' LIMIT 1");
while($rowDate = mysql_fetch_array($resultDate))
{
  $semester = $rowDate['semester'];

  
}

return $semester;
mysql_free_result($resultDate);
 

}

function getWeek( $week )
{
  $resultDate = mysql_query("SELECT * FROM Weeks WHERE week = '$week'");
  while($rowDate = mysql_fetch_array($resultDate))
  {
    $startDate = $rowDate['start_date'];
    
  }
  
  return $startDate;
}//function sem
  
function getWeek1( $week )
{
  $resultDate = mysql_query("SELECT * FROM Weeks WHERE week = '$week'");
  while($rowDate = mysql_fetch_array($resultDate))
  {
    
    $endDate = $rowDate['end_date'];
  }
  
  return $endDate;
}  

?>
