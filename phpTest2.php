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
          
function test($name){
          
 $query = "SELECT * FROM Files";
 $result = mysql_query($query);
 $printMidle = true;
 $stop = false;
 $testing = true;
 
 
 if($result )
 {
    
    $week = $_GET['week'];    
    
     
    $count = count($name) / 2;
    
    foreach($name as $index => $val)
    { 

     /* if($index == 0)
       echo '<div class="middleContent">
             <div class="materials" name="COMP16212">';
      
       if($index = intval(count($name)/2))
        echo '<div class="rightContent">
        <div class="materials" name="COMP16212">' ; */
      
      echo "<h1 class='lectureHeading'>" .$val. "</h1>
            <h2 class='lectureHeadSmall'>Object Orientated Programming II</h2>
            <hr class='blackLine' />";
      
            $query2 = $query . " WHERE course_unit = '$val'";
            $result2 = mysql_query($query2);     
      while($row = mysql_fetch_assoc($result2))
	    {

        if($row['week'] == $week && $row['semester'] == '1')
	      {   
	       
          if($testing == true){
          echo "<div class='lectureNotes'>";
          }
          if($testing == false){ 
          echo  "<div class='lectureNotesGrey'>";
          }  
	        echo  "<div class='lectureMaterial'>";
	        echo  "<div class='icon'></div>
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
          $testing = !($testing);
                 
       }//if
       
                   
	   
   	  }//while
   	  
    }//foreach
    
    
 }//if
 
}

          
        




 ?>
