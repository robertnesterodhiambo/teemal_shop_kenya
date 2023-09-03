<?php
include("../includes/connect.php");
if(isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_Brand = $_POST['product_brand'];
    $product_Price = $_POST['product_price'];
    $product_status = 'true';

    // image acces
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // accesoing image temp name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    //chekiing empty condition
    if($product_title == '' or $product_description =='' or $product_keywords == '' or $product_category == ''
    or $product_Brand == '' or $product_Price == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == ''){
        echo "<script>alert('Please fill all the fields');</script>";
        exit();
    } else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");
        // insert query into
        $insert_product = "INSERT INTO `products` (product_title,product_description,productt_keywords,category_id,
        brand_id,product_image1,product_image2,product_image3,prduct_price,date,status) values('$product_title','$product_description',
        '$product_keywords','$product_category','$product_Brand','$product_Price','$product_image1','$product_image2','$product_image3',
        now(),'$product_status')";
        $result_query = mysqli_query($con,$insert_product);
        if($result_query){
            echo "<script>alert('Product Added Successfully');</script>";
        } else {
            echo "<script>alert('Product not added');</script>";
        }
    }

}
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
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Enter project title" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_title" class="form-control" 
                placeholder="Enter project description" autocomplete="off" required="required">
            </div>
            <!-- product keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
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
                <select name="product_brand" id = "" class = "form-select">
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
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" 
                placeholder="Enter project image1" autocomplete="off" required="required">
            </div>
            <!-- product image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" 
                placeholder="Enter project image2" autocomplete="off" required="required">
            </div>
            <!-- product image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" 
                placeholder="Enter project image3" autocomplete="off" required="required">
            </div>
            <!-- product Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                placeholder="Enter project Price" autocomplete="off" required="required">
            </div>
            <!-- product Price -->
            <div class="form-outline mb-4 w-50 m-auto">
              <input type="submit" name='insert_product' class="btn btn-info mb-3 px-3" value = "insert products">
            </div>
        </form>
    </div>
    
</body>
</html>