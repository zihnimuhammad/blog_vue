
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Admin.Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@include('Admin.Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('Admin.Template.sidebar')
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
            <a href="{{route('create-menujenispenyakit')}}" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
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
            @foreach ($menujenispenyakit as $key => $item)
            <tr>
              <td>{{$menujenispenyakit->firstItem() + $key}}</td>
              <td>{{$item->id}}</td>
              <td>{{$item->jenis->namaJenisPenyakit}}</td>
              <td>{{$item->suasana->namaSuasanaHati}}</td>
              <td>{{$item->menus->namaMenu}}</td>
              <td>{{$item->bobot}}</td>
              <td>
                <a href="{{url('edit-menujenispenyakit',$item->id)}}"><i class="fas fa-edit"></i></a>
                <a href="{{url('delete-menujenispenyakit',$item->id)}}"><i class="far fa-trash-alt" style="color : red"></i></a>
              </td>
            </tr>
            @endforeach
          </table>
          <div class="pull-left">
          Showing
          {{ $menujenispenyakit->firstItem() }}
          to
          {{ $menujenispenyakit->lastItem() }}
          of
          {{ $menujenispenyakit->total() }}
          entries
          </div>
          <div class="pull-right">
            {{ $menujenispenyakit->links() }}
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
  @include('Admin.Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Admin.Template.script')

@include('sweetalert::alert')

</body>
</html>