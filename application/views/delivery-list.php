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
                            <a id="login-text" href="<?php echo base_url('profile/'.$this->session->userdata['logged_in']['no_ktp']) ?>"><?= $this->session->userdata['logged_in']['name'] ?></a>
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
          <div class="col-md-12 mb-0"><a href="<?php echo base_url()?>">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Delivery List</strong></div>
        </div>
      </div>
    </div>



    <div class="site-section">

      <div class="container">
          <?php

          if ($this->session->flashdata('deliv_insert')) {

              echo $this->session->flashdata('deliv_insert');

          }

          if ($this->session->flashdata('deliv_update')) {

              echo $this->session->flashdata('deliv_update');

          }

          if ($this->session->flashdata('deliv_delete')) {

              echo $this->session->flashdata('deliv_delete');

          }

          ?>
        <div class="row mb-5">



          <a href="<?php echo base_url().'delivery/create'; ?>" class="btn btn-primary height-auto"><font color="white">Create Delivery</font></a><br>

          <form class="col-md-12" method="post">
            </br>
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Delivery ID</th>
                    <th class="product-name">Goods</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Delivery Date</th>
                    <th class="product-remove">Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php

                foreach ($all_barang as $gaho) :?>

                  <tr>
                    <td class="product-thumbnail">
                        <?php echo $gaho->no_resi; ?>
                    </td>
                    <td class="product-name">
                        <?php echo $gaho->id_pemesanan; ?>
                    </td>
                    <td><?php echo $gaho->ongkos; ?></td>
                    <td>
                        <?php echo $gaho->tanggal; ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url('delivery/edit/').$gaho->no_resi ?>" class="btn btn-primary height-auto btn-sm"><i class="fa fa-edit"></i></a>
                        <a data-href="<?=base_url('delivery/delete/'.$gaho->no_resi); ?>" data-type="<?php echo $gaho->no_resi;?>" data-con="<?php echo $gaho->no_resi?>" data-toggle="modal" data-target="#deletehome" class="btn btn-primary height-auto btn-sm"><i class="fa fa-remove"></i></a>
                        <a data-href="<?=base_url('delivery/review/'.$gaho->no_resi.'/'.$gaho->tanggal); ?>" data-type="<?php echo $gaho->no_resi;?>" data-con="<?php echo $gaho->no_resi?>" data-toggle="modal" data-target="#reviewdelivery" class="btn btn-primary height-auto">Review</a>
                    </td>
                  </tr>

                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </form>
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

<div id="deletehome" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

            <div class="modal-header">


                <h4 class="modal-title">Delete Home Content Page</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

            <div class="modal-body">

                <p>Are you sure want to delete?</p>

                No Resi : <strong><span class="debug-type"></span></strong><br>


            </div>

            <div class="modal-footer">

                <a class="btn btn-danger btn-ok">Delete</a>

                <button type="button" class="btn btn-default" data-dismiss="modal">NOPE</button>

            </div>

        </div>

    </div>

</div>

<div id="reviewdelivery" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

            <div class="modal-header">


                <h4 class="modal-title">Review da toyz!</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>

             <form id="formsell" name="formsell" method="post" action="<?=base_url('delivery/review')?>" enctype="multipart/form-data">

            <div class="modal-body">

                <p>Place your review here</p>

                <font color="black">Review</font> : <input class="form-control" type="text" name="review" placeholder="insert review here"><br>


            </div>

            <div class="modal-footer">

                <button name="submit" type="submit" class="btn btn-danger btn-ok" value="Submit">Submit</button> 

                <button type="button" class="btn btn-default" data-dismiss="modal">NOPE</button>

            </div>

            </form>


        </div>

    </div>

</div>

<script type="text/javascript">
    $('#deletehome').on('show.bs.modal', function(e) {

        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        $('.debug-type').html($(e.relatedTarget).data('type'));

        $('.debug-content').html($(e.relatedTarget).data('con'));

    });

    $('#reviewdelivery > button').click(function(e) {
      e.preventDefault(); //prevent default behaviour
      var formData = $('#reviewdelivery').serialize() //serialize data from form
      $.ajax({
          url:'<?=base_url("delivery/review/WADW"); ?>',
          type:'POST',
          data: formData
      });
  });
</script>