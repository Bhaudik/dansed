<?php 
include("connection.php");
include("adminside.php");
$id=$_GET['id'];

$query="SELECT * FROM product WHERE id='$id'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
?>
	  <form method="POST" enctype="multipart/form-data">
        
        <table>
            <tr>
                <td>
                    <label for="id">id</label>
                </td>
                <td>
                    <input type="text" name="id" value="<?php echo $result['id'];?>" />
                </td>
            </tr>
            <tr>
                <td>
                <label for="name">product name</label> 
                </td>
                <td>
                    
					<input type="text" name="name" value="<?php echo $result['name'];?>" required /><br><br>

                </td>
            </tr>
            <tr>
                <td>
                    <label for="file">select product image</label>
                </td>
                <td>
                    <input type="file" name="imagefile" value="<?php echo $result['photo'];?>" />
                </td>
            </tr>
            <tr>
                <td>
                <label for="desciption">about product</label> 
                </td>
                <td>
                    <input type="text" name="description" value="<?php echo $result['description'];?>"  required />
                </td>
            </tr>
            <tr>
                <td>
                <label for="price">product price </label> 
                </td>
                <td>
                    <input type="number" name="price" value="<?php echo $result['price'];?>"  required />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="update" value="Update value">
					<input type="submit" name="Cancel" value="Cancel">
                </td>
            </tr>
        </table>

    </form>
	
 <?php
  if(isset($_POST['update'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$filename=($_FILES["imagefile"]["name"]);
	$tmp=($_FILES["imagefile"]["tmp_name"]);
	$folder='product/'.$filename;
	move_uploaded_file($tmp,$folder);

	$description=$_POST['description'];
	$price=$_POST['price'];
	$categary=$_POST['categary'];
	
	$query="UPDATE product SET `id`='$id',`name`='$name',`photo`='$folder',`description`='$description',`price`='$price',`categary`='$categary' where id='$id'";
	
	$q=mysqli_query($conn,$query);
	
	header("location:adminpanal.php");
	
	
  }
  else if(isset($_POST['Cancel']))
  {
	header("location:adminpanal.php");
  }

 
 ?>