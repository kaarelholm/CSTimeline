<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="images/favicon.gif"/>
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
<div class="headerContainer">
<?php require("header.php"); ?>
</div>
    <div class="sliderbar">
     <?php require("slider.php");?>
    </div>
</div>
   <div class="emptySpace">
   </div>
   <div class="Content">
     <div class="wrap">
     <div class="leftContent">
        <div class="search">
          <h1 class="searchHeading">THE A-TEAM</h1>
          <hr class="blackLine" />
          </div>
          <div class="teamMember">
            <div class="pictureJames"></div>
            <h1 class="personName">James Cobb<br />cobbj1@cs.man.ac.uk</h1>
          </div>
          <div class="teamMemberWhite">
            <div class="pictureAqib"></div>
            <h1 class="personName">Syed Aqib Aftab<br />syeda1@cs.man.ac.uk</h1>
          </div>
          <div class="teamMember">
            <div class="pictureIhsan"></div>
            <h1 class="personName">Ihsan Utku Tugrul<br />tugruli1@cs.man.ac.uk</h1>
          </div>
          <div class="teamMemberWhite">
            <div class="pictureBogdan"></div>
            <h1 class="personName">Bogdan Constantin Avram<br />avramb1@cs.man.ac.uk</h1>
          </div>
           <div class="teamMember">
            <div class="pictureKaarel"></div>
            <h1 class="personName">Kaarel Holm<br />holmk1@cs.man.ac.uk</h1>
          </div>
            <div class="search">
       <a name="error"><h1 class="searchHeading">CONTACT US</h1></a>
       <hr class="blackLine" />
       <div class ="contactUs">
       <p ALIGN="LEFT">Found an error, a mistake in the materials, <br />or just have any suggestions for us?<br />
Feel free to drop any one of the team<br /> an email! <br /><br />
</p>
<img src="http://i0.kym-cdn.com/photos/images/original/000/096/044/trollface.jpg?1296494117" alt="Trololololol lololol lololooool trololololol!" width="250" height="250" />
      </div>
     </div>
        </div>

   <div class="rightContentAbout">
     <div class="search">
       <h1 class="searchHeading">WHO ARE WE?</h1>
       <hr class="blackLineLong" />
       <div class ="whoWeAre">
        <p>We are a group of 5 Computer Science students who all met at the beginning of this year. During the first few months, we had the opportunity to get to know each other. We found out everyone's strengths and weaknesses, and by the time we started working on our website, we were an harmonic group which could work cooperatively without problems.
After getting to know each other, our next step was to learn how to develop a website. Some of us had experience in this field and some did not, but the common point between us was that we were keen to improve our skills. Since we knew what was required of us in this project, we worked on our HTML, CSS, PHP, and MySQL skills. In addition to these languages, we learnt to implement JavaScript and jQuery in our website.
Before starting to develop our website, we made a project plan, which we believe is essential when beginning any project. As we were working as a group, and it was the first work we'd done together, we knew that we would have to be organised. We believe that we have been organised, and our plan has helped us a lot. One of the most important facts in life is that, you have to be in the right place at the right time, so with the help of this plan we could easily figure out what we had to do, and when it had to be done by.
After planning and designing the site, it was a case of researching and building the project, which was not easy but doable. It was a challenge, however everyone knew what they should be doing, so we kept working and helping each other during each step and, in the end, had a finished project.</p>
        
       </div>
     </div>
     <div class="search">
       <h1 class="searchHeading">WHAT IS CS TIMELINE?</h1>
       <hr class="blackLineLong" />
       <div class ="whatIsCSTimeline">
        <p>CS Timeline is a cool new website that allows you to search for your Computer Science resources by week, so you always know what's happening in your course. It allows you to look up lecture slides, assignments and past papers, among other things, for each of your modules so you don't have to go searching for them in the maze of the Computer Science course home pages.
You can use the slider to search by week, or the search bar to find a specific course unit or resource type. Alternatively, you can click the 'courses' link at the top of the page to look through the units.
CS Timeline also displays what's happening in the current week, so even if you've accidentally missed that one lecture, you can catch up on whatever you need to.</p>
      </div>
     </div>
   
   </div></div>
<?php include 'footer.html' ?>
</body>
</html>
