<?php

  session_start();
  if(isset($_POST['add_to_cart'])){
    //if user has already added a product to cart
    if(isset($_SESSION['cart'])){

      $product_array_ids = array_column($_SESSION['cart'],"product_id");
      //if product has already added to cart or not
      if( !in_array($_POST['product_id'], $product_array_ids)){

        $product_id = $_POST['product_id'];
         
  
        $product_array= array(
          'product_id'=>$_POST['product_id'],
          'product_name'=>$_POST['product_name'],
          'product_price'=>$_POST['product_price'],
          'product_image'=>$_POST['product_image'],
          'product_quantity'=>$_POST['product_quantity']
  
        );
  
        $_SESSION['cart'][$product_id]= $product_array;
  

       

      }
      //product has already been added
      else{
        echo '<script>alert("product was already to cart");</script>';
      
      }
    }
    //if this is the first product
    else{
      $product_id = $_POST['product_id'];
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_image = $_POST['product_image'];
      $product_quantity = $_POST['product_quantity'];

      $product_array= array(
        'product_id'=>$product_id,
        'product_name'=>$product_name,
        'product_price'=>$product_price,
        'product_image'=>$product_image,
        'product_quantity'=>$product_quantity

      );

      $_SESSION['cart'][$product_id]= $product_array;

    }   
  }
  else
  {
    header('location: index.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>


        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body>


         <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-5 fixed-top">
        <div class="container">
          <img class="logo" src="assets/imgs/logo.png"/>
          <h2 class="brandname">classic</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact </a>
            </li>
            <li class="nav-item">
              <i class="fas fa-shopping-cart"></i>
              <i class="fas fa-user"></i>
            
            </ul>
            
          </div>
        </div>
        </nav>

        <!--cart-->
        <section class="cart container my-5 py5">
            <div class="container mt-5">
                <h2 class="font-weight-bolde">Your cart</h2>
                <hr>
            </div>
            <table class="mt-5 pt-5">
                <tr>
                    <th>product</th>
                    <th>quantity</th>
                    <th>subtotal</th>
                    
                </tr>

              <?php foreach($_SESSION['cart'] as $key=>$value){?>

                <tr>
                    <td>
                        <div class="product-info">
                            <img src="assets/imgs/<?php echo $value['product_image'];?>">
                            <div>
                                <p><?php echo $value['product_name'];?></p>
                                <small><span>$</span><?php echo $value['product_price'];?></small>
                                <br>
                                <form method="POST" action="cart.php">
                                  <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                                  <input type="submit" name="remove_product" class="remove-tbn" value="remove">
                                </form>
                                
                            </div>
                        </div>
                    </td>
                    <td>
                        
                        <form method="POST" action="cart.php">
                          <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                          <input type="number" value="<?php echo $value['product_quantity'];?>">
                         <input type="submit" class="edit-btn" value="edit" name="edit_quantity">
                        
                        </form>
                    </td>
                    <td>
                        <span>$</span>
                        <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price'];?></span>
                    </td>
                </tr>
              <?php }?>
              

            

                
            </table>
            <div class="cart-total">
                <table>
                    <tr>
                        <td>subtotal</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>total</td>
                        <td>120</td>
                    </tr>
                </table>
            </div>

            <div class="checkout-container">
                <button class="btn checkout-btn">checkout</button>
            </div>
        </section>







        <!--footer-->
        <footer class="'mt-5 py-5">
          <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <img class="logo" src="assets/imgs/logo.png">
              <p class="pt-3"> We provide the best products for the most affordable prices</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <h5 class="pb-2">Featured</h5>
              <ul class="text-uppercase">
                <li><a href="#">men</a></li>
                <li><a href="#">women</a></li>
                <li><a href="#">new arrivals</a></li>
                <li><a href="#">new collection</a></li>
                
              </ul>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <h5 class="pb-2">Contact</h5>
            <div >
              <h6 class="text-uppercase">Address</h6>
            </div>
            <div >
              <h6 class="text-uppercase">phone number</h6>
            </div>
            <div >
              <h6 class="text-uppercase">Email</h6>
            </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <h5 class="pb-2">Instagram</h5>
              <div class="row">
                <img src="assets/imgs/watch.jpg" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/nacklace.jpg" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/ring.jpg" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/springoutfit1.jpg" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/springoutfit3.jpg" class="img-fluid w-25 h-100 m-2">
                <img src="assets/imgs/springoutfit.jpg" class="img-fluid w-25 h-100 m-2">
              </div>
            </div>
          </div>
          <div class="copyright mt-5">
            <div class="row container mx-auto">
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                <img src="assets/imgs/paymentpic.png">

              </div>
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                <p>ecommerce @ IT Team all right reserved</p>
              </div>
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                <a class="#"><i class="fab fa-facebook"></i></a>
                <a class="#"><i class="fab fa-instagram"></i></a>
                <a class="#"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>    