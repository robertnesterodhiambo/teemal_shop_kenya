<?php
include("../includes/connect.php");
if(isset($_POST['insert_brand'])){
  $brand_title = mysqli_real_escape_string($con, $_POST['brand_title']); // Escaping user input
  //select data from database
  $select_query = "SELECT * FROM `brands` WHERE brand_title='$brand_title'";
  $result_select = mysqli_query($con, $select_query);
  $numver = mysqli_num_rows($result_select);
  if($numver > 0){
    echo "<script>alert('brand Already Exists');</script>";
  } else {
    $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
    $result = mysqli_query($con, $insert_query);
    if($result){
      echo "<script>alert('brand Added Successfully');</script>";
    }
  }
}
?>
<form action = "" method = "post" class = "mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2">
  <input type="submit" class="border-0 p-2 my-3 bg-info" name="insert_brand"
 value="insert Brands" placeholder="insert Brands" aria-label="Username"
  aria-describedby="basic-addon1"> 
 
</div>


</form>