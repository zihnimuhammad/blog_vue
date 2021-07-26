
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
              <li class="breadcrumb-item active">Bobot Penyakit</li>
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
          <h1 class="m-0">Bobot Penyakit</h1>
          <div class="card-tools">
            <a href="<?php echo e(route('create-menujenispenyakit')); ?>" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Jenis Penyakit</th>
              <th>Suasana Hati</th>
              <th>Menu</th>
              <th>Nilai Bobot</th>
              <th>Aksi</th>
            </tr>
            <?php $__currentLoopData = $menujenispenyakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($menujenispenyakit->firstItem() + $key); ?></td>
              <td><?php echo e($item->id); ?></td>
              <td><?php echo e($item->jenis->namaJenisPenyakit); ?></td>
              <td><?php echo e($item->suasana->namaSuasanaHati); ?></td>
              <td><?php echo e($item->menus->namaMenu); ?></td>
              <td><?php echo e($item->bobot); ?></td>
              <td>
                <a href="<?php echo e(url('edit-menujenispenyakit',$item->id)); ?>"><i class="fas fa-edit"></i></a>
                <a href="<?php echo e(url('delete-menujenispenyakit',$item->id)); ?>"><i class="far fa-trash-alt" style="color : red"></i></a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
          <div class="pull-left">
          Showing
          <?php echo e($menujenispenyakit->firstItem()); ?>

          to
          <?php echo e($menujenispenyakit->lastItem()); ?>

          of
          <?php echo e($menujenispenyakit->total()); ?>

          entries
          </div>
          <div class="pull-right">
            <?php echo e($menujenispenyakit->links()); ?>

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

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH D:\PROJECT\github\blog_vue\resources\views/Admin/Menujenispenyakit/data-menujenispenyakit.blade.php ENDPATH**/ ?>