
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop House website</title>


    
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
                <a class="nav-link" href="contact.html">Contact </a>
            </li>
            <li class="nav-item">
              <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
              <a href="account.html"><i class="fas fa-user"></i></a>
            
            </ul>
            
          </div>
        </div>
      </nav>

    <!--Home-->
   <section id="home">
    <div class="container" >
      <h5>NEW ARRIVALS</h5>
      <h1><span>Best Prices</span> This season  </h1>
      <p>Eshop offers the best products for you</p>
      <button>Shop Now</button>
      
    </div>
  </section>
  <!--Brabd-->
  <section id="brand" class="container">
    <div class="row">
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/FILA.png"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/g-shock-casio.png"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/converse.png"/>
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/chanel.png"/>

  
    </div>
  </section>
  <!--new-->
  <section id="new" class="w-100">
    <div class="row p-0 m-0">
      <!--one-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/imgs/3.jpg">
        <div class="details">
          <h2> extreamely awesome shoes</h2>
          <button class="text-uppercase">shop now</button>
        </div>
      </div>
      <!--two-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/imgs/3.jpeg">
        <div class="details">
          <h2> bagpag</h2>
          <button class="text-uppercase">shop now</button>
        </div>
      </div>
      <!--three-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/imgs/smart-watch.jpg">
        <div class="details">
          <h2> new style of watch</h2>
          <button class="text-uppercase">shop now</button>
        </div>
      </div>
        <!--four-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/summeroutfit.webp">
          <div class="details">
            <h2> best for summer season</h2>
            <button class="text-uppercase">shop now</button>
          </div>
        </div>
        <!--five-->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/dress.jpg">
          <div class="details">
            <h2> cute dress</h2>
            <button class="text-uppercase">shop now</button>
          </div>
        </div>
    </div>
  </section>
  <!--featured-->
  <section id="featured" class="my-5 pb-5">
    <div class="container text-center my-5 pb-5 ">
      <h3>our featured</h3>
      <hr class="mx-auto">
      <p>Here our products featured</p>
    </div>
    <div class="row mx-auto container-fluid">
    <?php include('server/get_featured_product.php');?>
    <?php while($row= $featured_products->fetch_assoc()){ ?>  

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
        <a href="single_product.php?product_id=<?php echo $row['product_id'] ?>"><button class="buy-btn">buy now</button></a>
      </div>

     

    <?php } ?>
    </div>
  </section>
  <!--banner-->
  <section id="banner" class="my-5 py-5">
    <div class="container">
      <h4>MID SEASON'S SALE</h4>
      <h1>Autumn collection<br> up to 15% off</h1>
      <button class="text-uppercase">shop now</button>
    </div>
  </section>
  <!--products1-->
  <section id="products1" class="my-5 ">
    <div class="container text-center my-5 pb-5 ">
      <h3>Dress & Coats</h3>
      <hr class="mx-auto">
      <p>Here our products1</p>
    </div>
    <div class="row mx-auto container-fluid">

      <?php include('server/get_coat.php') ?>

      <?php while($row=$coats_products->fetch_assoc()){ ?>

        <div class="product col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <button class="buy-btn">buy now</button>
        </div>
      
      <?php } ?>
     

      

      
    </div>
  </section>
  <!--products2-->
  <section id="products2" class="my-5 ">
    <div class="container text-center my-5 pb-5 ">
      <h3>our products2</h3>
      <hr class="mx-auto">
      <p>Here our products1</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/watch.jpg">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">classic watch</h5>
        <h4 class="p-price">80$</h4>
        <button class="buy-btn">buy now</button>
      </div>

      <div class="product col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/glasses.jpg">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">modern glasses</h5>
        <h4 class="p-price">50$</h4>
        <button class="buy-btn">buy now</button>
      </div>

      <div class="product col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/shoes.jpg">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">high class shoes</h5>
        <h4 class="p-price">180$</h4>
        <button class="buy-btn">buy now</button>
      </div>

      <div class="product col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/wallet.jpg">
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name">modern and popular girl's wallet</h5>
        <h4 class="p-price">150$</h4>
        <button class="buy-btn">buy now</button>
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

