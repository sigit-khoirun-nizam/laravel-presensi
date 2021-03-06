<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('AdminLte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">App Presensi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @if (auth()->user()->level == 'karyawan')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="far fa-calendar-alt"></i>
                            <p>
                                Presensi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('presensi-masuk') }}" class="nav-link">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <p>Presensi In</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('presensi-keluar') }}" class="nav-link">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <p>Presensi Out</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-newspaper"></i>
                        <p>
                            Report
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (auth()->user()->level == 'karyawan')
                            <li class="nav-item">
                                <a href="{{ route('filter-data') }}" class="nav-link">
                                    <i class="fas fa-user"></i>
                                    <p>Presensi Employee</p>
                                </a>
                            </li>
                        @endif
                        @if (auth()->user()->level == 'admin')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-user-friends"></i>
                                    <p>Presensi All</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
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
</aside>
