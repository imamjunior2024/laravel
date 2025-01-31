        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> SPK<sup> PEMILIHAN KOST</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <span>Home</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('kosans.index') }}">
                    <span>Data Alternatif Kos</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('kriterias.index') }}">
                    <span>Data Kriteria</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('pembobotans.index') }}">
                    <span>Data Pembobotan</span></a>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="{{ route('hasils.index') }}">
                    <span>Hasil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
