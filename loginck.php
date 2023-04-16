<?php session_start();


$u = $_POST['uid'];
$p = $_POST['pass'];
include  "connect.php";
$s = mysqli_query($con,"select * from registration where userid='$u' and password='$p'");

if($r = mysqli_fetch_array($s))
{
		$_SESSION['uid'] = $u;
		header("location:index.php");

}
else
{
?>
<script>
alert("enter valid infromation");	
</script>
<?php

		//echo "<br><div style='color:black; border-radius:10px; padding:10px; text-align:center; background-color:tomato;'>Please Enter Valid User and password</div><br>";
		include "login.php";
}

?>
<?php
session_start();
if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  echo $email,$pass;


  $query=mysqli_query($conn,"select email,password from user where email='$email' and password='$pass'");
  
  if($r = mysqli_fetch_array($query))
  {
          $_SESSION['$email'] = $u;
          header("location:index.php");
  
  }
  else
  {
  ?>
  <script>
  alert("enter valid infromation");	
  </script>
  <?php
  
          //echo "<br><div style='color:black; border-radius:10px; padding:10px; text-align:center; background-color:tomato;'>Please Enter Valid User and password</div><br>";
          include "login.php";
  }
  
  while($result=mysqli_fetch_assoc($query))
  {
    $_SESSION['uidname'] = $u;
    header("location:index.html");          
    else
    {
        echo"<br><script><alertemail or password is incorect<br><be>please try again...";
    }
    }
}
}
else
{
  echo "query error...";
}

?>