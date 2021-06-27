<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="<?php echo e(asset('Gambar/logo.png')); ?>" alt="AdminLTE Logo" class="brand-image" style="opacity: 1">
      <span class="brand-text font-weight-light">CAFEGUE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('Gambar/logo.png')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">CAFEGUE</a>
        </div>
      </div>
    -->
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/beranda" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-karyawan" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Karyawan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-menuhidangan" class="nav-link">
              <i class="nav-icon fas fa-utensils"></i>
              <p>
                Menu Hidangan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-pesanan" class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Data Pesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-historypesanan" class="nav-link">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                History Pesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-penyakitjenis" class="nav-link">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Jenis Penyakit
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-menujenispenyakit" class="nav-link">
              <i class="nav-icon fas fa-book-medical"></i>
              <p>
                Bobot Jenis Penyakit
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-suasanahati" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Suasana Hati
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/data-datalatih" class="nav-link">
              <i class="nav-icon fas fa-laptop-medical"></i>
              <p>
                Data Latih
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/login/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\xampp\htdocs\ad\blog_vue\resources\views/Admin/Template/sidebar.blade.php ENDPATH**/ ?>