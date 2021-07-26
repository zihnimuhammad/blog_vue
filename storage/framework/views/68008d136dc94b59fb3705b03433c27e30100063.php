
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
            <h1 class="m-0">Edit Pesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item"><a href="/data-pesanan">Pesanan</a></li>
              <li class="breadcrumb-item active">Edit Pesanan</li>
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
          <form class="was-validated" action="<?php echo e(url('update-pesanan',$pes->id)); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
              <label for="orderno">Nomor Order</label>
                <input type="text" id="orderno" name="orderno" class="form-control" placeholder="Nomor Order" value="<?php echo e($pes->orderno); ?>" required>
                <div class="invalid-feedback">
                  Nomor Order Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="idMenu">ID Menu</label>
                  <input type="text" id="idMenu" name="idMenu" class="form-control" placeholder="ID Menu" value="<?php echo e($pes->idMenu); ?>" required>
                  <div class="invalid-feedback">
                    ID Menu Harus Diisi.
                  </div>
              </div>
              <div class="form-group">
                <label for="idPengguna">ID Pengguna</label>
                <input type="text" id="idPengguna" name="idPengguna" class="form-control" placeholder="ID Pengguna" value="<?php echo e($pes->idPengguna); ?>" required>
                <div class="invalid-feedback">
                  ID Pengguna Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="mejano">Nomor Meja</label>
                <input type="text" id="mejano" name="mejano" class="form-control" placeholder="Nomor Meja" value="<?php echo e($pes->mejano); ?>" required>
                <div class="invalid-feedback">
                  Nomor Meja Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="jumlahpesan">Jumlah Pesanan</label>
                <input type="text" id="jumlahPesan" name="jumlahPesan" class="form-control" placeholder="Jumlah Pesanan" value="<?php echo e($pes->jumlahPesan); ?>" required>
                <div class="invalid-feedback">
                  Jumlah Pesanan Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga" value="<?php echo e($pes->harga); ?>" required>
                <div class="invalid-feedback">
                  Harga Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="totalharga">Total Harga</label>
                <input type="text" id="totalharga" name="totalharga" class="form-control" placeholder="Total Harga" value="<?php echo e($pes->totalharga); ?>" required>
                <div class="invalid-feedback">
                  Total Harga Harus Diisi.
                </div>
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
</html><?php /**PATH D:\PROJECT\github\blog_vue\resources\views/Admin/Pesanan/edit-pesanan.blade.php ENDPATH**/ ?>