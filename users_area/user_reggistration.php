<?php 
include('../includes/connect.php');
include('../funcions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration</title>
    <link rel="stylesheet" href="style.css">
    <!--bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- fonts link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">
            New User registration
        </h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <!-- username -->
                        <label for="user_username" class = "form-label">Username</label>
                        <input type="text" class="form-control" id = "user_username" name="user_username" placeholder="Enter your Username" autocomplete="off" required = "required"/>
                    </div>
                    <div class="form-outline mb-4">
                        <!-- email -->
                        <label for="user_email" class = "form-label">email</label>
                        <input type="email" class="form-control" id = "user_email" name="user_email" placeholder="Enter your email" autocomplete="off" required = "required"/>
                    </div>
                    <div class="form-outline mb-4">
                        <!-- image -->
                        <label for="user_image" class = "form-label">user image</label>
                        <input type="file" class="form-control" id = "user_image" name="user_image"  required = "required"/>
                    </div>
                    <div class="form-outline mb-4">
                        <!-- passsword -->
                        <label for="user_password" class = "form-label">password</label>
                        <input type="password" class="form-control" id = "user_password" name="user_password" placeholder="Enter your password" autocomplete="off" required = "required"/>
                    </div>
                    <div class="form-outline mb-4">
                        <!-- confirm passsword -->
                        <label for="user_password" class = "form-label">password</label>
                        <input type="text" class="form-control" id = "conf_user_password" name="conf_user_password" placeholder="confirm your password" autocomplete="off" required = "required"/>
                    </div>
                    <div class="form-outline mb-4">
                        <!-- ADDRESS -->
                        <label for="user_address" class = "form-label">address</label>
                        <input type="text" class="form-control" id = "user_address" name="user_address" placeholder="Enter your address" autocomplete="off" required = "required"/>
                    </div>
                    <div class="form-outline mb-4">
                        <!-- contact -->
                        <label for="user_contact" class = "form-label">contact</label>
                        <input type="text" class="form-control" id = "user_contact" name="user_contact" placeholder="Enter your contact" autocomplete="off" required = "required"/>
                    </div>
                    <div class=" mt-4 pt-2">
                        <input type ="submit" value="Register" class = "bg-warning py-2 px-3 border-0" name = "user_register">
                    </div>
                    <p class = "small fw-bold mt-2 pt-1 mb-0">Already have an account? <a class="text-danger" href = "user_login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!-- php code -->
<?php 
if(isset($_POST['user_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password = $_POST['conf_user_password'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();
    $user_mobile = $_POST['user_contact'];

    // select query 
    $select_query = "SELECT * FROM `user_table` WHERE username = '$user_username' or user_email = '$user_email'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);

    if($rows_count > 0) {
        echo "<script>alert('User email or username already exists');</script>";
    } else if($user_password!=$conf_user_password) {
        echo "<script>alert('Passwords do not match');</script>";      
    }
    else {
    // Move uploaded image to the correct directory
    move_uploaded_file($user_image_temp, "../users_area/user_images/$user_image");

    // Corrected SQL query (use double quotes for column names)
    $insert_query = "INSERT INTO USER_TABLE (username, user_email, user_password, user_image, user_ip, address, mobile) VALUES ('$user_username', '$user_email', '$hash_password', '$user_image', '$user_ip', '$user_address', '$user_mobile')";

    // Assuming you have a database connection established as '$con', execute the query
    $sql_execute = mysqli_query($con, $insert_query);

    if ($sql_execute){
        echo "<script>alert('Account registered successfully');</script>";
    } else {
        // Print the MySQL error message if the query fails
        die(mysqli_error($con));
    }
}
//selecting cart items
$select_cart_items = "SELECT * FROM `cart_details` WHERE `ip_address` = '$user_ip'";
$result_cart = mysqli_query($con, $select_cart_items);
$row_cart_count = mysqli_num_rows($result_cart);
if ($row_cart_count >0){
    $_SESSION['username'] = $user_username;
    echo "<script>alert('you have items in cart');</script>";
    echo "<script>window.open('checkout.php','_self');</script>";
} else {
    echo "<script>winow.open('../index.php','_self');</script>";
}
}

?>