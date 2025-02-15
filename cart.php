<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
      .pagination a {
        color: coral;
      }
      .pagination li:hover a {
        color: #fff;
        background-color: coral;
      }
    </style>

    <script src="assets/bootstrap/bootstrap.min.js"></script>
    <script src="assets/bootstrap/bootstrap-icons.json"></script>
    <script src="assets/js/all.min.js"></script>
    <title>shop</title>
  </head>
  <body>
    <!-- navbar -->

      <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
      <div class="container-fluid">
        <img class="logo" src="assets/images/my logo.png" alt="" />
        <a class="navbar-brand" href="#">ClickCart</a>
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
              <a class="nav-link" href="shop.php">shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a href="cart.html"><i class="fas fa-shopping-bag icon"></i></a>
              <a href="account.html"><i class="fas fa-user icon"></i>
            </li></a>
          </ul>
        </div>
      </div>
    </nav>


    <!-- cart -->
    <section class="cart container-fluid my-5 py-5">
      <div class="container mt-5">
        <h2 class="font-weight-bold text-center">Your Cart</h2>
        <hr class="mx-auto"/>
      </div>

      <table class="mt-5 pt-5 container-fluid">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>

        <?php include("server/cart_backend.php")?>
        <?php foreach($_SESSION['cart'] as $key => $value){?>
        <tr>
          <td>
            <div class="product-info">
              <img src="assets/images/<?= $value['product_image'];?>" />
              <div>
                <p><?= $value['product_name'];?></p>
                <small><span>₵</span><?= $value['product_price'];?></small>
                <br />
                <form action="cart.php" method="POST">
                  <input type="hidden" name="product_id" value="<?= $value['product_id'];?>">
                  <input type="submit" name="remove_product" class="remove-btn" value="remove">

                </form>
              </div>
            </div>
          </td>
          <td>
            <form action="cart.php" method="POST">
              <input type="hidden" name="product_id" value="<?= $value['product_id'];?>">
              <input type="number" name="product_quantity" value="<?= $value['product_quantity'];?>" />
              <input type="submit" class="edit-btn" name="edit_quantity" value="edit">

            </form>
          </td>
          <td>
            <span>₵</span>
            <span class="product-price"><?= $value['product_price'];?></span>
          </td>
        </tr>
          <?php }?>
       
      </table>
      <div class="cart-total">
        <table>
          <tr>
            <td>subtotal</td>
            <td>₵255</td>
          </tr>
          <tr>
            <td>Total</td>
            <td>₵255</td>
          </tr>
        </table>
      </div>
      <div class="checkout-container">
        <button class="btn checkout-btn">Checkout</button>
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
