<?php
session_start();
$ename=$_SESSION["ename"];

  $c=$_POST['com'];

 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="voiceit";
 
 $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
 
   if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
                 $sql="SELECT * FROM reg WHERE email = '$ename'";
                 $res=$conn->query($sql);
                 while($row = mysqli_fetch_array($res, MYSQL_ASSOC))  
                {  
				  $name=$row['uname'];
			    }
				
	$sql="INSERT INTO comment(id,uname,cmnt)
	VALUES ('NULL','$name','$c')";
	
    if($conn->query($sql) === TRUE) 
     {
       echo "sucess";
   	 
     } 
     else
     {
     echo"check registration". $sql ."<br>". $conn->error;
     } 			
 

?>