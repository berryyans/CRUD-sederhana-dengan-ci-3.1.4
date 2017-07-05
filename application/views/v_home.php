<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD Sederhana</title>
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap-theme.min.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <a class="navbar-brand" href="<?php echo base_url(); ?>home">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- +++++ Projects Section +++++ -->

	<div class="container pt">
	<div class="panel panel-primary">
	<div class="panel-heading">
    <a href="<?php echo base_url()?>crud/tambah " class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Insert Data</a>
    </div>


	<table class="table table-bordered">
    <tr>
     <td><b>No</b></td>
     <td><b>Stambuk</b></td>
     <td><b>Nama</b></td>
     <td><b>Tempat Lahir</b></td>
     <td><b>Tgl Lahir</b></td>
     <td><b>Kelamin</b></td>
     <td><b>Alamat</b></td>
     <td><b>No Hp</b></td>
     <td><b>Aksi</b></td>
   </tr>
   <?php
   $no = 1;
   foreach ($mahasiswa as $a) {

    ?>
   <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $a->stambuk ?></td>
      <td><?php echo $a->nama ?></td>
      <td><?php echo $a->asal ?></td>
      <td><?php echo $a->tgl_lahir ?></td>
      <td><?php echo $a->kelamin ?></td>
      <td><?php echo $a->alamat ?></td>
      <td><?php echo $a->no_hp ?></td>
      <td><a href='<?php echo base_url()?>crud/hapus/<?php echo $a->stambuk ?>' class='btn btn-danger btn-xs' role='button'><span class='glyphicon glyphicon-trash'></span> Delete</a>

          <a href='<?php echo base_url()?>crud/edit/<?php echo $a->stambuk ?>' class='btn btn-warning btn-xs' role='Edit'><span class='glyphicon glyphicon-pencil'></span> Edit</a></td>
    </tr>

    <?php } ?>
    </table>
	</div>
	</div><!-- /container -->


  </body>
</html>
