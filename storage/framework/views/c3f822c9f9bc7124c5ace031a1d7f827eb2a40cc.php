
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
            <h1 class="m-0">Tambah Pesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item"><a href="/data-pesanan">Pesanan</a></li>
              <li class="breadcrumb-item active">Tambah Pesanan</li>
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
          <form class="was-validated" action="<?php echo e(route('simpan-pesanan')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <input type="text" id="orderno" name="orderno" class="form-control" placeholder="Nomor Order" required>
                <div class="invalid-feedback">
                  Nomor Order Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <input type="text" id="idMenu" name="idMenu" class="form-control" placeholder="ID Menu" required>
                <div class="invalid-feedback">
                  ID Menu Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                  <input type="text" id="idPengguna" name="idPengguna" class="form-control" placeholder="ID Pengguna" required>
                  <div class="invalid-feedback">
                    ID Pengguna Harus Diisi.
                  </div>
              </div>
              <div class="form-group">
                <input type="date" id="tanggalPesan" name="tanggalPesan" class="form-control" placeholder="Tanggal Pesanan" required>
                <div class="invalid-feedback">
                  Tanggal Pesanan Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <input type="text" id="mejano" name="mejano" class="form-control" placeholder="Nomor Meja" required>
                <div class="invalid-feedback">
                  Nomor Meja Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <input type="text" id="jumlahPesan" name="jumlahPesan" class="form-control" placeholder="Jumlah Pesanan" required>
                <div class="invalid-feedback">
                  Jumlah Pesanan Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga Pesanan" required>
                <div class="invalid-feedback">
                  Harga Pesanan Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <input type="text" id="totalharga" name="totalharga" class="form-control" placeholder="Total Harga" required>
                <div class="invalid-feedback">
                  Total Harga Harus Diisi.
                </div>
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
</html><?php /**PATH D:\PROJECT\github\blog_vue\resources\views/Admin/Pesanan/create-pesanan.blade.php ENDPATH**/ ?>