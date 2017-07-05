<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD | Edit Data</title>
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
      <center>Edit Data Mahasiswa</center>
    </div>
    <div class="panel-body">
  <?php foreach($mahasiswa as $a){ ?>
   <form action=" <?php echo base_url();?>crud/update " method="post">
      <div class="form-group">
        <label>Stambuk</label>
        <input type="text" class="form-control" name="stambuk" value="<?php echo $a->stambuk ?>">

      <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $a->nama ?>">

      <label>Tempat Lahir</label>
        <input type="text" class="form-control" name="asal" value="<?php echo $a->asal ?>">

      <label>Tanggal Lahir</label>
        <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $a->tgl_lahir ?>">

      <label>Jenis Kelamin</label>
      <div class="radio">
      <label>
       <input type="radio" name="kelamin" value="pria" <?php if ($a->kelamin == "pria"){ echo "checked"; } ?> >
       Pria
       </label>
       </div>
       <div class="radio">
       <label>
       <input type="radio" name="kelamin" value="wanita" <?php if ($a->kelamin == "wanita"){ echo "checked"; } ?> >
       Wanita
      </label>
      </div>


    <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $a->alamat ?>">

      <label>No Hp</label>
        <input type="text" class="form-control" name="no_hp" value="<?php echo $a->no_hp ?>">


      </div>


      <button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-floppy-saved'></span> Updata Data</button>
      <button type="reset" class="btn btn-danger"><span class='glyphicon glyphicon-floppy-remove'></span> Hapus</button>
    </form>
    <?php } ?>
    </div>
  </div>
  </div>
  </div>
  <!-- /container -->


  </body>
</html>
