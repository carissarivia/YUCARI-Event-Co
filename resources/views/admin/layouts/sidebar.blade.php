<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="javascript:void(0)">
            <img src="{{ asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo" style="filter: grayscale(100%);">
            <span class="ms-1 font-weight-bold">Admin Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/sales') ? 'active' : '' }}" href="{{ route('admin.sales') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-basket text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Penjualan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/customers') ? 'active' : '' }}" href="{{ route('admin.customers') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Pelanggan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/feedback') ? 'active' : '' }}" href="{{ route('admin.feedback') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chat-round text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Feedback</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/broadcast') ? 'active' : '' }}" href="{{ route('admin.broadcast') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-send text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Broadcast</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}" href="{{ route('admin.profile') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
