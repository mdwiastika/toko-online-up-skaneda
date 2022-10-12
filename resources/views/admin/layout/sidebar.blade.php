<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UP-SKANEDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @if (Auth::check())
              
          <a href="#" class="d-block">{{ auth()->user()->nama_lengkap }}</a>
          @else
          <a href="#" class="d-block">Guest</a>
          @endif
        </div>
      </div>

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
        @if (Auth::check())    
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ $title == 'Dashboard' ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datamaster/users/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Tambah User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datamaster/kategori-produk/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Tambah Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datamaster/produk/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Tambah Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/transaksi/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Tambah Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datamaster/users" class="nav-link {{ $title == 'Table User' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datamaster/kategori-produk" class="nav-link {{ $title == 'Table Kategori Produk' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datamaster/produk" class="nav-link {{ $title == 'Table Produk' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/transaksi" class="nav-link {{ $title == 'Table Transaksi' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $title == 'Laporan' ? 'active' : '' }}">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/laporan/laporan-penjualan" class="nav-link {{ $title == 'Table User' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link btn-dark btn-outline-dark" style="border: none; text-align: left">
                <i class="nav-icon fas fa-sign-out-alt text-white-50"></i>
                <p class="text-white-50">
                  Logout
                </p>
                </button>
              </form>
          </li>
        </ul>
        @endif
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>