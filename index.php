<?php
error_reporting(0);
include("inc/config.php");
?>
<?php include('layout/header.php'); ?>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php include('layout/navbar.php'); ?>

    <?php include('layout/sidebar.php'); ?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <?php include('layout/content.php'); ?>

        </div>
        <!-- /.card -->
    </div>
    <!-- /.content-wrapper -->

    </section>
    <!-- /.content -->

    <?php include('layout/footer.php'); ?>