<?php
include("../includes/connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Insert Products Admin Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css" >
     <!--bootstarp css link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font awsoment -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body class = "bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Enter project title" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_title" class="form-control" 
                placeholder="Enter project description" autocomplete="off" required="required">
            </div>
            <!-- product keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_title" class="form-control" 
                placeholder="Enter project keywords" autocomplete="off" required="required">
            </div>
            <!-- category -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id = "" class = "form-select">
                    <option value="">Select Category</option>
                    <?php 
$select_query = "SELECT * FROM categories";
$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
    $category_title = $row['category_title'];
    $category_id = $row['category_id'];
    echo "<option value='$category_id'>$category_title</option>";
}
?>
                </select>
            </div>
            <!-- Brand -->
               <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_Brand" id = "" class = "form-select">
                    <option value="">Select a Brand</option>                 <?php 
$select_query = "SELECT * FROM brands";
$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
    $brand_title = $row['brand_title'];
    $brand_id = $row['brand_id'];
    echo "<option value='$brand_id'>$brand_title</option>";
}
?>
                </select>
               </div>
            <!-- product image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_title" class="form-control" 
                placeholder="Enter project image1" autocomplete="off" required="required">
            </div>
            <!-- product image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_title" class="form-control" 
                placeholder="Enter project image2" autocomplete="off" required="required">
            </div>
            <!-- product image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" id="product_title" class="form-control" 
                placeholder="Enter project image3" autocomplete="off" required="required">
            </div>
            <!-- product Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_Price" class="form-label">Product Price</label>
                <input type="text" name="product_Price" id="product_title" class="form-control" 
                placeholder="Enter project Price" autocomplete="off" required="required">
            </div>
            <!-- product Price -->
            <div class="form-outline mb-4 w-50 m-auto">
              <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value = "insert products">
            </div>
        </form>
    </div>
    
</body>
</html>