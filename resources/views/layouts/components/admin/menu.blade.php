<!--App Sidebar-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" href="{{ route('home') }}"><i class="side-menu__icon" data-eva="monitor-outline"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide @if(request()->routeIs('admin.master.*')) active is-expanded @endif ">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="file-text-outline"></i><span class="side-menu__label">Master</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.pegawai.index') }}">Pegawai</a></li>
                <li><a class="slide-item" href="{{ route('admin.jabatan.index') }}">Jabatan</a></li>
                <li><a class="slide-item" href="{{ route('admin.agama.index') }}">Agama</a></li>
                <li><a class="slide-item" href="{{ route('admin.dokumen.index') }}">Dokumen</a></li>
                <li><a class="slide-item" href="{{ route('admin.status_pernikahan.index') }}">Status Pernikahan</a></li>
                <li><a class="slide-item" href="{{ route('admin.pendidikan.index') }}">Pendidikan</a></li>
                <li><a class="slide-item" href="{{ route('admin.golongan.index') }}">Golongan</a></li>
                <li><a class="slide-item" href="{{ route('admin.keahlian.index') }}">Keahlian</a></li>
            </ul>
        </li>
    </ul>
</aside>
<!--/App Sidebar-->