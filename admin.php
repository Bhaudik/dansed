<?php
    include("connection.php");
    
?>
<html>
<head>
	<title>ADMIN</title>
	<link href="c1.css" rel="stylesheet" type="text/css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body align="center" border="2">
<form class="form" method="POST" style="width:30%; height:65%;">
<table align="center">
  <tr>
    <td colspan="2" class="table"><h1><u>ADMIN LOGIN</u></h1></td>
  </tr>
  <tr>  
    <td>
    <label for="admin">Admin Id:</label><br>
    </td>
    <td>
      <input type="text" id="admin" name="adminId" pattern="[A-Za-z]{4,50}"  required><br><br>
    </td>
  </tr>
   <tr>
    <td>
      <label for="password">Password:</label><br>
    </td>
    <td>
      <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
    </td>
  </tr>
  <tr>
    <td colspan="2">
     <input type="submit" name="submit" value="Submit" class="button"> 
    </td>
  </tr>
  <tr>
    <td colspan="2" ><br>
    <a href="login.php">Login as User</a>
    </td>
   
  </tr>
</table> 
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  
  $AdminId=$_POST['adminId'];
  $pass=$_POST['password'];



  $sql="select * from admin where admin_id='$AdminId'";
  $query=mysqli_query($conn,$sql);
  while($result=mysqli_fetch_assoc($query))
  {
    echo "admin_id:".$result['admin_id'];
   echo "password:".$result['password'];
    if($query)
    {
        if($result['admin_id']==$AdminId && $result['password']==$pass)
        {
          ?><script>alert("you are login sucsesfull..");alert("Email Id is required");</script>";
          <?php
          header("location:adminside.php");
        }
        else
        {
          echo"<br><script>alert('email or password is in carect')<br><be>place try again...";
        }
    }
}
}

?>