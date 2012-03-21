<?php
//echo ("<script>alert(".$name.");</script>");
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
 $test = 1;
 
 
 if($result )
 {
    
    $week = $_GET['week'];    
     
    
    foreach($name as $index => $val)
    { 
      if($test == 1)
       echo "test1";
       $test = 2;
       if($test == 2)
        echo"fuck you";
			   
      echo "<h1 class='lectureHeading'>" .$val. "</h1>
            <h2 class='lectureHeadSmall'>Object Orientated Programming  II</h2>
            <hr class='blackLine' />";
            $query2 = $query . " WHERE course_unit = '$val'";
            $result2 = mysql_query($query2);     
      while($row = mysql_fetch_assoc($result2))
	    {

        if($row['week'] == $week && $row['semester'] == '1')
	      {   
	       
         
          echo "<div class='lectureNotes'>    
	              <div class='lectureMaterial'>
	              <div class='icon'></div>
	              <h1 class='lectureName'>";
	        echo  $row['name'];
	        echo "</h1>";
	        echo "<div class='linksDiv'>";
	        echo " <a class='links' href='#'>Open</a>
	               <a class='links'href='#'>Download</a>
                 <a class='links' href=''>Report about error!</a>
                  
                 </div>
                 </div>
                 </div>";
                 
       }//if
       
                   
	   
   	  }//while
   	  
    }//foreach
    
    
 }//if
 


          
        




 ?>
