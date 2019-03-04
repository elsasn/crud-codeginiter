<?php
$this->load->view('_partials/header');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('_partials/topbar');
$this->load->view('_partials/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  Pelanggan
  <small>Master Data Pelanggan</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Master Data</a></li>
    <li class="active">Pelanggan</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Default box -->
<div class="box">
  <form method="post" action="<?php echo base_url('pelanggan/tambah_proses') ?>">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">ID pelanggan</label>
        <td><input type="text" name='id_pelanggan' class="form-control" value="<?= $kodeunik; ?>" readonly></td>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="">
      </div>
      <div class="form-group">
        <?php echo form_error('email'); ?>
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="">
      </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Umur</label>
        <input type="number" class="form-control" id="umur" name="umur" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
        <?php echo form_error('email'); ?>
      </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?php  echo base_url('pelanggan') ?>" class="btn btn-danger">Cancel </a>
    </div>
    
  </form>
</div>
  </section><!-- /.content -->
  <?php
  $this->load->view('_partials/js');
  ?>
  <!--tambahkan custom js disini-->
  <script>
        $(function() {
            $( "#tgl_lahir" ).tgl_lahir();
        });
 
        window.onload=function(){
            $('#tgl_lahir').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
            });
        }
 
    </script>
  <?php
  $this->load->view('_partials/footer');
  ?>