<!-- conect file -->
<?php 
include("includes/connect.php");
include("funcions/common_functions.php");
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <sup>
          <?php 
          cart_item();
          ?> 
          </sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <?php 
total_cart_price();
            ?></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  name = "search_data">
        <!-- <button class="btn btn-outline-dark" type="submit">Search</button> -->
       <input type="submit" value="Search" class = "btn btn-outline-dark" name = "search_dataproduct">
      </form>
    </div>
  </div>
</nav>
<?php 
cart();
?>
<!-- second child -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<ul class="navbar-nav me-auto">
<li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_login.php">Login</a>
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
        //calling function
        search_product();
        gettUniquecat();
        gettUniquebraand();
      //  getUnique_cat();
   
//         </div>";
//        }
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
            getBrand();

?>
        </ul>
        <!-- category to be displayed -->
        <ul class="navbar-nav me-auo text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light bg-dark"><h4> Categories</h4></a>
            </li>

            <?php
            getCategory(); 
          
?>
      
        </ul>
    </div>
</div>
<!-- last child -->

<?php 
include('./includes/footer.php');
?>
    <!-- bootstra js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>