<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <!-- fontawsome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <!-- custom style sheet -->
       <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mt-3">Insert Products</h1>

        <!-- form -->
         <form action="" method="post" enctype="multipart/form-data">

         <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
            </div>

            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>

             <!-- categories -->
             <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <option value="">Category1</option>
                    <option value="">Category2</option>
                    <option value="">Category3</option>
                    <option value="">Category4</option>
                   
                </select>
                </div>

                 <!-- brands -->
             <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a Brand</option>
                    <option value="">Brand1</option>
                    <option value="">Brand2</option>
                    <option value="">Brand3</option>
                    <option value="">Brand4</option>
                   
                </select>
                </div>

                <!-- Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"   required="required">
            </div>

            <!-- Image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"   required="required">
            </div>

            <!-- Image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"   required="required">
            </div>

            <!-- price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div>

             <!-- price -->
             <div class="form-outline mb-4 w-50 m-auto">
                
                <input type="submit" name="insert_product"  class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>


                 

         </form>
    </div>
    


<!-- last child -->
<div class="bg-info p-3 text-center">
    <p>All rights reserved ©- Designed by Dattatri-2024</p>
 </div>
<!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>