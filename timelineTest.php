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
<?php include 'checkDate.php' ?>
<?php 

 $semester = $_GET['semester'];
 
 $week = $_GET['week'];
if ($week == null && $semester == null)
{
$week = motherfuckingDate(); 
$semester = motherFuckingSemester();
header("Location:timelineTest.php?week=".$week."&slider1=".$week."&semester=".$semester."#&slider1=".$week);
} ?>
<body>
<div class="header">
<div class="headerContainer">
<?php require("header.html"); ?>
</div>
    <div class="sliderbar">
     <?php require("slider.php");?>
    </div>
    </div>
    <div class="week">
   <?php
   echo '<u class="weekText">'.'Week: '.$week.'</u>'?>
    </div>
    <div class="Content">
    <div class="wrap">
      <div class="leftContent">
        <div class="search">
          <h1 class="searchHeading">SEARCH & QUICK LINKS</h1>
          <hr class="blackLine" />
        </div>
        <div class="searchDiv">
        <form>
        <input class="searchBox" type="text" name="search" placeholder="Search"></input>
        <input class="searchButton" type="submit" value=""/>
        </form>
        </div>
        <div class="Grey">
        <ul class="quickLinks">
        <li>Test</li>
        <li>Test</li>
        <li>Test</li>
        <li>Test</li>
        <li>Test</li>
        </ul>
        </div>
      </div>
        <div class="middleContent">
        <div class="materials" name="COMP16212">
        <?php require ( 'phpTest2.php'); 
	
          if ($semester == 1)
		  {
		     $name = array("COMP10120", "COMP16121"); test ( $name, $week, $semester );
		  }//if
		else
		  {
		    if($semester == 2)
		    {$name = array("COMP11212", "COMP14112", "COMP18112"); test (  $name, $week, $semester ); }
		  } ?>
		  
      
      </div>
      </div>
           <div class="rightContent">
           <div class="materials">
           <?php if ($semester == 1)
		  {
		     $name = array("COMP15111", "COMP12111","COMP11120"); test ( $name, $week, $semester ); 
		  }
		else
		  {if($semester == 2)
		    {$name = array("COMP10120", "COMP11120", "COMP16212"); test (  $name, $week, $semester ); }//if
		  }
?>
              </div>
              </div>  
      </div>
    </div>
   <div class="footer">
      <div class="footerMaterial">
          <p> just testing the footer</p>
      </div>
      </div>
    </div>
    </div>
<?php mysql_close($dbLink); ?>


  
</body>
</html>
