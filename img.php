<?php

 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="voiceit";
 
 $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
 
   if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
 

	$filetmp = $_FILES["image"]["tmp_name"];
	$filename = $_FILES["image"]["name"];
	$filetype = $_FILES["image"]["type"];
	$filepath = "picture/".$filename;
	
	move_uploaded_file($filetmp,$filepath);
	
	
	 $sql="INSERT INTO image VALUES ('NULL','$filename','$filepath','$filetype')";
         if($conn->query($sql) === TRUE) 
             {
                echo "<script type='text/javascript'>
	           location.href='display.php';
		      </script>";
             }
         else
		     {
			    echo "fail";
			 }


?>
