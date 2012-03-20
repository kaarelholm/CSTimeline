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
    <?php require("slider.html");?>
   </div>
   <div class="emptySpace">
   </div>
   <div class="Content">
   <div class="leftContent">
        <div class="search">
          <h1 class="searchHeading">THE A-TEAM</h1>
          <hr class="blackLine" />
          <div class="teamMember">
            <div class="pictureJames"></div>
            <h1 class="personName">James Cobb</h1>
          </div>
          <div class="teamMemberWhite">
            <div class="pictureAqib"></div>
            <h1 class="personName">Syed Aqib Aftab</h1>
          </div>
          <div class="teamMember">
            <div class="pictureIhsan"></div>
            <h1 class="personName">Ihsan Utku Tugrul</h1>
          </div>
          <div class="teamMemberWhite">
            <div class="pictureBogdan"></div>
            <h1 class="personName">Bogdan Constantin Avram</h1>
          </div>
           <div class="teamMember">
            <div class="pictureKaarel"></div>
            <h1 class="personName">Kaarel Holm</h1>
          </div>
        </div>
   </div>
   <div class="rightContentAbout">
     <div class="search">
       <h1 class="searchHeading">WHO WE ARE AND WHAT IS CS TIMELINE</h1>
        <hr class="blackLineLong" />
        <div class ="whoWeAre">
        <p>We are a group of 5 and we all meet at the beginning of this year. During the first few months, we had the opportunity to get to know each other. We learned our strengths and weaknesses, and by the time we started working on our website, we became a harmonic group which can work cooperatively without having problems.
After meeting with each other, the next step was learning how to develop a website. Some of us were experienced and some were not, but the common point between us was, we were all trying to improve our skills. Since we knew that we are all going to use this information in our project, we developed our skills in HTML, CSS, PHP, and MySQL. In addition to these programs, we are also going to use JavaScript and jQuery in our website.
Before starting to develop our website, we made a project plan, which we believe is really important. Since we were working as a group, and it was our first experience, we knew that we have to be organized.Therefore, we believe our plan helped us a lot. One of the most important facts in life is that, you have to be in the right place at the right time, so with the help of this plan we could easily figure out what we should do, and when we should do it.
After planning, it was just about making more research and building our website, which was not easy but doable since everyone knew what they should do, so we kept working together and help each other during each step and deal with this project.</p>
     </div>
     </div>
   </div>
