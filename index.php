
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="assets/bootstrap/bootstrap.css" /> 
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

     <script src="assets/bootstrap/bootstrap.min.js"></script>
    <script src="assets/bootstrap/bootstrap-icons.json"></script>
    <script src="assets/js/all.min.js"></script> 
    <title>Home</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
      <div class="container">
        <img class="logo" src="assets/images/my logo.png" alt="" />
        <a class="navbar-brand" href="#">Let's Buy</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse navbar-buttons"
          id="navbarNavAltMarkup"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Home</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link" href="shop.html">shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a href="cart.php"><i class="fas fa-shopping-bag icon"></i></a>
              <a href="account.html"><i class="fas fa-user icon"></i>
            </li></a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- home -->

    <section id="home">
      <div class="container">
        <h5>NEW ARRIVALS</h5>
        <h1><span>Best Prices</span> This Season</h1>
        <p>Eshop offers the best products for the most affordable prices</p>
        <button>Shop Now</button>
      </div>
    </section>

    <!-- brands -->

    <section id="brands">
      <div class="row">
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="assets/images/huawei.jpg"
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="assets/images/tecno.jpg"
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="assets/images/sony.png"
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12"
          src="assets/images/samsung.jpg"
        />
      </div>
    </section>

    <!-- new -->

    <section id="new" class="w-100">
      <div class="row p-0 m-0">
        <!-- one -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/images/1.jpg" alt="" />
          <div class="details">
            <h2>30% OFF Watches</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!-- two -->

        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/images/10.jpg" alt="" />
          <div class="details">
            <h2>Extremely Awesome Laptops</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!-- three -->

        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/images/6.jpg" alt="" />
          <div class="details">
            <h2>50% OFF Phones</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured -->
   <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>Our Featured</h3>
        <center><hr /></center>
        <p>Here you can check out our featured products</p>
    </div>
    <div class="row mx-auto container-fluid">
      <?php include('server/get_featured_products.php'); ?>
            <?php while ($row = $featured_products->fetch_assoc()) { ?>
    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/<?= $row['product_image'] ?>" />
        <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
        </div>
        <h5 class="p-name"><?= $row['product_name'] ?></h5>
        <h4 class="p-price">GHC<?= number_format($row['product_price'], 2) ?></h4>
        <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">BUY NOW</button></a>

    </div>
<?php } ?>

    
    </div>
</section>


    <!-- banner -->

    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>MID SEASON'S SALE</h4>
        <h1>
          This Season Collection <br />
          Up to 30% OFF
        </h1>
        <button class="text-uppercase">shop now</button>
      </div>
    </section>

    <!-- watches -->

    <section id="watches" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Watches</h3>
        <center><hr /></center>
        <p>Here You can check out our Amazing Watches</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('server/get_watches.php');?>
       <?php while($row = $watches->fetch_assoc()){?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/<?= $row['product_image']?>"/>
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name"><?= $row['product_name']?></h5>
          <h4 class="p-price">GHC<?= $row['product_price']?></h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
        <?php }?>
       
        
      
      </div>
    </section>

    <!-- Smartphones -->

    <section id="Smartphones" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Smartphones</h3>
        <center><hr /></center>
        <p>Here You can check out our Amazing Phones</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/7.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name">HP Laptop</h5>
          <h4 class="p-price">GHC1990.0</h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/8.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name">HP Laptop</h5>
          <h4 class="p-price">GHC1990.0</h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/2.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name">HP Laptop</h5>
          <h4 class="p-price">GHC1990.0</h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/6.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name">HP Laptop</h5>
          <h4 class="p-price">GHC1990.0</h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
      </div>
    </section>

    <!-- laptops -->

    <section id="laptops" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Laptops</h3>
        <center><hr /></center>
        <p>Here You can check out our Amazing laptops</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/9.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name">HP Laptop</h5>
          <h4 class="p-price">GHC1990.0</h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/10.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name">HP Laptop</h5>
          <h4 class="p-price">GHC1990.0</h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/11.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name">HP Laptop</h5>
          <h4 class="p-price">GHC1990.0</h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/12.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
            <i class="fas fa-star star"></i>
          </div>
          <h5 class="p-name">HP Laptop</h5>
          <h4 class="p-price">GHC1990.0</h4>
          <button class="buy-btn">BUY NOW</button>
        </div>
      </div>
    </section>

    <!-- footer -->

    <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img class="logo" src="assets/images/my logo.png" />
          <p class="pt-3">
            we provide the best products for the most affordable prices
          </p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Featured</h5>
          <ul class="text-uppercase">
            <li><a href="#">Men</a></li>
            <li><a href="#">electronics</a></li>
            <li><a href="#">girls</a></li>
            <li><a href="#">boys</a></li>
            <li><a href="#">New arrivals</a></li>
            <li><a href="#">clothes</a></li>
          </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Contact Us</h5>
          <div>
            <h6 class="text-uppercase">Address</h6>
            <p>P.O Box 129 Sunyani, Bono Region</p>
          </div>
          <div>
            <h6 class="text-uppercase">Phone</h6>
            <p>050 000 0000</p>
          </div>
          <div>
            <h6 class="text-uppercase">Email</h6>
            <p>info@gmail.com</p>
          </div>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Instagram</h5>
          <div class="row">
            <img
              src="assets/images/watch.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img src="assets/images/15.jpg" class="img-fluid w-25 h-100 m-2" />
            <img
              src="assets/images/airpod.jpg"
              class="img-fluid w-25 h-100 m-2"
            />
            <img src="assets/images/12.jpg" class="img-fluid w-25 h-100 m-2" />
            <img src="assets/images/13.jpg" class="img-fluid w-25 h-100 m-2" />
          </div>
        </div>
      </div>

      <div class="copyright mt-5">
        <div class="row container mx-auto">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/images/visa.png" alt="" />
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 text-nowrap mb-2">
            <p>Natty @ 2025 All Reserved</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="assets/js/script.js"></script>
</html>
