




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


    <section class="container single-product my-5 pt-5">
      <div class="row mt-5">
<?php include('server/get_single_product.php');?>
      <?php  while($row = $product->fetch_assoc()){?>
        <div class="col-lg-5 col-md-6 col-sm-12">
          <img
            src="assets/images/<?php echo $row['product_image']?>"
            class="img-fluid w-100 pb-1"
            id="mainImg"
          />
          <div class="small-img-group">
            <div class="small-img-col">
              <img src="assets/images/<?php echo $row['product_image2']?>" width="100%" class="small-img" />
            </div>
            <div class="small-img-col">
              <img src="assets/images/<?php echo $row['product_image3']?>" width="100%" class="small-img" />
            </div>
            <div class="small-img-col">
              <img src="assets/images/<?php echo $row['product_image4']?>" width="100%" class="small-img" />
            </div>
          </div>
        </div>


        <div class="col-lg-6 col=md-12 col-sm-12">
          <h6><?php echo $row['product_category']?></h6>
          <h3 class="py-4">
            <?php echo $row['product_name']?>
          </h3>
          <h2>GH₵<?php echo $row['product_price']?></h2>

          <form action="cart.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']?>">
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']?>">

          <input type="number" value="1" name="product_quantity"/>
          <button type="submit" class="buy-btn" name="add_to_cart">Add To Cart</button>
          </form>
          <h4 class="mt-5 mb-5">Produc Details</h4>
          <span>
          <?php echo $row['product_description']?>
          </span
          >
        </div>
        <?php }?>
      </div>
    </section>

    <!-- Realted Products -->
    <section id="related-product" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Realted Products</h3>
        <center><hr /></center>
        <p>Checkout some related products</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/14.jpg" alt="" />
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
          <img class="img-fluid mb-3" src="assets/images/4.jpg" alt="" />
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
