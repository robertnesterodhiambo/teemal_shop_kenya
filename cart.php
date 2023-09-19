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
    <title>teemal cart</title>
    <link rel="stylesheet" href="style.css">
    <!-- internal syling -->
    <style>
        .cart_img {
    width: 50px;
    height: 50px;
    object-fit: contain;
}
    </style>

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
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-shopping-cart" aria-hidden="true"></i>
          <sup>
             <?php 
          cart_item();
          ?> 
          </sup></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- calling cart functionality -->
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

<div class="container">
<!-- fourth child -->
    <div class="row">
        <form action = "" method = "post">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Produt title</th>
                    <th>product image</th>
                    <th>Quantity</th>
                    <th>Total price</th>
                    <th>Remove</th>
                    <th colspan="2">Operations </th>
                </tr>
                <tbody>
                    <!-- php dynamic cart-items -->
                    <?php
 global $con;
 $get_ip_address = getIPAddress();
 $total = 0;
 $cart_query = "SELECT * FROM `cart_details` where ip_address = '$get_ip_address'";
 $result_query = mysqli_query($con, $cart_query);
 while($row = mysqli_fetch_array($result_query)){
   $product_id = $row['product_id'];
   $select_procucts = "SELECT * FROM `products` where product_id = '$product_id'";
   $result_products = mysqli_query($con, $select_procucts);
   while($row_product_price = mysqli_fetch_array($result_products)){
     $product_price = array($row_product_price['prduct_price']);
     $price_table = $row_product_price['prduct_price'];
     $product_title = $row_product_price['product_title'];
     $product_image1 = $row_product_price['product_image1'];
     $product_value =  array_sum($product_price);
     $total += $product_value;
                    ?>
                    <tr>
                        <td><?php echo  $product_title ?></td>
                        <td><img src="./images/<?php echo $product_image1 ?>" class="cart_img" ></td>
                        <td><input type = "text" name = "qty" id = ""></td>
                        <?php 
                           $get_ip_address = getIPAddress();
                           global $con;
                           if(isset($_POST['update_cart'])){
                            $quantities = $_POST['qty'];
                            $update_cart = "update `cart_details` set quantity = '$quantities' where ip_address='$get_ip_address'";
                           $result_products_qty = mysqli_query($con,$update_cart);
                           $total = $total*(int)$quantities;
                        }
                        ?>
                        <td><?php echo $price_table?></td>
                        <td><input type = "checkbox" class = "form-input w-50"></td>
                        <td>
                            <!-- <button class="border-0 bg-info px-3 mb-3 py-2">
UPDATE
                            </button> -->
                            <input name = "update_cart" type ="submit" value = "update_cart" class="border-0 bg-info px-3 mb-3 py-2">
                            <button class="border-0 bg-info px-3 mx-3 py-2">
REMOVE
                            </button>
                        </td>
                    </tr>
                </tbody>
                <?php    }
 }?>
            </thead>
        </table>
        <div class = "d-flex mb-5">
            <h4 class="px-3">Subtotoal:<strong class = text-info><?php 
            echo $total
            ?></strong></h4>
            <a href = "index.php"><button class="border-0 bg-info px-3 mx-3 py-2">
                Continue Shopping
            </button></a>
            <a href = "index.php"><button class="border-0 bg-secondary p-3 py-2">
                Checkout
            </button></a>
        </div>
    </div>
</div>
</form>
<!-- last child -->

<?php 
include('./includes/footer.php');
?>
    <!-- bootstra js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>