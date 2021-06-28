
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
          <form action="{{url('update-pesanan',$pes->id)}}" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="idMenu">Id Pesanan</label>
                  <input type="text" id="idMenu" name="idMenu" class="form-control" placeholder="ID Menu" value="{{$pes->idMenu}}">
              </div>
              <div class="form-group">
                <input type="text" id="idPengguna" name="idPengguna" class="form-control" placeholder="ID Pengguna" value="{{$pes->idPengguna}}">
              </div>
              <div class="form-group">
                <input type="text" id="mejano" name="mejano" class="form-control" placeholder="Nomor Meja" value="{{$pes->mejano}}">
              </div>
              <div class="form-group">
                <input type="text" id="jumlahPesan" name="jumlahPesan" class="form-control" placeholder="Jumlah Pesanan" value="{{$pes->jumlahPesan}}">
              </div>
              <div class="form-group">
                <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga" value="{{$pes->harga}}">
              </div>
              <div class="form-group">
                <input type="text" id="totalharga" name="totalharga" class="form-control" placeholder="Total Harga" value="{{$pes->totalharga}}">
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
  @include('Admin.Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Admin.Template.script')
</body>
</html>