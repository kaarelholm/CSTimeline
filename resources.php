<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="images/favicon.gif"/>
<link rel="stylesheet" type="text/css" href="project.css"/>
<link href="css/movingboxes.css" media="screen" rel="stylesheet">

<?php
$dbLink = mysql_connect("ramen.cs.man.ac.uk", "11_COMP10120_Y10", 			 
 		  "4VB0MQdFK4F7jUaR")
		  or die('Could not connect: ' . mysql_error());
		  mysql_select_db("11_COMP10120_Y10", $dbLink)
          or die('Could not select database');
?>

<!-- Required script -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
	<script src="js/jquery.movingboxes.js"></script>
	
<!-- Demo only -->
	<link href="demo/demo.css" media="screen" rel="stylesheet">
	<style>
		/* Dimensions set via css in MovingBoxes version 2.2.2+ */
		#slider { width: 895px; }
		#slider li { width: 333px; }
	</style>
	<script>
	$(function(){

		$('#slider').movingBoxes({
			/* width and panelWidth options deprecated, but still work to keep the plugin backwards compatible
			width: 500,
			panelWidth: 0.5,
			*/
			startPanel   : 1,      // start with this panel
			wrap         : false,   // if true, the panel will "wrap" (it really rewinds/fast forwards) at the ends
			buildNav     : true,   // if true, navigation links will be added
			navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel
		});

	});
	</script>
<title>CS Timeline </title>
</head>

<body>
<div>
<body>
<div class="header">
<div class="headerContainer">
<?php require("header.php"); ?>
</div>
    <div class="sliderbar">
     <?php require("resourcesSlider.php");?>
    </div>
    </div>
    <div class="week">
    <?php $resource = $_GET['resource'];
    if ($resource == null)
    {
      $resource = 'assignment';
    }//if
   if($resource == 'assignment')
   {
     echo "<u class='weekText'>Assignments</u>";
   }//if
   if($resource == 'lab')
   {
     echo "<u class='weekText'>Labs</u>";
   }//if
   if($resource == 'examples_class')
   {
     echo "<u class='weekText'>Examples Classes</u>";
   }//if
   if($resource == 'notes')
   {
     echo "<u class='weekText'>Notes</u>";
   }//if
   if($resource == 'revision')
   {
     echo "<u class='weekText'>Revision</u>";
   }//if
   if($resource == 'past_paper')
   {
     echo "<u class='weekText'>Past Papers</u>";
   }//if
   if($resource == 'workshop')
   {
     echo "<u class='weekText'>Workshops</u>";
   }//if
   if($resource == 'miscellaneous')
   {
     echo "<u class='weekText'>Miscellaneous</u>";
   }//if
    ?>
    </div>
    <div class="Content">
    <div class="wrap">
      <div class="leftContent">
        <div class="search">
          <h1 class="searchHeading">SEARCH</h1>
          <hr class="blackLine" />
        </div>
        <div class="searchDiv">
         <?php echo '<form action="searchTimeline.php?semester='.$semester.'" method="get">'; ?>
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
      </div>
        <div class="middleContent">
        <div class="materials" name="COMP16212">
        <?php require ( 'getResources.php'); ?>
         <?php $name = array("COMP10120", "COMP16121", "COMP16212"); test ( $name, $resource ); ?>
      
      </div>
      </div>
           <div class="rightContent">
           <div class="materials">
           <?php $name = array("COMP15111", "COMP12111","COMP11120"); test ( $name, $resource ); ?>
              </div>
              </div>  
      </div>
    </div>

  
    <div class="footer">
    <hr class="whiteline" />
    
  </div>

</div>
<?php mysql_close($dbLink); ?>
  



</body>
</html>
