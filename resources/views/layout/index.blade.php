<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    @includeif('layout/style')
</head>

<body class="hold-transition skin-blue sidebar-mini layout-fixed layout-navbar-fixed">
    <div id="loading" style="display:none"></div>

    <div class="wrapper">
        @includeIf('layout/header')

        <div class="sidebar">
            <h2 class="bg-info">POS CAFE</h2>
            <ul class="nav">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <span>Menu Pesan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('members.index') }}">
                        <span>Member</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pegawais.index') }}">
                        <span>Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('stoks.index') }}">
                        <span>Stok Makanan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('akuns.index') }}">
                        <span>User System</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('logout') }}">
                        <span>Logout </span>  <i class="fas fa-lg pt-3 fa-sign-out-alt" alt="Logout" title="Logout" style="color: red">
                        </i>
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="main" id="main">

            <div class="content-wrapper">
                <div class="">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @includeIf('layout/script')
    @stack('scripts')
</body>

</html>
