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
          <div class="col-md-12 mb-0"><a href="<?php echo base_url()?>">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Catalogs</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-lg-9 order-2 order-lg-1">

            <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h2 class="text-black h5">All Items</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <div class="products-wrap border-top-0">
  <div class="container-fluid">
    <div class="row no-gutters products">
      <div class="col-6 col-md-6 col-lg-6 border-top">
          <img src="https://tekesan.space/toysrent/assets/images/dumbo.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>Dumbo</h3>
            <strong class="price">Rp 15.000/Week</strong>
          </div>
      </div>
      <div class="col-6 col-md-6 col-lg-6 border-top">
          <img src="https://tekesan.space/toysrent/assets/images/buzz.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>Buzz Lightyear</h3>
            <strong class="price">Rp 20.000/Week</strong>
          </div>
      </div>
      <div class="col-6 col-md-6 col-lg-6">
          <img src="https://tekesan.space/toysrent/assets/images/woody.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>Sheriff Woody</h3>
            <strong class="price">Rp 20.000/Week</strong>
          </div>
      </div>

      <div class="col-6 col-md-6 col-lg-6">
          <img src="https://tekesan.space/toysrent/assets/images/sally.jpg" alt="Image" class="img-fluid">
          <div class="item-info">
            <h3>Jessie</h3>
            <strong class="price">Rp 20.000/Week</strong>
          </div>
      </div>

    </div>
  </div>
</div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 order-1 order-lg-2 mb-5 mb-lg-0">
            <div class="border p-4 mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Action Figures</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Lego</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Dolls</span> <span class="text-black ml-auto">(2,124)</span></a></li>
              </ul>
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