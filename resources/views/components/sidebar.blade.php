<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Absensi MDS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            
            <li class="nav-item">
                <a href="{{route('home')}}"
                    class="nav-link"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
                
            </li>
            <li class="nav-item">
                <a href="{{route('users.index')}}"
                    class="nav-link"><i class="fa-solid fa-user"></i> <span>Users</span></a>
                
            </li>

            <li class="nav-item">
                <a href="{{route('companies.show', 1)}}"
                    class="nav-link"><i class="fa-solid fa-building"></i> <span>Company</span></a>
            </li>

            <li class="nav-item">
                <a href="{{ route('attendances.index') }}" class="nav-link">
                    <i class="fa-solid fa-clipboard-user"></i>
                    <span>Attendances</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="fa-solid fa-person-circle-check"></i>
                    <span>Permission</span>
                </a>
            </li>
</aside>              
</div>