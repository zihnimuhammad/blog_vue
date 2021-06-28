
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <?php echo $__env->make('Admin.Template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
<?php echo $__env->make('Admin.Template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php echo $__env->make('Admin.Template.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Latih</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item"><a href="/data-datalatih">Data Latih</a></li>
              <li class="breadcrumb-item active">Edit Data Latih</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        
        <div class="card-body">
          <form action="<?php echo e(url('update-pesanan',$dat->id)); ?>" method="post">
            <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <label for="idJenisPenyakit">ID Jenis Penyakit</label>
                <input type="text" id="idJenisPenyakit" name="idJenisPenyakit" class="form-control" placeholder="ID Jenis Penyakit" value="<?php echo e($dat->idJenisPenyakit); ?>">
              </div>
              <div class="form-group">
                <label for="idSuasanaHati">ID Suasana Hati</label>
                <input type="text" id="idSuasanaHati" name="idSuasanaHati" class="form-control" placeholder="ID Suasana Hati" value="<?php echo e($dat->idSuasanaHati); ?>">
              </div>
              <div class="form-group">
                <label for="idMenu">ID Menu</label>
                <input type="text" id="idMenu" name="idMenu" class="form-control" placeholder="ID Menu" value="<?php echo e($dat->idMenu); ?>">
              </div>
              <div class="form-group">
                <label for="nilaiBobotLatig">Nilai Bobot</label>
                <input type="text" id="nilaiBobotLatig" name="nilaiBobotLatig" class="form-control" placeholder="Nilai Bobot" value="<?php echo e($dat->nilaiBobotLatig); ?>">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php echo $__env->make('Admin.Template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php echo $__env->make('Admin.Template.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\PROJECT\github\blog_vue\resources\views/Admin/Datalatih/edit-datalatih.blade.php ENDPATH**/ ?>