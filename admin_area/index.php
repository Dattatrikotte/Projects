<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <!-- fontawsome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <!-- custom style sheet -->
      <link rel="stylesheet" href="../style.css">

      <style>
        .admin_image{
    
    width: 100px;
    object-fit: contain;
}
.footer{
    position: absolute;
    bottom:0;
}
      </style>
</head>
<body>

    <!-- navbar -->
     <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>

                </nav>
            </div>

        </nav>

        <!-- second child -->
         <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
         </div>

         <!-- Third child -->
          <div class="row">
            <div class="col-md-12 bg-secondary p1 d-flex align-items-center">
                <div class="p-3">
                    <a href=""><img src="../images/pineapple.webp" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
          </div>

          <!-- Fourth child -->
           <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insertcategories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }

        

            ?>
           </div>

          <!-- last child -->
 <div class="bg-info p-3 text-center footer">
    <p>All rights reserved ©- Designed by Dattatri-2024</p>
 </div>
        

     </div>
    

  <!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>