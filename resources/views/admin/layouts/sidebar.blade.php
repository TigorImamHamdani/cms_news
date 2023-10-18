<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-text mx-3">Lara News</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Table News -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('news') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>News</span></a>
    </li>

    <!-- Nav Item - Table Category -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('category.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Category</span></a>
    </li>

    <!-- Nav Item - Table Writer -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('writer.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Writer</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
