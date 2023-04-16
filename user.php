<?php
    include("connection.php");
if(isset($_POST['submit']))
{
    $uid=$_POST['userid'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  
    $query=mysqli_query($conn,"INSERT INTO users VALUES('$uid','$address','$email','$password')");

    
      if($query){
        echo "<script>alert('Registration SuccessFully');</script>";
        echo "<center>Registration SuccessFully ... Click to <a href='login.php'>login</a></center>";
      }	
}

else
{
    echo "erorr..";
}
header("location:index.html");	
?>