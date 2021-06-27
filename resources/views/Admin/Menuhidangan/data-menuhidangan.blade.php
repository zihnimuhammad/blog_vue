
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
            <a href="{{route('create-menuhidangan')}}" class="btn btn-primary">Tambah Data <i class="fas fa-plus-square"></i></a>
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
            @foreach ($menuhidangan as $item)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->id}}</td>
              <td>{{$item->namaMenu}}</td>
              <td>{{$item->keterangan}}</td>
              <td>{{$item->harga}}</td>
              <td>
                <a href="{{asset('images/'. $item->gambarMenu)}}" target="_blank" rel="noopener noreferrer">Lihat Gambar</a>
              </td>
              <td>
                <a href="{{url('edit-menuhidangan',$item->id)}}"><i class="fas fa-edit"></i></a>
                |
                <a href="{{url('delete-menuhidangan',$item->id)}}"><i class="far fa-trash-alt" style="color : red"></i></a>
              </td>
            </tr>
            @endforeach
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
  @include('Admin.Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Admin.Template.script')

</body>
</html>