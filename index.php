<!-- connect file -->

<?php

include('includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using html and css</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <!-- fontawsome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <!-- custom style sheet -->
       <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- navbar -->

<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="images/logo.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
        
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

<!-- secongd child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Login</a>
        </li>
  </ul>    

</nav>

<!-- third child -->
 <div class="bg-lioght">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communication is at the heart of e-commerce</p>
 </div>

 <!-- fourth child -->
  <div class="row">
    <div class="col-md-10">
        <!-- products -->
         <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="images/moreapple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="images/apple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="images/biryani1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>

            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="images/biryani2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>

            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="images/biryani4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>

            <div class="col-md-4 mb-2">
            <div class="card" >
  <img src="images/mango.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>



         </div>
        
    </div>
    <div class="col-md-2 bg-secondary p-0">
      <!-- brands to be displaed -->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light "><h4>Delivery Brands</h4></a>
        </li>

        <?php
        $select_brands="Select * from `brands`";
        $result_brands=mysqli_query($con,$select_brands);
        // $row_data=mysqli_fetch_assoc($result_brands);
        // echo $row_data['brand_title'];
        // echo $row_data['brand_title'];
        while($row_data=mysqli_fetch_assoc($result_brands)){
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li class='nav-item'>
          <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
        </li>";
      }

        ?>
        
      
      </ul>

      <!-- Categories to be displayed -->

      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light "><h4>Categories</h4></a>
        </li>

        <?php
        $select_categories="Select * from `categories`";
        $result_categories=mysqli_query($con,$select_categories);
        // $row_data=mysqli_fetch_assoc($result_brands);
        // echo $row_data['brand_title'];
        // echo $row_data['brand_title'];
        while($row_data=mysqli_fetch_assoc($result_categories)){
        $category_title=$row_data['category_name'];
        $category_id=$row_data['category_id'];
        echo "<li class='nav-item'>
          <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
        </li>";
      }

        ?>
        
      </ul>
            
        </div>
  </div>
    





<!-- last child -->
 <div class="bg-info p-3 text-center">
    <p>All rights reserved ©- Designed by Dattatri-2024</p>
 </div>
<!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>