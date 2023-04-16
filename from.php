<?php
include("connection.php");
include("index.html");
?>
<head>
	<title>registration form</title>
	<link href="c1.css" rel="stylesheet" type="text/css"/>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->


</head>
<body align="center" border="2">
 <div class="cuntainer"> 
<form class="form" action="user.php" method="POST">
<table align="center">
  <tr>
    <td colspan="2"><h2>REGISTRATION FORM</h2></td>
  </tr>
  <tr>
      <td>
          <label for="userid">User Id:</label><br>  
      </td>
      <td colspan="3">
         <input type="text" id="userid" name="userid" pattern="[A-Za-z][0-9]{4,50}"  required><br>
      </td>
  </tr>
  <tr>
    <td>
      <label for="address">Address:</label><br>
    </td>
    <td colspan="3">
       <input type="text" id="address" name="address" required><br>
    </td>
  </tr>
   <tr>
    <td>
      <label for="email">Email:</label><br>
    </td>
    <td colspan="3">
      <input type="email" id="email" name="email" required><br>
    </td>
  </tr>
   <tr>
    <td>
      <label for="password">Password:</label><br>
    </td>
    <td colspan="3">
      <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" required><br>
    </td>
  </tr>
  <tr>
    <td colspan="6">
     <input type="submit" name="submit" value="Submit"> 
    </td>
  </tr>
  <tr>
    <td colspan="6" align="center"><br>
      <a href="login.php">Already have an account ?</a>
    </td>
  </tr>
</table> 
</form>
</div>
</body>

<?php
include("footer.php");
?>