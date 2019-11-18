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
 
 
 
                 $sql="SELECT * FROM image";
                 $res=$conn->query($sql);
                 while($row = mysqli_fetch_array($res, MYSQL_ASSOC))  
                {  
				  echo "<img src='{$row['img']}' width:'40%' height:'40%'>";
				}
				
?>				
				