<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <hr class="sidebar-divider">
    <!-- Dashboard (Semua User) -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('guru.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

<!-- ================= GURU ================= -->
    {{-- @if(Auth::user()->role == 'guru') --}}

    <li class="nav-item">
        <a class="nav-link" href="{{ route('presensi.index') }}">
            <i class="fas fa-qrcode"></i>
            <span>Presensi Siswa</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('laporan.index') }}">
            <i class="fas fa-chart-bar"></i>
            <span>Laporan Kelas</span>
        </a>
    </li>

    {{-- @endif --}}


</ul>
