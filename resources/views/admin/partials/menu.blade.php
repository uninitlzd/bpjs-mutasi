<li class="nav-item mT-30 active">
    <a class='sidebar-link' href="{{ route(ADMIN . '.dash') }}" default>
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>

    @if(auth()->user()->isAdmin() || auth()->user()->isSuperAdmin() )

        <a class='sidebar-link' href="{{ route(ADMIN . '.submission_history.index') }}" default>
        <span class="icon-holder">
            <i class="ti-layout-list-post"></i>
        </span>
            <span class="title">Riwayat Data</span>
        </a>

        <a class='sidebar-link' href="{{ route(ADMIN . '.users.index') }}" default>
        <span class="icon-holder">
            <i class=" ti-layout-list-post"></i>
        </span>
            <span class="title">Akun Satker</span>
        </a>

        <a class='sidebar-link' href="{{ route(ADMIN . '.promotional_images.index') }}" default>
        <span class="icon-holder">
            <i class=" ti-layout-list-post"></i>
        </span>
            <span class="title">Gambar BPJS</span>
        </a>

        <a class='sidebar-link' href="{{ route(ADMIN . '.news.index') }}" default>
        <span class="icon-holder">
            <i class=" ti-layout-list-post"></i>
        </span>
            <span class="title">Berita BPJS</span>
        </a>

        <a class='sidebar-link' href="{{ route(ADMIN . '.satker.index') }}" default>
        <span class="icon-holder">
            <i class=" ti-layout-list-post"></i>
        </span>
            <span class="title">Satuan Kerja</span>
        </a>

        <a class='sidebar-link' href="{{ route(ADMIN . '.qna.index') }}" default>
        <span class="icon-holder">
            <i class=" ti-quote-right"></i>
        </span>
            <span class="title">QNA</span>
        </a>

        <a class='sidebar-link' href="{{ route(ADMIN . '.get.chat') }}" default>
        <span class="icon-holder">
            <i class=" ti-comments"></i>
        </span>
            <span class="title">Chat</span>
        </a>

    @else

        <a class='sidebar-link' href="{{ route(ADMIN . '.submissions.create') }}" default>
        <span class="icon-holder">
            <i class=" ti-layout-list-post"></i>
        </span>
            <span class="title">Upload Form</span>
        </a>

        <a class='sidebar-link' href="{{ route(ADMIN . '.submissions.index') }}" default>
        <span class="icon-holder">
            <i class=" ti-layout-list-post"></i>
        </span>
            <span class="title">Riwayat Pengisian Data</span>
        </a>

        <a class='sidebar-link' href="{{ route(ADMIN . '.get.chat') }}" default>
        <span class="icon-holder">
            <i class=" ti-comments"></i>
        </span>
            <span class="title">Chat</span>
        </a>

    @endif

</li>
<li class="nav-item">

</li>
