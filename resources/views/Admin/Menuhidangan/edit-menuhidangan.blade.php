
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
            <h1 class="m-0">Edit Menu Hidangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item"><a href="/data-menuhidangan">Menu Hidangan</a></li>
              <li class="breadcrumb-item active">Edit Menu Hidangan</li>
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
          <form action="{{url('update-menuhidangan',$hid->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="namaMenu">Nama Menu Hidangan</label>
                  <input type="text" id="namaMenu" name="namaMenu" class="form-control" placeholder="Nama Menu Hidangan" value="{{$hid->namaMenu}}">
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" value="{{$hid->keterangan}}">
            </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                  <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga Menu Hidangan" value="{{$hid->harga}}">
              </div>
              <div>
                <label for="gambarMenu">Gambar Menu</label>
              </div>
              <div class="form-group">
                  <input type="file" id="gambarMenu" name="gambarMenu">
              </div>
              <div class="form-group">
                  <img src="{{asset('images/'. $hid->gambarMenu)}}" height="10%" width="50%" alt="" srcset="">
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