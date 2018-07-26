<li class="nav-item mT-30 active">
    <a class='sidebar-link' href="{{ route(ADMIN . '.dash') }}" default>
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>

    @if(auth()->user()->isAdmin() || auth()->user()->isSuperAdmin() )

    <a class='sidebar-link' href="{{ route(ADMIN . '.dash') }}" default>
        <span class="icon-holder">
            <i class="ti-layout-list-post"></i>
        </span>
        <span class="title">Data Mutasi</span>
    </a>

    <a class='sidebar-link' href="{{ route(ADMIN . '.users.index') }}" default>
        <span class="icon-holder">
            <i class=" ti-layout-list-post"></i>
        </span>
        <span class="title">Akun Satker</span>
    </a>

    @else

    <a class='sidebar-link' href="{{ route(ADMIN . '.dash') }}" default>
        <span class="icon-holder">
            <i class=" ti-layout-list-post"></i>
        </span>
        <span class="title">Form Mutasi</span>
    </a>

    @endif

</li>
<li class="nav-item">

</li>
