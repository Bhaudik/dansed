<?php
include("connection.php");
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://font.googleapis.com/css?family=Abril+Fatface|Dabcing+script">
</head>
<body>
<h1 class="text-center text-danger bm-5" style="font-family: 'abril fatface',cursive;">ONLIN SHOPING CART PHP MYSQLI</h1>
<div class="row">
<?php
$sql="SELECT `id`, `name`, `image`, `Price`, `discount` FROM `cart` order by id asc";

$query=mysqli_query($conn,$sql);

$num=mysqli_num_rows($query);
if($num>0){
  while ($result=mysqli_fetch_array($query)) {
   echo"<br>";
   // print_r($result);
    // code...
   ?>
   <div class="col-lg-3 col-md-3 col-sum-12">
     <form>
       <div class="card">
          <h6 class="card-title">
          <?php 
          echo $result['name']
          ?>
          </h6>
          <div class="card-body">
            <img src="<?php echo $result['image'] ;?>" alt="Bakrey itms" class="img-fluid mb-2 d-flex flex-fill">
         
            <h6 class="card-title">&#8377;<?php echo $result['Price'];?>
            <span>(<?php echo $result['discount'];?>%off)</span>
            </h6>

            <h6 class="badge badge-success">4.4  <i class="fa fa-star"></i></h6>
          </div>
         <!-- <input type="text" name="from-control" placeholder="Quantity"> -->
         <div class="btn-group d-flex">
          <button class="btn btn-success flex-fill">Add to Cart</button>
          <button class="btn btn-warning">Buy now</button>
         </div>
       </div>
     </form>
   </div>
   <?php
  }
}

?>
</div>
</body>
</html>



