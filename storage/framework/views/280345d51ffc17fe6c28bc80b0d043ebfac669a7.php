
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
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item active">Menu Hidangan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <h1 class="m-0">Menu Hidangan</h1>
          <div class="card-tools">
            <a href="<?php echo e(route('create-menuhidangan')); ?>" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
            <?php $__currentLoopData = $menuhidangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td><?php echo e($item->id); ?></td>
              <td><?php echo e($item->namaMenu); ?></td>
              <td><?php echo e($item->keterangan); ?></td>
              <td><?php echo e($item->harga); ?></td>
              <td>
                <a href="<?php echo e(asset('images/'. $item->gambarMenu)); ?>" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
              </td>
              <td>
                <a href="<?php echo e(url('edit-menuhidangan',$item->id)); ?>"><i class="fas fa-edit"></i></a>
                |
                <a href="<?php echo e(url('delete-menuhidangan',$item->id)); ?>"><i class="far fa-trash-alt" style="color : red"></i></a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
          
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
</html><?php /**PATH D:\PROJECT\github\blog_vue\resources\views/Admin/Menuhidangan/data-menuhidangan.blade.php ENDPATH**/ ?>