<!DOCTYPE html>
<html lang="en">
<head>
    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <!--bootstarp css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font awsoment -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- nabar -->
    <div class="container-fluid p-0">
        <!-- firrst child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
           <div class="container-fluid">
            <img src="../images/logo.png" class = "logo" alt="">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </nav>
           </div>
        </nav>
         <!-- second child -->
         <div class="bg-light">
            <h3 class="text-center p-2">
                Manage deetails
            </h3>
           </div>
           <!-- third child -->
           <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                  <div class = px-5>
                    <a href=""><img src="../images/tyrerunning.jpg" class = "admin-image" alt=""></a>
                    <p class="text-light text-center">Admin Name</p>
                  </div>
                  <div class="button text-center">
                    <button class = "px-2"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert products</a></button>
                    <button class = "px-2"><a href="" class="nav-link text-light bg-info my-1">View products</a></button>
                    <button class = "px-2"><a href="" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button class = "px-2"><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button class = "px-2"><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button class = "px-2"><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button class = "px-2"><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button class = "px-2"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button class = "px-2"><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button class = "px-2"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                  </div>
            </div>
           </div>

           <div class="container my-5">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            ?>
           </div>
           <!--last child-->
           <div class="bg-warning p-3 text-center">
    <p>All rght reserved © Desgned by Robert Nester Odhiambo for TeemalAuto </p>
</div>
    </div>
<!--boostrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>