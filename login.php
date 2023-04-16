<?php
    include("connection.php");
?>
<html>
<head>
	<title>Login form</title>
	<link href="c1.css" rel="stylesheet" type="text/css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body align="center" border="2">
<form class="form" method="POST" action="loginck.php">
<table align="center">
  <tr>
    <td colspan="2" class="table"><h1>LOGIN</h1></td>
  </tr>
  <tr>  
    <td>
    <label for="email">Email:</label><br>
    </td>
    <td>
      <input type="email" id="email" name="email" required><br><br>
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
     <input type="submit" name="submit" value="Submit"> 
    </td>
  </tr>
  <tr>
  <td colspan="2">
    <a href="admin.php">LOGIN AS ADMIN</a><br><br>
    </td>
  </tr>

  <tr>
    <td colspan="2" align="center"><br>
      <a href="from.php">Create new account</a>
    </td>
  </tr>
</table> 
</form>
</div>
</body>
</html>
