<?php
  echo '<link rel="stylesheet" type="text/css" href="project.css"/><link href="demo/demo.css" media="screen" rel="stylesheet">';
  // Obtain the search variable from the URL
  $parameter = @$_GET['search'] ;
  
  $semester = $_GET['semester'];
  // Use a variable to store the no. of rows of search results.
  $resultLimit = 400;
  // Use the trim function to trim the whitespace from the stored variable
  $searched = trim($parameter);
  // Check for an empty string and display a suitable message on the output
  if ($searched == "")
  {
    echo '<u class="weekText">Enter a course-unit number</p></u>
      </div>
    <div class="Content">
    <div class="wrap">
      <div class="leftContent">
        <div class="search">
          <h1 class="searchHeading">SEARCH</h1>
          <hr class="blackLine" />
        </div>
         <div class="searchDiv">';
        echo '<form action="searchTimeline.php?semester='.$semester.'" method="get">';
        echo '
        <input class="searchBox" type="text" name="search" placeholder="Search"></input>
        <input class="searchButton" type="submit" value=""/>
        
        </form>
        </div>
        <div class="Grey">
         <ul id="quickLinks" class="quickLinks">
      <h1 class="searchHeading">QUICK LINKS</h1>
      <hr class="blackLineLinks" />
<li><a href="http://www.cs.manchester.ac.uk/">School of Computer Science</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP16121/">Object Oriented Programming Java I</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2010/COMP16212/">Object Oriented Programming Java II</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP18112/">Fundamentals of Distributed Systems</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP11212/">Fundamentals of Computation</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP15111/">Fundamentals of Computer Architecure</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2010/COMP14112/">Fundamentals of Artificial Intelligence</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP12111/">Fundamentals of Computer Engineering</a></li>
<li><a href="https://moodle.cs.man.ac.uk/login/index.php">Moodle Page for Course-Info</a></li>
<li><a href="https://moodle.cs.man.ac.uk/login/index.php">Mathematical Techniques for Computer Science</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/timetable/">Group-Wise Time-tables</a></li>
</ul>
        </div>
      </div>';
    exit;
  }// if
  
  // Establish a connection to the database
  // Mention the database which is to be selected.
  mysql_connect("ramen.cs.man.ac.uk" , "11_COMP10120_Y10" , "4VB0MQdFK4F7jUaR");
  mysql_select_db("11_COMP10120_Y10");
  // Check for the search parameter
  if (!isset($parameter))
  {
    echo "<p> Could not find the required search parameter </p>";
    exit;
  }// if

  // Make a SQL Query
  // Return the results that are obtained from the SQL Query
  $query = "SELECT * FROM Files where course_unit like \"%$searched%\"
  order by course_unit ";  
  
  $numberOfResult=mysql_query($query);
  $numberRows=mysql_num_rows($numberOfResult);

  // If the search process used above does not return any results , we use google
  // as an alternative
  if ($numberRows == 0)
  {
   

    echo '<u class="weekText">'.'<p> Sorry , your search returned: &quot;' . $searched . '&quot; 
           returned no results </p></u>
      
    </div>
    <div class="Content">
    <div class="wrap">
      <div class="leftContent">
        <div class="search">
          <h1 class="searchHeading">SEARCH</h1>
          <hr class="blackLine" />
        </div>
        <div class="searchDiv">';
        echo '<form action="searchTimeline.php?semester='.$semester.'" method="get">';
        echo '
        <input class="searchBox" type="text" name="search" placeholder="Search"></input>
        <input class="searchButton" type="submit" value=""/>
        
        </form>
        </div>
        <div class="Grey">
         <ul id="quickLinks" class="quickLinks">
      <h1 class="searchHeading">QUICK LINKS</h1>
      <hr class="blackLineLinks" />
<li><a href="http://www.cs.manchester.ac.uk/">School of Computer Science</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP16121/">Object Oriented Programming Java I</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2010/COMP16212/">Object Oriented Programming Java II</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP18112/">Fundamentals of Distributed Systems</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP11212/">Fundamentals of Computation</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP15111/">Fundamentals of Computer Architecure</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2010/COMP14112/">Fundamentals of Artificial Intelligence</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP12111/">Fundamentals of Computer Engineering</a></li>
<li><a href="https://moodle.cs.man.ac.uk/login/index.php">Moodle Page for Course-Info</a></li>
<li><a href="https://moodle.cs.man.ac.uk/login/index.php">Mathematical Techniques for Computer Science</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/timetable/">Group-Wise Time-tables</a></li>
</ul>
        </div>
      </div>';
  }// if
  else 
    echo '<u class="weekText">'.'<p> Searched for: &quot;' . $searched . '&quot; </p></u>
      
    </div>
    <div class="Content">
    <div class="wrap">
      <div class="leftContent">
        <div class="search">
          <h1 class="searchHeading">SEARCH</h1>
          <hr class="blackLine" />
        </div>
        <div class="searchDiv">';
        echo '<form action="searchTimeline.php?semester='.$semester.'" method="get">';
        echo '
        <input class="searchBox" type="text" name="search" placeholder="Search"></input>
        <input class="searchButton" type="submit" value=""/>
        
        </form>
        </div>
        <div class="Grey">
          <ul id="quickLinks" class="quickLinks">
      <h2 class="searchHeading">QUICK LINKS</h2>
      <hr class="blackLineLinks" />
<li><a href="http://www.cs.manchester.ac.uk/">School of Computer Science</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP16121/">Object Oriented Programming Java I</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2010/COMP16212/">Object Oriented Programming Java II</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP18112/">Fundamentals of Distributed Systems</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP11212/">Fundamentals of Computation</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP15111/">Fundamentals of Computer Architecure</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2010/COMP14112/">Fundamentals of Artificial Intelligence</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/2011/COMP12111/">Fundamentals of Computer Engineering</a></li>
<li><a href="https://moodle.cs.man.ac.uk/login/index.php">Moodle Page for Course-Info</a></li>
<li><a href="https://moodle.cs.man.ac.uk/login/index.php">Mathematical Techniques for Computer Science</a></li>
<li><a href="Main-Page-Link">Home-Page</a></li>
<li><a href="http://www.cs.manchester.ac.uk/ugt/timetable/">Group-Wise Time-tables</a></li>
</ul>
        </div>
      </div>';

  
  // Now , we determine whether a search has been passed to the script, if not 
  // we return  0 or null for it.
  if (empty($search))
  {
    $search=0;
  }// if

 

  $count = 1 + $search ;
  // Now obtain the results from the query.
  $query .= " limit $search,$resultLimit";
  $result = mysql_query($query) or die("Couldn't execute query");
  $testing = true;
  $printMidle = true;
  // Now display the results returned
  echo '<div class="materials">';



  while ($row= mysql_fetch_array($result)) 
  {

    
    if($count <= intval($numberRows/2) && $printMidle)
    {

      echo '<div class="middleContent">
            <div class="materials" name="COMP16212">
         ';
      $printMidle = false;
    }//if
    
    if($count == intval($numberRows/2)+1 && !$printMidle)
    {

     echo '</div>
      </div>
           <div class="rightContent">
           <div class="materials"> ';
     $printMidle = true;

    }//if

    $title = $row["course_unit"]."</br>".$row['name'];
    if ($row['week'] == 0 && $row['semester'] == 0)
    {
      if($testing){
              echo "<div class='lectureNotes'>
                      <div class='lectureMaterial'>
                      <div class='icon'></div>
	              <h1 class='lectureName'>".
      	              $title.
	              "</h1>  <br /> <br /> <br/>
	               <div class='linksDiv'>
	               <a class='links' href='http://soba.cs.man.ac.uk/".$row['path']."'>Open</a>
	               
                 <a class='links' href='contact.php#error'>Report about error!</a>
                  
                 </div>
                 </div>
                 </div>
                 ";
          }
          if(!$testing){ 
               echo "<div class='lectureNotesGrey'>
                       <div class='lectureMaterial'>
	               <div class='icon'></div>
	              <h1 class='lectureName'>".
	              $title.
	              "</h1>  <br />
                       <div class='linksDiv'>
      	               <a class='links' href='http://soba.cs.man.ac.uk/".$row['path']."'>Open</a>
	               
                 <a class='links' href='contact.php#error'>Report about error!</a>
                  
                 </div>
                 </div>
                 </div>
                 ";
          }    
    }
    else
    {
    if($testing){
              echo "<div class='lectureNotes'>
                      <div class='lectureMaterial'>
                      <div class='icon'></div>
	              <h1 class='lectureName'>".
      	              $title.
	              "</h1> </br> Week : ".$row['week']." Semester : ".$row['semester']." <br />
	               <div class='linksDiv'>
	               <a class='links' href='http://soba.cs.man.ac.uk/".$row['path']."'>Open</a>
	               
                 <a class='links' href='contact.php#error'>Report about error!</a>
                  
                 </div>
                 </div>
                 </div>
                 ";
          }
          if(!$testing){ 
               echo "<div class='lectureNotesGrey'>
                       <div class='lectureMaterial'>
	               <div class='icon'></div>
	              <h1 class='lectureName'>".
	              $title.
	              "</h1> </br> Week : ".$row['week']." Semester : ".$row['semester']." <br />
                       <div class='linksDiv'>
      	               <a class='links' href='http://soba.cs.man.ac.uk/".$row['path']."'>Open</a>
	               
                <a class='links' href='contact.php#error'>Report about error!</a>
                  
                 </div>
                 </div>
                 </div>
                 ";
          }     
	}        
          $testing = !($testing);
    $count++ ;

  }// while
  
  // Use a variable to store the current page and then update it accordingly
  $currentPage = (($search/$resultLimit) + 1);
  
  // Use a break to split the results before paging
  echo "<br/>";

  // Calculate the number  of pages which need a link for them
  $pages=intval($numberRows/$resultLimit);
  
  // The variable "pages" now contains the no of pages which are needed unless
  // there is a remainder from division.
  //Increment the remainder to add one more page.
  if ($numberRows%$resultLimit) 
    $pages++;
  // Now perform the check to see whether we have reached the last page
 
  $x = $search + ($resultLimit) ;
  if ($x > $numberRows) 
    $x = $numberRows ; 
  $y = $search + 1 ;
  if ($search == 0)
  {
    echo "";
              }
              
  else
  {
    echo "<p>Showing results of the search from $y to $x of $numberRows</p></div>
              </div> ";
   }
 

 
?>
  
  

  
  


   
  

  
  

  
  
