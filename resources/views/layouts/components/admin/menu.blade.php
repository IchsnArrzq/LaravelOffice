<!--App Sidebar-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" href="{{ route('home') }}"><i class="side-menu__icon" data-eva="monitor-outline"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="file-text-outline"></i><span class="side-menu__label">Master</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li class="{{ request()->is('admin/master/pegawai*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.pegawai.index') }}">Pegawai</a></li>
                <li class="{{ request()->is('admin/master/jabatan*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.jabatan.index') }}">Jabatan</a></li>
                <li class="{{ request()->is('admin/master/agama*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.agama.index') }}">Agama</a></li>
                <li class="{{ request()->is('admin/master/dokumen*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.dokumen.index') }}">Dokumen</a></li>
                <li class="{{ request()->is('admin/master/status_pernikahan*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.status_pernikahan.index') }}">Status Pernikahan</a></li>
                <li class="{{ request()->is('admin/master/pendidikan*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.pendidikan.index') }}">Pendidikan</a></li>
                <li class="{{ request()->is('admin/master/golongan*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.golongan.index') }}">Golongan</a></li>
                <li class="{{ request()->is('admin/master/keahlian*') ? 'active' : '' }}"><a class="slide-item" href="{{ route('admin.keahlian.index') }}">Keahlian</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="grid-outline"></i><span class="side-menu__label">Kenaikan</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="asd">Kenaikan Pangkat</a></li>
                <li><a class="slide-item" href="sad">Kenaikan Berkala</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="briefcase-outline"></i><span class="side-menu__label">Informasi</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="asd">CPNS</a></li>
                <li><a class="slide-item" href="asd">Unduh</a></li>
                <li><a class="slide-item" href="asd">Kepegawaian</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="file-text-outline"></i><span class="side-menu__label">Form Elements</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="form-elements.html">Form Elements</a></li>
                <li><a class="slide-item" href="form-advanced.html">Advanced Forms</a></li>
                <li><a class="slide-item" href="form-layouts.html">Form Layouts</a></li>
                <li><a class="slide-item" href="form-validation.html">Form Validation</a></li>
                <li><a class="slide-item" href="form-wizards.html">Form Wizards</a></li>
                <li><a class="slide-item" href="form-editor.html">WYSIWYG Editor</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="layout-outline"></i><span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="table-basic.html">Basic Tables</a></li>
                <li><a class="slide-item" href="table-data.html">Data Tables</a></li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="pin-outline"></i><span class="side-menu__label">Mutasi</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="map-leaflet.html">Leaflet</a></li>
                <li><a class="slide-item" href="map-vector.html">Vector Maps</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="stop-circle-outline"></i><span class="side-menu__label">User & Backup</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.user.index') }}">User</a></li>
                <li><a class="slide-item" href="{{ route('admin.backup.index') }}">Backup</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="settings"></i><span class="side-menu__label">Settings</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('admin.role.index') }}">Role</a></li>
                <li><a class="slide-item" href="{{ route('admin.permission.index') }}">Permission</a></li>
                <li><a class="slide-item" href="{{ route('admin.setting.show',1) }}">Application Setting</a></li>
            </ul>
        </li>
    </ul>
</aside>
<!--/App Sidebar-->