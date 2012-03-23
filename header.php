<div class="menu">
        <ul>
        <li><a  href="front.php">[ CS TimeLine ]</a>
         <li><a href="timelineTest.php?semester=1&week=1">SEMESTER 1</a></li>
	       <li><a href="timelineTest.php?semester=2&week=1">SEMESTER 2</a></li>
	       <li><a href="resources.php">RESOURCES</a></li>
        <li><a href="timelineTest.php">CURRENT WEEK</a></li>
        <li><?php 
          $semester=$_GET['semester']; 
          echo "<a href='contact.php?semester=".$semester."'>ABOUT US</a>";
         
        ?></li>
        </ul>
        <div class="groupSelector">
        <h1 class="group">GROUP LOGIN:</h1>
        <div class="dropDown">
        <select class="select">
          <option value="Y">Group X10</option>
          <option value="X">Group Y10</option>
          <option value="Z">Group W10</option>
          <option value="10">Group Z10</option>
        </select>
        </div>
        </div>
      </div>
      
      

