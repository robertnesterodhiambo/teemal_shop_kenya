<?php 
include('../includes/connect.php');
include('../funcions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login</title>
    <link rel="stylesheet" href="style.css">
    <!--bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- fonts link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">
           User Login
        </h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <!-- username -->
                        <label for="user_username" class = "form-label">Username</label>
                        <input type="text" class="form-control" id = "user_username" name="user_username" placeholder="Enter your Username" autocomplete="off" required = "required"/>
                    </div>
                    <div class="form-outline mb-4">
                        <!-- passsword -->
                        <label for="user_password" class = "form-label">password</label>
                        <input type="password" class="form-control" id = "user_password" name="user_password" placeholder="Enter your password" autocomplete="off" required = "required"/>
                    </div>
                    <div class=" mt-4 pt-2">
                        <input type ="submit" value="log in" class = "bg-warning py-2 px-3 border-0" name = "user_login">
                    </div>
                    <p class = "small fw-bold mt-2 pt-1 mb-0">Dont have an accont? <a class="text-danger" href = "user_reggistration.php">Register</a></p>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
global $con;
if(isset($_POST['user_login'])){
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $select_query = "SELECT * FROM `user_table` where username = '$user_username'";
    $result = mysqli_query($con ,$select_query);
    $row_num_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    $user_ip = getIPAddress();

// cart items 
$select_cart_query = "SELECT * FROM `cart_details` where ip_address = '$user_ip'";
$run_cart = mysqli_query($con, $select_cart_query);
$cart_row_count = mysqli_num_rows($run_cart);
    if ($row_num_count > 0){
        $_SESSION['username'] = $user_username;
        if(password_verify($user_password,$row_data['user_password'])){
            if($row_num_count == 1 and $cart_row_count == 0){
                $_SESSION['username'] = $user_username;
                echo "<script>alert('LOG IN SUCESFULL');</script>";
                echo "<script>window.open('profile.php','_self')</script>";
            } else {
                $_SESSION['username'] = $user_username;
                echo "<script>alert('LOG IN SUCESFULL');</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
        } else {
            echo "<script>alert('invalid credentials');</script>";
        }
    } else {
        echo "<script>alert('invalid credentials');</script>";
    }

}
?>
