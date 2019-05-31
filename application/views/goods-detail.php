<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Toys Rent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/icomoon/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2 position-relative">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>
    
      <?php $this->load->view('template/navbar')?>
      <!-- <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">Toys Rent</a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li><a href="item-catalog.html">Item Catalog</a></li>
                  <li><a href="catalogs.html">Goods Catalog</a></li>
                  <li class="has-children">
                      <a href="index.html">Lists</a>
                      <ul class="dropdown">
                        <li><a href="order-list.html">Order List</a></li>
                        <li><a href="delivery-list.html">Delivery List</a></li>
                      </ul>
                    </li>
                </ul>
              </nav>
            </div>
            <div class="icons">
              <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
              <div class="d-inline-block">
                <a id="login-text" href="login.html">Login</a>
                <span>|</span>
                <a id="register-text" href="register.html">Register</a>
              </div>
              <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
            </div>
          </div>
        </div> -->
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="<?php echo base_url()?>">Home</a> <span class="mx-2 mb-0">/</span> <a href="catalogs.html">Catalogs</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Goods</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="border">
              <img src="https://tekesan.space/toysrent/assets/images/buzz.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black">Buzz Lightyear</h2>
            <p><strong class="text-primary h4">Rp 20.000/Week</strong></p>
            <div class="mb-4">
              <h5>Condition: Sedang disewa anggota</h5>
              <h5>Length of Use: 2 month(s)</h5>
              <h5>Owner: Muhammad Iqbal</h5>
            </div>
            <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h2 class="review-header">Review</h2>
      <div class="write-review">
        <form>
          <textarea placeholder="Write your review..." rows="3"></textarea>
          <p><button class="btn btn-sm height-auto px-3 py-2 btn-primary" type="submit">Submit</button></p>
        </form>
      </div>
      <div class="review-list">
        <div class="row">
          <div class="col-md-12">
            <div class="review">
              <h4 class="reviewers"><a href="profile.html">Mawar</a></h4>
              <p class="review-timestamp">Today, 15:00 PM</p>
              <p class="review-text">Bagus sekali mainannya. Anak saya sangat suka</p>
            </div>
          </div>
          <div class="col-md-12">
              <div class="review">
                <h4 class="reviewers"><a href="profile.html">Ibnu Hakim</a></h4>
                <p class="review-timestamp">Yesterday, 8:00 AM</p>
                <p class="review-text">Barang mulus dan sesuai gambar</p>
              </div>
          </div>
        </div>
      </div>
    </div>

    <a href="chat.html" class="float">
      <span class="my-float fa fa-comments"></span>
    </a>

    <footer class="site-footer custom-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              
              <div class="block-7">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates sed dolorum excepturi iure eaque, aut unde.</p>
              </div>
              <div class="block-7">
                <form action="#" method="post">
                  <label for="email_subscribe" class="footer-heading">Subscribe</label>
                  <div class="form-group">
                    <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                    <input type="submit" class="btn btn-sm btn-primary" value="Send">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="footer-heading mb-4">Quick Links</h3>
                </div>
                <div class="col-md-6 col-lg-4">
                  <ul class="list-unstyled">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Store builder</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                  <ul class="list-unstyled">
                    <li><a href="#">Item catalog</a></li>
                    <li><a href="#">Goods catalog</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                  <ul class="list-unstyled">
                    <li><a href="#">Order list</a></li>
                    <li><a href="#">Delivery list</a></li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="block-5 mb-5">
                  <h3 class="footer-heading mb-4">Contact Info</h3>
                  <ul class="list-unstyled">
                    <li class="address">Beji, Depok, Jawa Barat, Indonesia</li>
                    <li class="phone"><a href="tel://23923929210">+6281234567890</a></li>
                    <li class="email">info@toysrent.com</li>
                  </ul>
                </div>
  
              
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
            
          </div>
        </div>
      </footer>
  </div>

  <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/aos.js')?>"></script>

  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    
  </body>
</html>