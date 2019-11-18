<?php
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw2=$_POST['repsw'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$email=$_POST['email'];
$mob=$_POST['mob'];

$msg="sucessfully registered";
$err="error";

$sname="localhost";
$dbuname="root";
$dbpsw="";
$dbname="voiceit";

$conn=new mysqli($sname, $dbuname, $dbpsw, $dbname);

if($conn->connect_error)
{
  die("connection failed" . $conn->connect_error);
}


 $m="Password & Re-enter password is not same so re-enter both field";
 
 
 if($psw === $psw2)
  {
    $sql="INSERT INTO reg(uname,psw,repsw,dob,email,mob)
	VALUES ('$uname','$psw','$psw2','$dob','$email','$mob')";
	
    if($conn->query($sql) === TRUE) 
     {
       echo "<script type='text/javascript'>
	           location.href='form.html';
			   alert('$msg');
		      </script>";
   	 
     } 
     else
     {
     echo"check registration". $sql ."<br>". $conn->error;
     } 
  }
  else
  {
   echo "<script type='text/javascript'>
	           location.href='reg.html';
			   alert('$m');
		      </script>"; 
  }
 
  $conn->close();
 
?>
