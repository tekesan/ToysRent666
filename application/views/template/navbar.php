<div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="<?php echo base_url()?>" class="js-logo-clone">Toys Rent</a>
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