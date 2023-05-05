<ul class="navbar-nav bg-orange sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-users"></i>
            <span>Daftar User</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-cart-shopping"></i>
            <span>Daftar Transaksi</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.mobil.index') }}">
            <i class="fas fa-fw fa-car"></i>
            <span>Daftar Mobil</span></a>
    </li>
    
    <hr class="sidebar-divider my-0">
    
    <li class="nav-item active">
        <a class="nav-link" onclick="document.getElementaryById('logout-form').submit() " href="#">
            <i class="fas fa-logout fa-fw"></i>
            <span>Logout</span></a>
            <form id="logour-form" action="#" method="post">
                @csrf
            </form>
    </li>
</ul>