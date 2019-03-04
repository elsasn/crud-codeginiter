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
  Blank page
  <small>it all starts here</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <form method="post" action="<?php echo base_url('pelanggan/ubah_proses') ?>">
    {result}
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">ID pelanggan</label>
        <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" placeholder="" value ="{id_pelanggan}"readonly>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="{nama}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">E - mail</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="" value="{email}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="" value="{tgl_lahir}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Umur</label>
        <input type="text" class="form-control" id="umur" name="umur" placeholder="" value="{umur}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" value="{alamat}">
      </div>
     
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?php  echo base_url('pelanggan') ?>" class="btn btn-danger">Cancel </a>
    </div>
    {/result}
  </form>
  </section><!-- /.content -->
  <?php
  $this->load->view('_partials/js');
  ?>
  <!--tambahkan custom js disini-->
  <?php
  $this->load->view('_partials/footer');
  ?>