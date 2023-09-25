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