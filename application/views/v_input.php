<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD | Tambah Data</title>
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap-theme.min.css">
  </head>
  <body>

    <!-- +++++ Projects Section +++++ -->
<br><br>
	<div class="container pt">
  <div class="col-md-4">
	 <div class="panel panel-primary">
    <div class="panel-heading">
      <center>Input Data Mahasiswa</center>

    </div>
    <div class="panel-body">
   <form method="post" action=" <?php echo base_url().'crud/tambah_data'; ?> ">
      <div class="form-group">
        <label>Stambuk</label>
        <input type="text" class="form-control" name="stambuk" placeholder="151401358" maxlength="9">
        <?php echo form_error('stambuk'); ?>

      <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" placeholder="Rahmat Dani S">
        <?php echo form_error('nama'); ?>

      <label>Tempat Lahir</label>
        <input type="text" class="form-control" name="asal" placeholder="Ujung Pandang">
        <?php echo form_error('asal'); ?>

      <label>Tanggal Lahir</label>
        <input type="text" class="form-control" name="tgl_lahir" placeholder="05021997" maxlength="8">
        <?php echo form_error('tgl_lahir'); ?>

      <label>Jenis Kelamin</label>

      <div class="radio">
      <label>
       <input type="radio" name="kelamin" value="pria">
       Pria
       </label>
       </div>
       <div class="radio">
       <label>
       <input type="radio" name="kelamin" value="wanita">
       Wanita

      </label>

      </div>



    <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Kuvukiland">
        <?php echo form_error('alamat'); ?>

      <label>No Hp</label>
        <input type="text" class="form-control" name="no_hp" placeholder="085349658697">
        <?php echo form_error('no_hp'); ?>


      </div>


      <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-floppy-saved'></span> Input Data</button>
      <button type="reset" class="btn btn-danger"><span class='glyphicon glyphicon-floppy-remove'></span> Hapus</button>
    </form>
    </div>
  </div>
  </div>
  </div>
  <!-- /container -->


  </body>
</html>
