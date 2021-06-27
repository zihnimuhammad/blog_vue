
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
            <h1 class="m-0">Jenis Penyakit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item active">Jenis Penyakit</li>
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
          <div class="card-tools">
            <a href="<?php echo e(route('create-jenispenyakit')); ?>" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Nama</th>
              <th>Aksi</th>
            </tr>
            <?php $__currentLoopData = $jenispenyakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($jenispenyakit->firstItem() + $key); ?></td>
              <td><?php echo e($item->id); ?></td>
              <td><?php echo e($item->namaJenisPenyakit); ?></td>
              <td>
                <a href="<?php echo e(url('edit-jenispenyakit',$item->id)); ?>"><i class="fas fa-edit"></i></a>
                <a href="<?php echo e(url('delete-jenispenyakit',$item->id)); ?>"><i class="far fa-trash-alt" style="color : red"></i></a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
          <div class="pull-left">
          Showing
          <?php echo e($jenispenyakit->firstItem()); ?>

          to
          <?php echo e($jenispenyakit->lastItem()); ?>

          of
          <?php echo e($jenispenyakit->total()); ?>

          entries
          </div>
          <div class="pull-right">
            <?php echo e($jenispenyakit->links()); ?>

          </div>
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
</html><?php /**PATH D:\PROJECT\laravel\blog_vue\resources\views/Admin/Jenispenyakit/data-jenispenyakit.blade.php ENDPATH**/ ?>