
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
            <h1 class="m-0">Edit Data Latih</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item"><a href="/data-datalatih">Data Latih</a></li>
              <li class="breadcrumb-item active">Edit Data Latih</li>
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
          <form class="was-validated" action="{{url('update-pesanan',$dat->id)}}" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="idJenisPenyakit">ID Jenis Penyakit</label>
                <input type="text" id="idJenisPenyakit" name="idJenisPenyakit" class="form-control" placeholder="ID Jenis Penyakit" value="{{$dat->idJenisPenyakit}}" required>
                <div class="invalid-feedback">
                  ID Jenis Penyakit Harus Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="idSuasanaHati">ID Suasana Hati</label>
                <input type="text" id="idSuasanaHati" name="idSuasanaHati" class="form-control" placeholder="ID Suasana Hati" value="{{$dat->idSuasanaHati}}" required>
                <div class="invalid-feedback">
                  ID Suasana Hati Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="idMenu">ID Menu</label>
                <input type="text" id="idMenu" name="idMenu" class="form-control" placeholder="ID Menu" value="{{$dat->idMenu}}" required>
                <div class="invalid-feedback">
                  ID Menu Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="nilaiBobotLatig">Nilai Bobot</label>
                <input type="text" id="nilaiBobotLatig" name="nilaiBobotLatig" class="form-control" placeholder="Nilai Bobot" value="{{$dat->nilaiBobotLatig}}" required>
                <div class="invalid-feedback">
                  Nilai Bobot Harus Diisi.
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
  @include('Admin.Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Admin.Template.script')
</body>
</html>