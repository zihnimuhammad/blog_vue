
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
              <li class="breadcrumb-item active">History Pesanan</li>
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
          <h1 class="m-0">History Pesanan</h1>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>No Order</th>
              <th>No Meja</th>
              <th>Menu</th>
              <th>Nama Pengguna</th>
              <th>Tanggal Pesan</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Total</th>
            </tr>
            @foreach ($historypesanan as $key => $item)
            <tr>
              <td>{{$historypesanan->firstItem() + $key}}</td>
              <td>{{$item->id}}</td>
              <td>{{$item->orderno}}</td>
              <td>{{$item->mejano}}</td>
              <td>{{$item->menus->namaMenu}}</td>
              <td>{{$item->users->username}}</td>
              <td>{{$item->tanggalPesan}}</td>
              <td>{{$item->jumlahPesan}}</td>
              <td>{{$item->harga}}</td>
              <td>{{$item->totalharga}}</td>
            </tr>
            @endforeach
          </table>
          <div class="pull-left">
          Showing
          {{ $historypesanan->firstItem() }}
          to
          {{ $historypesanan->lastItem() }}
          of
          {{ $historypesanan->total() }}
          entries
          </div>
          <div class="pull-right">
            {{ $historypesanan->links() }}
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


</body>
</html>