<!-- conect file -->
<?php 
include("includes/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teemal tyre shop</title>
    <link rel="stylesheet" href="style.css">
    <!--bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- fonts link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- DIV Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
   <img src="images/logo.png" alt = "" class = "logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">total price: 100</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- second child -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<ul class="navbar-nav me-auto">
<li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>       
</ul>
</nav>

<!-- third child -->
<div class="bg-warning">
    <h3 class="text-center">TEEMAL STORE</h3> <!-- HIDEN STORE -->
    <P class="text-center">
        Garage is a vehicles hospital pick only teemal
    </P>
</div>

<!-- fourth child -->
<div class="row">
    <div class="col-md-10">
        <!-- products` -->
       <div class="row px-1">
        <!-- fethcing products-->
        <?php 
        $select_query = "SELECT * FROM `products` order by rand() limit 0,9";
        $result_query = mysqli_query($con, $select_query);
       // $row = mysqli_fetch_assoc($result_query);
       // echo $row['product_title'];
       while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['prduct_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "  <div class='col-md-4 mb-2 '   >
        <div class='card'>
  <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'> $product_title</h5>
    <p class='card-text'>$product_description</p>
    <a href='#' class='btn btn-warning'>Add to cart</a>
    <a href='#' class='btn btn-dark'>View more</a>
  </div>
</div>
   
        </div>";
       }
        ?>
      
        </div>
        </div>
     
    <div class="col-md-2 bg-dark p-0">
        <!-- side navigation -->
        <!-- brands to be displayed -->
        <ul class="navbar-nav me-auo text-center">
            <li class="nav-item bg-dark">
                <a href="#" class="nav-link text-light"><h4>  Brands</h4></a>
            </li>
            <?php 
$select_brands = "SELECT * FROM brands"; // Include asterisk (*) to select all columns
$result_brand = mysqli_query($con, $select_brands);
//echo $row_data['brand_title'];
while($row_data = mysqli_fetch_assoc($result_brand)){
  $brand_title =$row_data['brand_title'];
  $brand_id = $row_data['brand_id'];
  echo "<li class='nav-item'>
  <a href='index.php?brand=$brand_id' class='nav-link text-light bg-warning'>$brand_title</a>
</li>";
}
?>
        </ul>
        <!-- category to be displayed -->
        <ul class="navbar-nav me-auo text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light bg-dark"><h4> Categories</h4></a>
            </li>

            <?php 
$select_category = "SELECT * FROM categories"; // Include asterisk (*) to select all columns
$result_category = mysqli_query($con, $select_category);
//echo $row_data['category_title'];
while($row_data = mysqli_fetch_assoc($result_category)){
  $category_title =$row_data['category_title'];
  $category_id = $row_data['category_id'];
  echo "<li class='nav-item'>
  <a href='index.php?category=$category_id' class='nav-link text-light bg-warning'>$category_title</a>
</li>";
}
?>
      
        </ul>
    </div>
   
</div>
<!-- last child -->

<div class="bg-warning p-3 text-center">
    <p>All rght reserved © Desgned by Robert Nester Odhiambo for TeemalAuto </p>
</div>
    <!-- bootstra js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>