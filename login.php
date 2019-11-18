<?php
session_start();
 $uname=$_POST['name'];
 $psw=$_POST['psw'];
 
 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="voiceit";
 
 $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
  if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }

 $ms="Username nd Password mismatch";
 
  $sql ="SELECT * FROM reg WHERE email = '$uname' || mob = '$uname' && psw = '$psw'";
  $res = $conn->query($sql);
  $p = mysqli_num_rows($res);
    if ($p==TRUE)
	  {
	    $_SESSION["ename"]=$uname;
	    header("location: main.php");
		exit();
	  }
	 else
	 {
	    echo "<script type='text/javascript'>
	           location.href='form.html';
			   alert('$ms');
		 </script>";
	 } 
	
   $conn->close();
 ?>
