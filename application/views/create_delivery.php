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

      <div class="container">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logo">
                <div class="site-logo">
                  <a href="<?php echo base_url();?>" class="js-logo-clone">Toys Rent</a>
                </div>
              </div>
              <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li><a href="<?php echo base_url('item-catalog') ?>">Item Catalog</a></li>
                            <li><a href="<?php echo base_url('catalogs') ?>">Goods Catalog</a></li>
                            <li class="has-children">
                                <a href="<?php echo base_url() ?>">Lists</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url('order-list') ?>">Order List</a></li>
                                    <li><a href="<?php echo base_url('delivery-list') ?>">Delivery List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                    <div class="d-inline-block">
                        <?php if(isset($this->session->userdata['logged_in'])){?>
                            <a id="login-text" href="<?php echo base_url('profile') ?>"><?= $this->session->userdata['logged_in']['name'] ?></a>
                            <span>|</span>
                            <a id="login-text" href="<?php echo base_url('logout') ?>">Logout</a>
                        <?php } else {?>
                            <a id="login-text" href="<?php echo base_url('login') ?>">Login as Anggota</a>
                            <span>|</span>
                            <a id="login-text" href="<?php echo base_url('admin-login') ?>">Login as Admin</a>
                            <span>|</span>
                            <a id="register-text" href="<?php echo base_url('register') ?>">Register</a>
                        <?php }?>
                    </div>
                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
            </div>
          </div>
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="<?php echo base_url();?>">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Create Delivery</strong></div>
        </div>
      </div>
    </div>



    <div class="site-section">

      <div class="container">
        <div class="row mb-5">

         <b><font color="black">Create Delivery</font></b>

         <form id="formsell" name="formsell" method="post" class="col-md-12" action="<?=base_url('delivery-sell')?>"
               enctype="multipart/form-data">
            </br>

              <div class="form-group">

                        <label>Barang Pesanan</label>

                        <div class="form-group">

                            <select class="form-control" name="barang" required >
                                <option>Barang</option>
                                <?php foreach ($all_barang as $s):?>
                                        <option  value="<?php echo $s->id_barang."|".$s->id_pemesanan; ?>"><?php echo $s->nama_item."|".$s->id_pemesanan; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>


              <div class="form-group">
              <input class="form-control" type="text" name="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat tujuan" required>
          	  </div>

          	  <div class="form-group">
              <input class="form-control" type="date" name="tanggal" placeholder="Tanggal pengiriman" required>
          	  </div>
              
              <div class="form-group">
              <input class="form-control" type="text" name="metode" placeholder="Metode" required>
          	  </div>

                  <!--button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Submit</button>-->

                  <button name="submit" type="submit" class="btn btn-danger btn-ok" value="Submit">Skuy!</button>
            </form>



          </div>
        </div>
    </div>

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

  <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Konfirmasi pengiriman</h4>
              </div>
              <form id="formsellmodal" name="formselmodal">
                  <div class="modal-body">

                      <b>Biaya pengiriman : Rp.5000</b>
                      </br>
                      Konfirmasi pengiriman?

                  </div>
                  <div class="modal-footer">
                      <button name="submit" type="submit" class="btn btn-danger btn-ok" value="Submit">Skuy!</button>
                  </div>
              </form>
          </div>

      </div>
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
<script type="text/javascript">

    $('#formsellmodal > button').click(function(e) {
        e.preventDefault(); //prevent default behaviour
        var formData = $('#formsell').serialize() //serialize data from form
        $.ajax({
            url:'<?php echo base_url('delivery-sell') ?>',
            type:'POST',
            data: formData
        });
    });

</script>

