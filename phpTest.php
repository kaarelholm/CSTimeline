<?php

function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}


 $dbLink = mysql_connect("ramen.cs.man.ac.uk", "11_COMP10120_Y10", 			 
 		  "4VB0MQdFK4F7jUaR")
		  or die('Could not connect: ' . mysql_error());
		  mysql_select_db("11_COMP10120_Y10", $dbLink)
          or die('Could not select database');
          
          
 $query = "SELECT * FROM Files";
 $result = mysql_query($query);
 
 
 if(result)
 {
  
    while($row = mysql_fetch_assoc($result))
	{
	 
      if($row['week'] == 1 && $row['course unit'] == 'COMP10120'
         && $row['semester'] == 'Semester1')
	    {   
	       echo "<div class='lectureMaterial'>";
	       echo "<div class='icon'></div>";
	       echo "<h1 class='lectureName'>";
	       echo  $row['name'];
	       echo "</h1>";
	       echo "<div class='linksDiv'>";
	       echo " <a class='links' href='#'>Open</a>
	        <a class='links'href='#'>Download</a>
                  <a class='links' href=''>Report about error!</a>
                  </div>
                  </div>
                  ";
                  
      }            
	   
   	}

   
   
   
 
 
 }//if
 else
 { echo "Selection failed";}
          
        




 ?>
