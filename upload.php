<?php
session_start();
 $img=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
 $des=$_POST["des"];
 $area=$_POST["area"];
 $dis=$_POST["district"];
 
 $name=$_SESSION["name"];
 $email=$_SESSION["ename"];
 $title=$_POST["title"];


 $sname="localhost";
 $dbuname="root";
 $dbpsw="";
 $db="voiceit";
 
 $conn=new mysqli($sname, $dbuname, $dbpsw, $db);
 
   if($conn->connect_error)
 {
   die("connection failed" . $conn->connect_error);
 }
 
  $year = date('y');
 $month = date('m');
 $date = date('d');
 $dat=$date."|".$month."|".$year;
 
$msg = "sucess"; 
$sql="INSERT INTO upload(uname,email,date,title,image,des,area,district)VALUES('$name','$email','$dat','$title','$img','$des','$area','$dis')";
	
    if($conn->query($sql) === TRUE) 
     {
       echo "<script type='text/javascript'>
	           location.href='main.php';
			   alert('$msg');
		      </script>";
   	 
     } 
     else
     {
     echo"fail". $sql ."<br>". $conn->error;
     } 

?>

