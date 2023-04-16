<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminside</title>
   <link rel="stylesheet" href="show.css">
   
 
</head>
<body>
 <?php
 include("connection.php");
 include("adminside.php");

  $sql="select * from product";
  $query=mysqli_query($conn,$sql);
   if($query)
     {
        echo"<hr><br>   
        <table border='2' width='80%' align='center'>
            <tr>
                <td>
                <button id='add'><a href='product.php'>Add new item</a></button>
                </td>
                <th colspan='6'>
                    <h2 align='center'><b> product ditail </b></h2>
                </th>
            </tr>
            <tr>
                <td>id</td>
                <td>name</td>
                <td >photo</td>
                <td>discription</td>
                <td>price</td>
                <td>opretion</td>
        </tr>";
        


        while($result=mysqli_fetch_assoc($query))
        {
        echo"
           <tr>
                <td>".$result['id']."</td>
                <td><h1>".$result['name']."</h1></td>
                <td><img src='".$result['photo']."' height='100px' width='110px' id='img'></td>
                <td>".$result['description']."</td>
                <td><p>₹".$result['price']." </p><mark>20%off</mark></td>
                <td>
                <button id='edit'><a href='edit.php?id=$result[id]'>Edit</a></button> 
                <button id='delete'><a href='delete.php?id=$result[id]'>Delete</a></button>                               
                </td>
			
              

            </tr>
        ";
        }
    }
?> 
</table>
</body>
</html>