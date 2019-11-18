<?php
 session_start();
 $name=$_GET["link1"];
 $email=$_GET["link2"];

	
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
#em
{
  text-align: left;
  text-align-last: left;
}
</style>

<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onClick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="main.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  
  <a href="upload.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="upload img"><i class="fa fa-upload"></i></a>
  
   <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    
	<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
  
   </div>
  <a href="myacc.php" class="w3-bar-item w3-button w3-hide-small w3-theme-d4 w3-right w3-padding-large w3-hover-white" title="My Account">
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
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
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
		         
		         $sql="SELECT * FROM reg WHERE uname = '$name' && email='$email' ";
                 $res=$conn->query($sql);
                 while($row = mysqli_fetch_array($res, MYSQL_ASSOC))  
                {  
		          echo '<p><i class="glyphicon glyphicon-user fa-fw w3-margin-right w3-text-theme"></i>' . $row['uname'] . ' </p>';
				  echo '<p><i class="fa fa-cloud fa-fw w3-margin-right w3-text-theme"></i>' . $row['email'] . ' </p>';
				  echo '<p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>' . $row['dob'] . ' </p>';
				  
			    }
                   
							 
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

    <div class="w3-col m7 w3-center">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">VOICE IT</h6>
			    <form method="post">
			   <div class="w3-row-padding">
			    <div class="w3-half">
				   <input type="text" placeholder="Serach By Area" name="sarea" class="w3-input w3-border">
				 </div>
				 <div class="w3-half">
				   <input type="text" placeholder="Search By District" name="sdis" class="w3-input w3-border" required>
				 </div>
			   </div>  <br>
                  <input type="submit" value="Search" name="submit" >
			  </form>	  	
            </div>
          </div>
        </div>
      </div>   
<?php
  if(isset($_POST['submit']))
	   {
	       $a=$_POST["sarea"];
	       $d=$_POST["sdis"]; 
		 
		      $sql="SELECT * FROM upload WHERE area = '$a' || district = '$d' && uname = '$name' && email='$email' ORDER BY id DESC";
                 $res=$conn->query($sql);
                 while($row = mysqli_fetch_array($res, MYSQL_ASSOC))  
                {  
				    echo '<div class="w3-container w3-card w3-white w3-round w3-margin"><br>';
				    echo '<img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                  <span class="w3-right w3-opacity">' . $row['date'] . '</span>
                                  <h4 class="w3-left w3-margin-top"><a href="viewprofile.php?link1=' .$row['uname'].'&link2='.$row['email'].'">'.$row['uname'].'</a></h4><br><br><span class=" w3-right w3-clear  w3-opacity">'.$row['email'].'</span><br>
                                  <hr class="w3-clear">';
					
				
					echo '<div class="w3-left"><span class="w3-left" style="font-size:18px">Title:'."\n" . $row['title'] . '</span><br>';	
					
					echo '<span class="w3-left" style="font-size:16px" id="em">' . $row['des'] .'</span><br>';	
					echo '<br><span class="w3-left"  style="font-size:18px">Area:' ."\n" . $row['area'].'</span>';
					echo '<span class="w3-margin-left" style="font-size:18px">District:' ."\n" . $row['district'].'</span></div>';
				
					echo '<br><br>';		  
                    echo '<div class="w3-container ">';			
                    echo '  
                          <tr>  
                               <td>  
                     <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" class="img-thumnail" style="width:100%" class="w3-margin-bottom" />  
                               </td>  
                          </tr> ';
					   echo '</div> <br>';	  
				     
					  
					  echo '<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> ?Like                            </button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> ?Comment</button> ';	
		              echo '</div>';    
                }	
				
					   
	   }	   
      else
	     {             
                   
                 $sql="SELECT * FROM upload where uname = '$name' && email='$email' ORDER BY id DESC";
                 $res=$conn->query($sql);
                 while($row = mysqli_fetch_array($res, MYSQL_ASSOC))  
                {  
				    echo '<div class="w3-container w3-card w3-white w3-round w3-margin"><br>';
				   echo '<img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                  <span class="w3-right w3-opacity">' . $row['date'] . '</span>
                                  <h4 class="w3-left w3-margin-top"><a href="viewprofile.php?link1=' .$row['uname'].'&link2='.$row['email'].'">'.$row['uname'].'</a></h4><br><br><span class= "w3-right w3-clear  w3-opacity">'.$row['email'].'</span><br>
                                  <hr class="w3-clear">';
					
				
					echo '<div class="w3-left"><span class="w3-left" style="font-size:18px">Title:'."\n" . $row['title'] . '</span><br>';	
					
					echo '<span class="w3-left" style="font-size:16px" id="em">' . $row['des'] .'</span><br>';	
					echo '<br><span class="w3-left"  style="font-size:18px">Area:'."\n" . $row['area'].'</span>';
					echo '<span class="w3-margin-left" style="font-size:18px">District:'."\n" . $row['district'].'</span></div>';
				
				
				
					echo '<br><br>';		  
                    echo '<div class="w3-container ">';			
                    echo '  
                          <tr>  
                               <td>  
                     <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" class="img-thumnail" style="width:100%" class="w3-margin-bottom" />  
                               </td>  
                          </tr> ';
					   echo '</div> <br>';	  
				     
					  
					  echo '<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> ?Like                            </button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> ?Comment</button> ';	
		              echo '</div>';    
                }
		}		 
?>
 </div> <!-- End of Middle Column -->  
 
    <!-- Right Column -->
    <div class="w3-col m2">
      
	  <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        
		<div class="w3-container">
          
		  <p>Friend Request</p>
          <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
           
		   <div class="w3-row w3-opacity">
             
			 <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
             </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          
		   </div>
        
	     </div>
      
	  </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
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

