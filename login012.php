<?php
$servername = "localhost";
$username = "username";
$password = "";
$db_name ="mydb";


// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
} 



     $username = $_POST['username'];
     $password = $_POST['password'];
     $sql="select * from signup where username='$username' && password='$password'";
     $result=mysqli_query($conn,$sql);
     $rowcount = mysqli_num_rows($result);
   

     if ($rowcount==TRUE) {
     	echo nl2br("log in sucessfully\n");
     	 
         
        
     }
     else
     	{echo nl2br( "username or password incorrect\n");}

 $conn->close();
?>
