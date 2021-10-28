<!--App Sidebar-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" href="{{ route('home') }}"><i class="side-menu__icon" data-eva="monitor-outline"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide {{ request()->is('admin/master*') ? 'active is-expanded' : '' }}">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="file-text-outline"></i><span class="side-menu__label">Master</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li class="{{ request()->is('admin/master/pegawai*') ? 'active' : '' }}"><a class="slide-item {{ request()->is('admin/master/pegawai*') ? 'active' : '' }}" href="{{ route('admin.pegawai.index') }}">Pegawai</a></li>
                <li class="{{ request()->is('admin/master/jabatan*') ? 'active' : '' }}"><a class="slide-item {{ request()->is('admin/master/jabatan*') ? 'active' : '' }}" href="{{ route('admin.jabatan.index') }}">Jabatan</a></li>
                <li class="{{ request()->is('admin/master/agama*') ? 'active' : '' }}"><a class="slide-item {{ request()->is('admin/master/agama*') ? 'active' : '' }}" href="{{ route('admin.agama.index') }}">Agama</a></li>
                <li class="{{ request()->is('admin/master/dokumen*') ? 'active' : '' }}"><a class="slide-item {{ request()->is('admin/master/dokumen*') ? 'active' : '' }}" href="{{ route('admin.dokumen.index') }}">Dokumen</a></li>
                <li class="{{ request()->is('admin/master/status_pernikahan*') ? 'active' : '' }}"><a class="slide-item {{ request()->is('admin/master/status_pernikahan*') ? 'active' : '' }}" href="{{ route('admin.status_pernikahan.index') }}">Status Pernikahan</a></li>
                <li class="{{ request()->is('admin/master/pendidikan*') ? 'active' : '' }}"><a class="slide-item {{ request()->is('admin/master/pendidikan*') ? 'active' : '' }}" href="{{ route('admin.pendidikan.index') }}">Pendidikan</a></li>
                <li class="{{ request()->is('admin/master/golongan*') ? 'active' : '' }}"><a class="slide-item {{ request()->is('admin/master/golongan*') ? 'active' : '' }}" href="{{ route('admin.golongan.index') }}">Golongan</a></li>
                <li class="{{ request()->is('admin/master/keahlian*') ? 'active' : '' }}"><a class="slide-item {{ request()->is('admin/master/keahlian*') ? 'active' : '' }}" href="{{ route('admin.keahlian.index') }}">Keahlian</a></li>
            </ul>
        </li>
    </ul>
</aside>
<!--/App Sidebar-->