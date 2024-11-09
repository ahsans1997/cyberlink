<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (Auth::user()->role)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('packages.index') }}">
                    <i class="icon-rocket menu-icon"></i>
                    <span class="menu-title">Package</span>
                </a>
            </li>

        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ route('orders.index') }}">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Orders List</span>
            </a>
        </li>
        @if (Auth::user()->role)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="icon-rocket menu-icon"></i>
                    <span class="menu-title">Users List</span>
                </a>
            </li>
        @endif
    </ul>
</nav>
