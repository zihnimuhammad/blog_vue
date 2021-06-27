
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <?php echo $__env->make('Admin.Template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
            <h1 class="m-0">Tambah Data Karyawan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item"><a href="/data-karyawan">Data Karyawan</a></li>
              <li class="breadcrumb-item active">Tambah Data Karyawan</li>
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
          <form action="<?php echo e(route('simpan-karyawan')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

              <div class="form-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Karyawan">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jabatan</label>
                <select name="jabatan" class="form-control" id="exampleFormControlSelect1">
                  <option>Manager</option>
                  <option>Barista</option>
                  <option>Kasir</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
              </div>
              <div class="form-group">
                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="No HP">
              </div>
              <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" id="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
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
</html><?php /**PATH D:\PROJECT\github\blog_vue\resources\views/Admin/Karyawan/create-karyawan.blade.php ENDPATH**/ ?>