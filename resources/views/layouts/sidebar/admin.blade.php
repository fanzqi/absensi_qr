<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Presensi QR</div>
    </a>

    <hr class="sidebar-divider">
    <!-- Dashboard (Semua User) -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- ================= ADMIN ================= -->
    {{-- @if (Auth::user()->role == 'admin') --}}

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.kelas') }}">
            <i class="fas fa-school"></i>
            <span>Data Kelas</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.siswa') }}">
            <i class="fas fa-users"></i>
            <span>Data Siswa</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.guru') }}">
            <i class="fas fa-user-tie"></i>
            <span>Data Guru</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.mapel') }}">
            <i class="fas fa-book"></i>
            <span>Data Mapel</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.presensi') }}">
            <i class="fas fa-qrcode"></i>
            <span>Presensi QR</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.laporan') }}">
            <i class="fas fa-chart-bar"></i>
            <span>Laporan</span>
        </a>
    </li>


</ul>
