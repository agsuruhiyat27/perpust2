<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Perpustakaan Agus Ruhiyat
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>assets/demo/demo.css" rel="stylesheet" />
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" /> -->
  <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url()?>assets/img/sidebar-1.jpg">

      <div class="logo"><a href="<?php echo base_url()?>admin" class="simple-text logo-normal">
        <img rel="icon" type="image/png" style="width:50px;" src="<?php echo base_url()?>assets/img/favicon.png"></img>
          Perpustakaan
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($this->uri->segment(2) == null ) { echo "active"; } ?>" >
            <a class="nav-link" href="<?php echo base_url() ?>admin">
              <i class="material-icons">dashboard <?php echo $this->uri->segment(1); ?></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if($this->uri->segment(2) == 'buku' ) { echo "active"; } ?>">
            <a class="nav-link" href="<?php echo base_url() ?>admin/buku">
              <i class="material-icons">book</i>
              <p>Data Buku</p>
            </a>
          </li>
          <?php if($this->session->userdata('isAdmin') == 1):?>
          <li class="nav-item <?php if($this->uri->segment(2) == 'anggota' ) { echo "active"; } ?>">
            <a class="nav-link" href="<?php echo base_url() ?>admin/anggota">
              <i class="material-icons">person</i>
              <p>Data Anggota</p>
            </a>
          </li>
          <?php endif;?>
          <li class="nav-item <?php if($this->uri->segment(2) == 'peminjaman' ) { echo "active"; } ?>">
            <a class="nav-link" href="<?php echo base_url() ?>admin/peminjaman">
              <i class="material-icons">library_books</i>
              <p>Peminjaman</p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>admin/logout">
              <i class="material-icons">login</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>