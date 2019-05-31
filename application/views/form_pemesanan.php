<?php
$this->load->view('template/head');
?>

    <!--tambahkan custom css disini-->
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- multiple select-->
    <link href="<?php echo base_url('assets/jquery.multiselect.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Formulir Pemesanan
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
            </div><!-- ./col -->
            <!-- ./col -->

        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-tools">
                                        <div class="input-group">
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <form action="<?php /*if(isset()){echo base_url();}else{echo base_url();}*/?>" method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Anggota</label>
                                            <select class="form-control" name="anggota">
                                                <?php foreach ($nama_anggota->result() as $row){ ?>
                                                <option value="<?php echo $row->no_ktp; ?>"><?php echo $row->nama_lengkap; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Barang</label>
                                            <select class="form-control" name="barang[]" multiple id="barang">
                                                <?php foreach ($nama_barang->result() as $row){ ?>
                                                    <option value="<?php echo $row->id_barang; ?>"><?php echo $row->nama_item; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lama sewa</label>
                                            <input type="number" class="form-control" name="usia_dari" placeholder="hari" value="<?php if(isset($item)){echo $item['usia_dari'];} ?>">
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div></div>
        </div>
        <!-- Left col -->
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <!-- right col -->
        </div><!-- /.row (main row) -->

    </section><!-- /.content -->


<?php
$this->load->view('template/js');
?>

    <!--tambahkan custom js disini-->
    <!-- jQuery UI 1.11.2 -->
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Morris.js charts -->
    <script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>
    <!-- Jquery 331-->
    <script src="<?php echo base_url('assets/jquery-3.3.1.js') ?>" type="text/javascript"></script>
    <!-- multiple select -->
    <script src="<?php echo base_url('assets/jquery.multiselect.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>

<script>
$('select[multiple]').multiselect({
    columns: 1,
    placeholder: 'Pilih Barang',
    search: true
});
</script>