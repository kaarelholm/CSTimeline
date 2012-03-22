<?php
//echo ("<script>alert(".$name.");</script>");
function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}


function test($name, $resource){
         
 $query = "SELECT * FROM Files";
 $result = mysql_query($query);
 $printMidle = true;
 $stop = false;
 
 
 if($result )
 {
    /*if ($_GET['week'] != null)
    {
    $week = $_GET['week'];    
    }*/
     
    $count = count($name) / 2;
    
    foreach($name as $index => $val)
    { 

     /* if($index == 0)
       echo '<div class="middleContent">
             <div class="materials" name="COMP16212">';
      
       if($index = intval(count($name)/2))
        echo '<div class="rightContent">
        <div class="materials" name="COMP16212">' ; */

      /* DEFINING VARIABLES FOR THE COURSE NAME SELECT */

      $course_unit = mysql_query("SELECT * FROM Courses WHERE course_unit = '$val'");
      $row2 = mysql_fetch_assoc($course_unit);

      /* END OF VARIABLE DEFINITIONS */

      /* USE $row2['course_description'] TO OUTPUT RIGHT COURSE */
      echo "<h1 class='lectureHeading'>" .$val. "</h1>
            <h2 class='lectureHeadSmall'>" .$row2['course_description']. "</h2>
            <hr class='blackLine' />";
            $query2 = $query . " WHERE course_unit = '$val'";
            $result2 = mysql_query($query2); 
            $print = true;    
      while($row = mysql_fetch_assoc($result2))
	    {

        if($row['type'] == $resource)
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
                 </div>
                 ";
 	        $print = false;
                 
       }//if
	//else
	//{
	       
         
	//}
       
                   
	   
   	  }//while
   	  if($print)
         {
          echo "<div class='lectureNotes'>    
	              <div class='lectureMaterial'>
	              
	              <h1 class='lectureName'>";
	        echo  "<h1 class='lectureHeading'>There are no materials available for this course.</h1>";
	        echo "</h1>";
	        
                 echo "</div>
                 </div>
                 ";
		$print = false;		
		}//if
    }//foreach
    
    
 }//if
 


}   
        




 ?>
