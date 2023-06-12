 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img style="background-color: white;" src="adminlte\dist\img\credit\Onlibrary.png" alt="Logo Onlibrary" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Onlibrary</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img style="background-color: grey;" src="adminlte\dist\img\credit\Profil.png" class="img-circle elevation-2" alt="Avatar">
        </div>
        <div class="info">
          <span style="color: #ffffff;">Selamat datang
            <br> {{ auth()->user()->name }}
          </span>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/dashboard" class="nav-link @yield('active-dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Menu</li>

        <span>
          <li class="nav-item">
            <a href="/transaksi" class="nav-link @yield('active-data-master')">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Kelola Data 
                <i class="fas fa-caret-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kategori" class="nav-link @yield('active-kategori')">
                &nbsp;&nbsp;&nbsp;&nbsp;
                  <i class="nav-icon fas fa-folder"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/rak" class="nav-link @yield('active-rak')">
                &nbsp;&nbsp;&nbsp;&nbsp;  
                  <i class="nav-icon fas fa-archive"></i>
                  <p>Rak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penerbit" class="nav-link @yield('active-penerbit')">
                &nbsp;&nbsp;&nbsp;&nbsp;  
                  <i class="nav-icon fas fa-pencil-alt"></i>
                  <p>Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/buku" class="nav-link @yield('active-buku')">
                &nbsp;&nbsp;&nbsp;&nbsp;  
                  <i class="nav-icon fas fa-book"></i>
                  <p>Buku</p>
                </a>
              </li>
            </ul>
          </li>
        </span>

        <li class="nav-item">
          <a href="/transaksi" class="nav-link @yield('active-transaksi')">
            <i class="fas fa-exchange-alt"></i>
            <p>
              Transaksi
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/chart" class="nav-link @yield('active-chart')">
            <i class="fas fa-chart-bar"></i>
            <p>
              Grafik
            </p>
          </a>
        </li>

         
          @role('admin')
              <li class="nav-header">Kelola Pengguna</li>
              <li class="nav-item">
                <a href="/user" class="nav-link @yield('active-user')">
                  <i class="fas fa-users"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
          @endrole
        </ul>
      </nav>
    </div>
  </aside>