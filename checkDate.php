<?php
ini_set('display_errors', 'On');

function motherfuckingDate()
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

function motherfuckingSemester()
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

?>
