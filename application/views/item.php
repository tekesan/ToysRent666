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
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Item <a href="<?php echo site_url('input_item') ?>"><button class="btn btn-sm btn-default"><i class="fa fa-plus"></i></button></a>
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
                  </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example" class="display" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Usia Dari</th>
                      <th>Usia Sampai</th>
                      <th>Bahan</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach ($item->result() as $row){
                     ?>
                    <tr>
                      <td><?php echo $row->nama; ?></td>
                      <td><?php echo $row->deskripsi; ?></td>
                      <td><?php echo $row->usia_dari; ?></td>
                      <td><?php echo $row->usia_sampai; ?></td>
					            <td><?php echo $row->bahan; ?></td>
					            <td><a class="btn btn-app" href="<?php echo base_url('item/edit_form/'.$row->nama)?>"><i class="fa fa-edit"></i>Edit</a>
                      <a class="btn btn-app" href="<?php echo base_url('item/delete/'.$row->nama)?>" onclick="return confirm('Are you sure?')"><i class="fa fa-close"></i>Delete</a></td>
                    </tr>
                    <?php }  ?>
                    </tbody>
                  </table>
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
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/jquery-3.3.1.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/jquery.dataTables.min.js') ?>" type="text/javascript"></script>

<script>
var $j = jQuery.noConflict();
$j(document).ready(function() {
    $j('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>

<?php
$this->load->view('template/foot');
?>