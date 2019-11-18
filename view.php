<?php
 session_start();
 $s=$_POST["search"];

 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="voiceit";
 
 $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
 
   if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
 
?>

<!DOCTYPE html>
<html>
<title>Voice It!!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-purple.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}

</style>

<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover w3-large w3-theme-d2" href="javascript:void(0);" onClick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="main.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  
  <a href="../buss pass/upload.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover" title="upload img"><i class="fa fa-upload"></i></a>
   <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    
	<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
  
   </div>
   
  <a href="../buss pass/myacc.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-theme-d4 w3-padding-large w3-hover" title="My Account">
    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
   <form class="w3-bar-item  w3-hide-small w3-padding-large w3-hover" action="view.php" method="post">
   <i class="fa fa-search"></i>
   <input type="text" name="search" class="w3-medium" style="width:700px; color:#333333;">
   </form> 
  
 </div>
 
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="../buss pass/myacc.php" class="w3-bar-item w3-button w3-padding-xlarge">My Profile</a>
</div>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
	  
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
		 
		 <?php
		          $ename=$_SESSION["ename"];
		         $sql="SELECT * FROM reg WHERE email = '$ename'";
                 $res=$conn->query($sql);
                 while($row = mysqli_fetch_array($res, MYSQL_ASSOC))  
                {  
		          echo '<p><i class="glyphicon glyphicon-user fa-fw w3-margin-right w3-text-theme"></i>' . $row['uname'] . ' </p>';
				  echo '<p><i class="fa fa-cloud fa-fw w3-margin-right w3-text-theme"></i>' . $row['email'] . ' </p>';
				  echo '<p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>' . $row['dob'] . ' </p>';
				  $name=$row['uname'];
			    }
                   $_SESSION["name"]= $name;
							 
		 ?>
        </div>
		
     </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        
		<div class="w3-white">
          <button onClick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          
		  <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
		  
          <button onClick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          
		  <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
		  
          <button onClick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
		  
          <div id="Demo3" class="w3-hide w3-container">
             <div class="w3-row-padding">
         <br>
               <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
               </div>
			   
               <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
               </div>
			   
               <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
              </div>
			  
            <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
			
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
		   
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
		   
         </div>
      </div>
   </div>      
 </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onClick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->

    <div class="w3-col m9">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">VOICE IT</h6>
			   <?php
			     $sql="SELECT * FROM reg WHERE uname='$s'";
                 $res=$conn->query($sql);
                 while($row = mysqli_fetch_array($res, MYSQL_ASSOC))  
                {  
			      echo '<ul class="w3-ul">
                             <li class="w3-bar">
                                  <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
                            <div class="w3-bar-item">
                                  <span class="w3-large"><a href="viewprofile.php?link1=' .$row['uname'].'&link2='.$row['email'].'">'.$row['uname'].'</a></span><br>
                                  <span>'.$row['email'].'</span>
                            </div>
                                   </li>';
								   
								   
				}		
						   
			   ?>
			 	  	
            </div>
          </div>
        </div>
      </div>   

	 
 </div> <!-- End of Middle Column -->  
 
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 


