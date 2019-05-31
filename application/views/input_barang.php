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

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Form Barang
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
				 <form action="<?php echo $action; ?>" method="post" novalidate>
                <div class="box-body">
					          <div class="form-group">
                      <label>Id Barang<?php echo form_error('id_barang') ?></label>
                      <input type="text" class="form-control" id="id_barang" name="id_barang" required="required" value="<?php echo $id_barang; ?>">
                    </div>
                    <div class="form-group">
                      <label>Nama Item<?php echo form_error('nama') ?></label>
                      <select name="nama" class="form-control">
                        <option disabled selected>-- Pilih Item --</option>
                        <?php foreach($nama->result() as $row){?>
                        <option value="<?php echo $row->nama ?>" <?php echo set_select('nama', $row->nama); ?>><?php echo $row->nama ?></option>
                        <?php } ?>
                      </select>
                    </div>
				          	<div class="form-group">
                      <label>Warna</label>
                      <input type="text" class="form-control" id="warna" name="warna" required="required" value="<?php echo $warna; ?>">
                    </div>
					          <div class="form-group">
                      <label>Url Foto</label>
                      <input type="url" class="form-control" id="url_foto" name="url_foto" required="required" value="<?php echo $url_foto; ?>">
                    </div>
					          <div class="form-group">
                      <label>Kondisi<?php echo form_error('kondisi') ?></label>
                      <input type="text" class="form-control" id="kondisi" name="kondisi" required="required" value="<?php echo $kondisi; ?>">
                    </div>
                    <div class="form-group">
                      <label>Lama Penggunaan (Bulan)</label>
                      <input type="number" class="form-control" id="lama_penggunaan" name="lama_penggunaan" required="required" value="<?php echo $lama_penggunaan; ?>">
                    </div>
                    <div class="form-group">
                      <label>Pemilik / Penyewa</label>
                      <select name="no_ktp" class="form-control">
                        <option disabled selected>-- Pilih Penyewa --</option>
                        <?php foreach($no_ktp->result() as $row){?>
                        <option value="<?php echo $row->no_ktp ?>" <?php echo set_select('no_ktp', $row->no_ktp); ?>><?php echo $row->no_ktp ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="box-body">
                    <h3>Info Barang</h3>
                    <div class="form-group">
                      <label>Jenis Level<?php echo form_error('nama_level') ?></label>
                      <select name="nama_level" class="form-control">
                        <option disabled selected>-- Pilih Level --</option>
                        <?php foreach($nama_level->result() as $row){?>
                        <option value="<?php echo $row->nama_level ?>" <?php echo set_select('nama_level', $row->nama_level); ?>><?php echo $row->nama_level ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Royalti(%)<?php echo form_error('porsi_royalti') ?></label>
                      <input type="number" class="form-control" id="porsi_royalti"  name="porsi_royalti" required="required" value="<?php echo $porsi_royalti; ?>">
                    </div>
                    <div class="form-group">
                      <label>Harga Sewa(Rp)<?php echo form_error('harga_sewa') ?></label>
                      <input type="number" class="form-control" id="harga_sewa"  name="harga_sewa" required="required" value="<?php echo $harga_sewa; ?>">
                    </div>
					      <div class="box-footer">
                    <button id="send" type="submit" class="btn btn-primary">Submit</button>
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

<?php
$this->load->view('template/foot');
?>