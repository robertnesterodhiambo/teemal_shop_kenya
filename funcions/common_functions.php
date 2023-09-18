<!-- php connecntion -->    
<?php
include("./includes/connect.php");
function getproducts(){
    global $con;  
    //conditon to chhchecck isset or not
    if (!isset($_GET['category'])) {
        if(!isset($_GET['brand'])){
// getting products information
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
<a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>
</div>
</div>

</div>";
} }}}

// gettin all products
function get_all_product(){
  global $con;  
  //conditon to chhchecck isset or not
  if (!isset($_GET['category'])) {
      if(!isset($_GET['brand'])){
// getting products information
$select_query = "SELECT * FROM `products` order by rand()";
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
<a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>

</div>
</div>

</div>";
} }}}

// getting unique categories


function gettUniquecat() {
  
  global $con;  
  //conditon to chhchecck isset or not
  if (isset($_GET['category'])) {
    $category_id = $_GET['category'];

// getting products information
$select_query = "SELECT * FROM `products` where category_id = $category_id";
$result_query = mysqli_query($con, $select_query);

$num_of_row = mysqli_num_rows($result_query);
if($num_of_row == 0) {
  echo "<h2 class = 'text-center text-danger'>No products for this category</h2>";
}
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
<a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>

</div>
</div>

</div>";
} }}

// getting unique brands


function gettUniquebraand() {
  
  global $con;  
  //conditon to chhchecck isset or not
  if (isset($_GET['brand'])) {
    $brand_id = $_GET['brand'];

// getting products information
$select_query = "SELECT * FROM `products` where brand_id = $brand_id";
$result_query = mysqli_query($con, $select_query);

$num_of_row = mysqli_num_rows($result_query);
if($num_of_row == 0) {
  echo "<h2 class = 'text-center text-danger'>This brands for this category</h2>";
}
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
<a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>
</div>
</div>

</div>";
} }}

// getting brands
function getBrand(){
    global $con;
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
}
function getCategory() {
    global $con;
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
}

//searching products 
 
function search_product(){
  global $con; 
  if(isset($_GET['search_dataproduct']))
  {
     $search_data_value = $_GET['search_data'];
// getting products information
$search_query = "select * from products where productt_keywords like '%$search_data_value%'";
$result_query = mysqli_query($con, $search_query);
// $row = mysqli_fetch_assoc($result_query);
// echo $row['product_title'];

$num_of_row = mysqli_num_rows($result_query);
if($num_of_row == 0) {
  echo "<h2 class = 'text-center text-danger'>This product is not abailable</h2>";
}


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
<a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>

</div>
</div>

</div>";
} }}
// View deetaisl function 


function view_deetails(){

  global $con;  
  //conditon to chhchecck isset or not
  if(isset($_GET['product_id'])){
  if (!isset($_GET['category'])) {
      if(!isset($_GET['brand'])){
// getting products information
$product_id = $_GET['product_id'];
$select_query = "SELECT * FROM `products` where product_id=$product_id";
$result_query = mysqli_query($con, $select_query);
// $row = mysqli_fetch_assoc($result_query);
// echo $row['product_title'];
while($row = mysqli_fetch_assoc($result_query)){
$product_id = $row['product_id'];
$product_title = $row['product_title'];
$product_description = $row['product_description'];
$product_image1 = $row['product_image1'];
$product_image2 = $row['product_image2'];
$product_image3 = $row['product_image3'];
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
<a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View more</a>
</div>
</div>

</div>

<div class='col-md-8'>
          <!-- related images -->
          <div class='row'>
            <div class='col-md-12'>
              <h4 class='text-center mb-5 text-info'>
                related products
              </h4>
              <div class='col-md-6'>
              <img src='./admin_area/./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title'>                
              </div>
              <div class='col-md-6'>
              <img src='./admin_area/product_images/./admin_area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
              </div>
            </div>
          </div>
        </div>";
} }}}}

?>