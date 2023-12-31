@section('sidebar-admin')
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard Admin</li>
            <li>
                <a href="{{ route('dashboardAdmin') }}">
                    <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-pencil"></i><span class="nav-text">Kelola Akun</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('daftarAdmin')}}">Admin</a></li>
                    <li><a href="{{route('daftarPerusahaan')}}">Perusahaan</a></li>
                    <li><a href="{{route('daftarPelamar')}}">Member</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('adminDaftarLoker')}}">
                    <i class="icon-notebook"></i><span class="nav-text">Loker</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?');"><i class="icon-logout"></i><span class="nav-text">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
@endsection
