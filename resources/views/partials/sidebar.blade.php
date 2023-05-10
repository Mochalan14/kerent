<ul class="navbar-nav bg-orange sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.user.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Daftar User</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.transaksi.index') }}">
            <i class="fas fa-cart-shopping"></i>
            <span>Daftar Transaksi</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.mobil.index') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Daftar Mobil</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.konfirmasi.index') }}">
            <i class="fas fa-fw fa-list-check"></i>
            <span>Daftar Konfirmasi</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.status.index') }}">
            <i class="fas fa-fw fa-face-grin-beam-sweat"></i>
            <span>Daftar Status</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.role.index') }}">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Daftar Role</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <<li class="nav-item active">
        <a class="nav-link" href="{{ route('logout') }}">
            <i class="fas fa-logout"></i>
            <span>Logout</span></a>
        </li>
</ul>
