<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=""/>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body>
    <form action="show.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="id">id</label>
                </td>
                <td>
                    <input type="text" name="id" id="id" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="name">product name</label> 
                </td>
                <td>
                    <input type="text" name="name" id="name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="file">select product image</label>
                </td>
                <td>
                    <input type="file" name="imagefile" id="imagefile">
                </td>
            </tr>
            <tr>
                <td>
                <label for="desciption">about product</label> 
                </td>
                <td>
                    <input type="text" name="description" id="description" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="price">product price </label> 
                </td>
                <td>
                    <input type="number" name="price" id="price" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="insert product">
                </td>
            </tr>
        </table>
<div class="table">     
 <?php
 include("connection.php");
  $sql="select * from product";
  $query=mysqli_query($conn,$sql);
   if($query)
     {
        echo"<hr><br><table>
        <tr><td><h1>Product Details</h1></td></tr><br>";
        while($result=mysqli_fetch_assoc($query))
        {
        echo"
        <tr>
        <td>
        <table class='back'>
            <tr>
                <td><h1>".$result['name']."</h1></td>
            </tr>
            <tr>
                <td><a href='detail.php'><img src='".$result['photo']."' height='200px' width='200px' id='img'></a></td>
            </tr>
            <tr>
                <td>".$result['description']."</td>
            </tr>
            <tr>
                <td><p>₹".$result['price']." </p><mark>20%off</mark></td>
          </tr>
        </td>
        </tr>
        </table>
        </td>
        ";
        }
    }
?> 
</div>
    </form>
</body>