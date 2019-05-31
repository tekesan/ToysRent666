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
    <div class="container login-box">
        <h1 class="login-header">Login</h1>
        <div class="form-box">
            <form action="<?php echo base_url('auth') ?>" method="post">
                <label for="">KTP</label>
                <input name="no_ktp" type="text" placeholder="Enter your KTP number">
                <label for="">E-mail</label>
                <input name="email" type="text" placeholder="Enter your e-mail">
                <button type="submit">SUBMIT</button>
            </form>
            <p>Don't have an account? <a href="<?php echo base_url('register') ?>">Register</a></p>
        </div>
    </div>
    <?php if(null !== $this->session->flashdata('msg')){?> 
        <script>alert("<?php echo $this->session->flashdata('msg');?>");</script>
    <?php } ?>
</body>
</html>