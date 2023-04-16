<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>welcome to product areas...</h2>
    <?php
        if(isset($_POST['submit']))
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $filename=($_FILES["imagefile"]["name"]);
            $tmp=($_FILES["imagefile"]["tmp_name"]);
            $folder='product/'.$filename;
            move_uploaded_file($tmp,$folder);

            $description=$_POST['description'];
            $price=$_POST['price'];
            

            $sql="INSERT INTO `product`(`id`, `name`, `photo`, `description`, `price`) VALUES ('$id','$name','$folder','$description','$price')";

            $query=mysqli_query($conn,$sql);
            if($query)
            {
                echo"product is inserted...<br>";
            }
            else
            {
                echo"erorr in query...";
            }
        }
        else{
            echo"query is not fired...";
        }
        echo"<a href='index.html' >Go to Home</a>";
      
        
    ?>
</body>
</html>
<?php
 

?>
