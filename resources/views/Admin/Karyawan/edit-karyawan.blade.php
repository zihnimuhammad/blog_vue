
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
            <h1 class="m-0">Edit Data Karyawan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item"><a href="/data-karyawan">Data Karyawan</a></li>
              <li class="breadcrumb-item active">Edit Data Karyawan</li>
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
          <form class="was-validated" action="{{url('update-karyawan',$kar->id)}}" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="gambarMenu">Nama Karyawan</label>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Karyawan" value="{{$kar->nama}}">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jabatan</label>
                <select name="jabatan" class="form-control" id="exampleFormControlSelect1">
                  <option @if($kar->jabatan =='Manager') selected @endif>Manager</option>
                  <option @if($kar->jabatan =='Barista') selected @endif>Barista</option>
                  <option @if($kar->jabatan =='Kasir') selected @endif>Kasir</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                  <option value="L" @if($kar->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                  <option value="P" @if($kar->jenis_kelamin =='P') selected @endif>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{$kar->tanggal_lahir}}" required>
                <div class="invalid-feedback">
                  Tanggal Lahir Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="No HP" value="{{$kar->no_hp}}" required>
                <div class="invalid-feedback">
                  Nomor HP Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="{{$kar->email}}" required>
                <div class="invalid-feedback">
                  Email Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" id="password" name="password" class="form-control" placeholder="Password" value="{{$kar->password}}" required>
                <div class="invalid-feedback">
                  Password Harus Diisi.
                </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat" required>{{$kar->alamat}}</textarea>
                <div class="invalid-feedback">
                  Alamat Harus Diisi.
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