<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="project.css"/>
<link href="css/movingboxes.css" media="screen" rel="stylesheet">

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
<div class="header">
  <div class="wrap">
    <?php require("header.html"); ?>
    <div class="sliderbar">
     <?php require("slider.php");?>
    </div>
    <div class="week">
    <?php $week = $_GET['week'];
   echo '<u class="weekText">'.'Week: '.$week.'</u>'?>
    </div>
    <div class="Content">
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
         <div class="search">
          <h1 class="searchHeading">WHAT HAPPENED THIS <br /> WEEK</h1>
          <hr class="blackLine" />
        </div>
      </div>
        <div class="middleContent">
        <div class="materials" name="COMP16212">
         <?php $name = array("COMP10120", "COMP16121","COMP15111"); require_once( 'phpTest2.php'); ?>
      
      </div>
      </div>
           <div class="rightContent">
           <div class="materials">

              </div>
              </div>  
      </div>
    </div>
  </div>
    <div class="footer">
    <hr class="whiteline" />
  </div>

</div>
  


  
</body>
</html>
