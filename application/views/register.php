<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/form.css') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Toys Rent</title>
</head>
<body>
    
    
    <div class="container register-box">
        <h1 class="login-header">Register</h1>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#anggota">Anggota</a></li>
            <li><a data-toggle="tab" href="#admin">Admin</a></li>
        </ul>
        <div class="tab-content">
            <div id="anggota" class="tab-pane fade in active">
                <div class="form-box">
                    <form action="<?php echo base_url('register/register_anggota')?>" method="post">
                        <label for="">KTP</label>
                        <input name="no_ktp" type="text" placeholder="Enter your KTP number">
                        <label for="">Name</label>
                        <input name="nama_lengkap" type="text" placeholder="Enter your full name">
                        <label for="">E-mail</label>
                        <input name="email" type="text" placeholder="Enter your e-mail">
                        <label for="">Date of Birth</label>
                        <input name="tanggal_lahir" type="text" placeholder="yyyy-mm-dd">
                        <label for="">Phone Number</label>
                        <input name="no_telp" type="text" placeholder="Enter your phone number">
                        <label for="">Address</label>
                        <input name="alamat" type="text" placeholder="Street name, number, city name, postcode (Ex: Jalan Mawar, 10, Bogor, 16164)">
                        <button type="submit">SUBMIT</button>
                    </form>
                    <p>Have an account? <a href="<?php echo base_url('login') ?>">Login</a></p>
                </div>
            </div>
            <div id="admin" class="tab-pane fade">
                <div class="form-box">
                    <form action="<?php echo base_url('register/register_admin')?>" method="post">
                        <label for="">KTP</label>
                        <input name="no_ktp" type="text" placeholder="Enter your KTP number">
                        <label for="">Name</label>
                        <input name="nama_lengkap" type="text" placeholder="Enter your full name">
                        <label for="">E-mail</label>
                        <input name="email" type="text" placeholder="Enter your e-mail">
                        <label for="">Date of Birth</label>
                        <input name="tanggal_lahir" type="text" placeholder="yyyy-mm-dd">
                        <label for="">Phone Number</label>
                        <input name="no_telp" type="text" placeholder="Enter your phone number">
                        <button type="submit">SUBMIT</button>
                    </form>
                    <p>Have an account? <a href="login.html">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php if(null !== $this->session->flashdata('msg')){?> 
        <script>alert("<?php echo $this->session->flashdata('msg');?>");</script>
    <?php } ?>
</body>
</html>