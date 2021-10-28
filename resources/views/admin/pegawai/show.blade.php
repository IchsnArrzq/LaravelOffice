@extends('layouts.app')
@section('title', 'Pegawai Detail')
@push('bread')
<li class="breadcrumb-item"><a href="{{ route('admin.setting.index') }}">Setting</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.pegawai.index') }}">Pegawai</a></li>
<li class="breadcrumb-item active">{{ $pegawai->nip }}</li>
@endpush
@section('content')
<!-- Row -->
<div class="row row-sm">
    <div class="col-lg-3">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="pl-0">
                    <div class="main-profile-overview">
                        <div class="main-img-user profile-user">
                            @if($pegawai->foto != '')
                            <img alt="" id="image" src="{{ asset('storage/'.$pegawai->foto) }}">
                            @else
                            <img alt="" id="image" src="{{ asset('assets/img/brand/icon-2.png') }}">
                            @endif
                            <a data-effect="effect-scale" data-toggle="modal" href="#modaldemo8" class="fas fa-camera profile-edit modal-effect"></a>
                        </div>
                        <div class="justify-content-between mg-b-20 mt-2 text-center">
                            <div>
                                <h5 class="main-profile-name">{{ $pegawai->user->name }}</h5>
                                <p class="main-profile-name-text text-muted">{{ $pegawai->jabatan->nama }}</p>
                                <p class="user-info-rating mt-2 tx-12">
                                    {{ $pegawai->nip }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-2 text-center">
                            <a href="#" class="btn btn-info">{{ $pegawai->golongan->nama }} / {{ $pegawai->golongan->ruang }} {{ $pegawai->golongan->pangkat }}</a>
                        </div>
                    </div><!-- main-profile-overview -->
                </div>
            </div>
            <div class="card-footer p-0 d-flex justify-content-center">
                <button class="btn btn-sm btn-danger" id="buttonphotodelete">Delete Photo Profile</button>
            </div>
        </div>
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="main-content-label tx-13 mg-b-25">
                    Social
                </div>
                <div class="main-profile-social-list">
                    <div class="media">
                        <div class="media-icon bg-info-transparent text-info">
                            <i class="icon ion-logo-facebook"></i>
                        </div>
                        <div class="media-body">
                            <span>Facebook</span> <a href="{{ $pegawai->facebook }}">{{ \Str::limit($pegawai->facebook,22) }}</a>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-icon bg-danger-transparent text-danger">
                            <i class="icon ion-logo-instagram"></i>
                        </div>
                        <div class="media-body">
                            <span>Instagram</span> <a href="{{ $pegawai->instagram }}">{{ \Str::limit($pegawai->instagram,22) }}</a>
                        </div>
                    </div>
                </div><!-- main-profile-social-list -->
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="main-content-body main-content-body-profile card mg-b-20">
            <nav class="nav main-nav-line">
                <a class="nav-link active" data-toggle="tab" href="#pendidikan">Pendidikan</a>
                <a class="nav-link" data-toggle="tab" href="#file">File Pegawai</a>
                <a class="nav-link" data-toggle="tab" href="#diklat">Diklat</a>
                <a class="nav-link" data-toggle="tab" href="#pelanggaran">Pelanggaran</a>
                <a class="nav-link" data-toggle="tab" href="#mutasi">Mutasi</a>
            </nav>
            <!-- main-profile-body -->
            <div class="main-profile-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="pendidikan">
                        <div class="card-body">
                            <a class="modal-effect btn btn-sm btn-dark mb-4" data-effect="effect-scale" data-toggle="modal" href="#modaldemo7">Add Riwayat Pendidikan</a>
                            <div class="table-responsive">
                                <table class="table table-striped" id="datatablependidikan">
                                    <thead>
                                        <tr>
                                            <th>Tingkat Pendidikan</th>
                                            <th>Nm sekolah / Universitas</th>
                                            <th>Lokasi</th>
                                            <th>Jurusan</th>
                                            <th>Nomor Ijazah</th>
                                            <th>Tanggal Ijazah</th>
                                            <th>Nama Kepsek / Rektor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <label class="main-content-label tx-13 mg-b-20">Personal Details</label>
                            <div class="table-responsive">
                                <table class="table row table-borderless mb-0">
                                    <tbody class="col-lg-12 col-xl-6 p-0">
                                        <tr>
                                            <td class="border-top-0 pt-0"><span class="font-weight-semibold">Nama Lengkap :</span>{{ $pegawai->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0"><span class="font-weight-semibold">Nik :</span> {{ $pegawai->nik }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0"><span class="font-weight-semibold">Tanggal Lahir :</span> {{ \Carbon\Carbon::parse($pegawai->tanggal_lahir)->format('Y M d') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0 pt-0"><span class="font-weight-semibold">Tempat Lahir :</span>{{ $pegawai->tempat_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0"><span class="font-weight-semibold">Agama :</span> {{ $pegawai->agama->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0"><span class="font-weight-semibold">Pendidikan Terakhir </span> {{ $pegawai->pendidikan->nama }}</td>
                                        </tr>
                                    </tbody>
                                    <tbody class="col-lg-12 col-xl-6 p-0 border-top-0">
                                        <tr>
                                            <td class="border-top-0 pt-0"><span class="font-weight-semibold">NIP Pegawai :</span> {{ $pegawai->nip }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0"><span class="font-weight-semibold">Email :</span> {{ $pegawai->user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0"><span class="font-weight-semibold">No HP :</span> {{ $pegawai->no_hp }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0"><span class="font-weight-semibold">Status Pernikahan :</span> {{ $pegawai->status_pernikahan->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0"><span class="font-weight-semibold">Jenis Kelamin :</span> {{ $pegawai->jenis_kelamin }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <label class="main-content-label tx-13 mg-b-20">Work & Education</label>
                            <div class="main-profile-work-list d-md-flex">
                                <div class="media">
                                    <div class="media-logo bg-success-transparent text-success">
                                        <i class="icon ion-logo-whatsapp"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6>Web Designer at <a href="">Spruko</a></h6><span>2018 - present</span>
                                        <p>Past Work: Spruko, Inc.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-logo bg-danger-transparent text-danger">
                                        <i class="icon ion-logo-buffer"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6>Studied at <a href="">University</a></h6><span>2004-2008</span>
                                        <p>Graduation: Bachelor of Science in Computer Science</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <label class="main-content-label tx-13 mg-b-20">Skills</label>
                            <div class="skill-tags">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">Java Script</a></li>
                                    <li><a href="#">Photo Shop</a></li>
                                    <li><a href="#">Php</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">Sass</a></li>
                                    <li><a href="#">Angular</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <label class="main-content-label tx-13 mg-b-20">Contact</label>
                            <div class="main-profile-contact-list d-md-flex">
                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="icon ion-md-phone-portrait"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Mobile</span>
                                        <div>
                                            +245 354 654
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="icon ion-logo-slack"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Slack</span>
                                        <div>
                                            @spruko.w
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-info-transparent text-info">
                                        <i class="icon ion-md-locate"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Current Address</span>
                                        <div>
                                            San Francisco, CA
                                        </div>
                                    </div>
                                </div>
                            </div><!-- main-profile-contact-list -->
                        </div>
                    </div>
                    <div class="tab-pane" id="file">
                        <div class="card-body">
                            <div class="row row-sm">
                                <div class="col-6 col-md-3">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/1.jpg">
                                </div>
                                <div class="col-6 col-md-3">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/2.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10 mg-md-t-0">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/3.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10 mg-md-t-0">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/4.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/5.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/6.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/7.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/8.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/9.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/10.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/17.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/12.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/13.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/14.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/15.jpg">
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <img alt="Responsive image" class="img-thumbnail" src="../../../assets/img/photos/16.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="diklat">
                        <div class="card-body">
                            <div class="row row-sm">
                                <div class="col-6 col-md-3">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/female/1.jpg">
                                            <h6 class="mb-0 mt-3">Lisa Lee</h6>
                                            <span class="tx-13 text-muted">Web designer</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/male/11.jpg">
                                            <h6 class="mb-0 mt-3">James Dyer</h6>
                                            <span class="tx-13 text-muted">App Developer</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10 mg-md-t-0">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/male/2.jpg">
                                            <h6 class="mb-0 mt-3">Matt Scott</h6>
                                            <span class="tx-13 text-muted">Web Developer</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fas fa-star-half-alt text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10 mg-md-t-0">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/female/3.jpg">
                                            <h6 class="mb-0 mt-3">Audrey MacLeod</h6>
                                            <span class="tx-13 text-muted">Manager</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/male/4.jpg">
                                            <h6 class="mb-0 mt-3">Trevor Kelly</h6>
                                            <span class="tx-13 text-muted">Web designer</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/female/5.jpg">
                                            <h6 class="mb-0 mt-3">Kylie Rees</h6>
                                            <span class="tx-13 text-muted">App designer</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fas fa-star-half-alt text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/male/6.jpg">
                                            <h6 class="mb-0 mt-3">Piers Poole</h6>
                                            <span class="tx-13 text-muted">Web designer</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fas fa-star-half-alt text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/female/7.jpg">
                                            <h6 class="mb-0 mt-3">Tracey Lewis</h6>
                                            <span class="tx-13 text-muted">Administrator</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/male/8.jpg">
                                            <h6 class="mb-0 mt-3">Warren Jones</h6>
                                            <span class="tx-13 text-muted">App Developer</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fas fa-star-half-alt text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/female/8.jpg">
                                            <h6 class="mb-0 mt-3">Alison Turner</h6>
                                            <span class="tx-13 text-muted">CEO</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/male/10.jpg">
                                            <h6 class="mb-0 mt-3">Austin Martin</h6>
                                            <span class="tx-13 text-muted">Team Leader</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mg-t-10">
                                    <div class="card shadow-none">
                                        <div class="card-body text-center">
                                            <img alt="Responsive image" class="avatar-xxl rounded-circle" src="../../../assets/img/users/female/11.jpg">
                                            <h6 class="mb-0 mt-3">Lisa Lee</h6>
                                            <span class="tx-13 text-muted">Project manager</span>
                                            <p class="user-info-rating mt-2 tx-11 mb-0">
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fa fa-star text-warning"> </i></a>
                                                <a href="#"><i class="fas fa-star-half-alt text-warning"> </i></a>
                                                <a href="#"><i class="far fa-star text-warning"> </i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="pelanggaran">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="card-header pl-0 pt-0">
                                        <div class="media">
                                            <div class="media-user mr-2">
                                                <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../../../assets/img/users/male/15.jpg"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mg-t-9">Peter Hill</h6>
                                                <span class="text-primary">just now</span>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="dropdown show">
                                                    <a class="new" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit Post</a>
                                                        <a class="dropdown-item" href="#">Delete Post</a>
                                                        <a class="dropdown-item" href="#">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div>
                                        <img src="../../../assets/img/photos/1.jpg" alt="img" class="w-100">
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="card-header pl-0 pt-0">
                                        <div class="media">
                                            <div class="media-user mr-2">
                                                <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../../../assets/img/users/male/15.jpg"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mg-t-9">Peter Hill</h6>
                                                <span class="text-dark">Sep 26 2019, 10:14am</span>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="dropdown show">
                                                    <a class="new" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit Post</a>
                                                        <a class="dropdown-item" href="#">Delete Post</a>
                                                        <a class="dropdown-item" href="#">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div class="d-flex">
                                        <img src="../../../assets/img/photos/2.jpg" alt="img" class="wd-45p m-1">
                                        <img src="../../../assets/img/photos/3.jpg" alt="img" class="wd-45p m-1">
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="card-header pl-0 pt-0">
                                        <div class="media">
                                            <div class="media-user mr-2">
                                                <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../../../assets/img/users/male/15.jpg"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mg-t-9">Peter Hill</h6>
                                                <span class="text-dark">Sep 22 2019, 10:14am</span>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="dropdown show">
                                                    <a class="new" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit Post</a>
                                                        <a class="dropdown-item" href="#">Delete Post</a>
                                                        <a class="dropdown-item" href="#">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div>
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="mutasi">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="card-header pl-0 pt-0">
                                        <div class="media">
                                            <div class="media-user mr-2">
                                                <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../../../assets/img/users/male/15.jpg"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mg-t-9">Peter Hill</h6>
                                                <span class="text-primary">just now</span>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="dropdown show">
                                                    <a class="new" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit Post</a>
                                                        <a class="dropdown-item" href="#">Delete Post</a>
                                                        <a class="dropdown-item" href="#">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div>
                                        <img src="../../../assets/img/photos/1.jpg" alt="img" class="w-100">
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="card-header pl-0 pt-0">
                                        <div class="media">
                                            <div class="media-user mr-2">
                                                <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../../../assets/img/users/male/15.jpg"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mg-t-9">Peter Hill</h6>
                                                <span class="text-dark">Sep 26 2019, 10:14am</span>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="dropdown show">
                                                    <a class="new" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit Post</a>
                                                        <a class="dropdown-item" href="#">Delete Post</a>
                                                        <a class="dropdown-item" href="#">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div class="d-flex">
                                        <img src="../../../assets/img/photos/2.jpg" alt="img" class="wd-45p m-1">
                                        <img src="../../../assets/img/photos/3.jpg" alt="img" class="wd-45p m-1">
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="card-header pl-0 pt-0">
                                        <div class="media">
                                            <div class="media-user mr-2">
                                                <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../../../assets/img/users/male/15.jpg"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 mg-t-9">Peter Hill</h6>
                                                <span class="text-dark">Sep 22 2019, 10:14am</span>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="dropdown show">
                                                    <a class="new" href="JavaScript:void(0);" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit Post</a>
                                                        <a class="dropdown-item" href="#">Delete Post</a>
                                                        <a class="dropdown-item" href="#">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div>
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/XZmGGAbHqa0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-profile-body -->
        </div>
    </div>
</div>
<input type="hidden" id="id" value="{{ $pegawai->id }}">
<!--/ Row -->
@include('admin.pegawai.modal')
@stop
@push('admin.head')
<!---Sweet-alert Css-->
<link href="{{ asset('assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet" />
@endpush
@push('admin.script')
<!-- Sweet alert Plugin -->
<script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
<script>
    var id = $('#id').val()
    $(document).ready(function() {
        $('#datatablependidikan').DataTable({
            serverSide: true,
            processing: true,
            destroy: true,
            ajax: `/api/admin/pegawai/riwayatpendidikan/${id}`,
            columns: [{
                    data: 'pendidikan_id',
                    name: 'pendidikan_id'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'lokasi',
                    name: 'lokasi'
                },
                {
                    data: 'jurusan',
                    name: 'jurusan'
                },
                {
                    data: 'nomor_ijazah',
                    name: 'nomor_ijazah'
                },
                {
                    data: 'tanggal_ijazah',
                    name: 'tanggal_ijazah'
                },
                {
                    data: 'nama_kepsek_rektor',
                    name: 'nama_kepsek_rektor'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]
        })
    })
    $('#buttonphoto').on('click', function() {
        let fd = new FormData()
        if ($('#foto')[0].files[0].size >= 2004403) {
            swal({
                title: "Something Went Wrong",
                text: "file size exceeds the max upload limit of 2 mb",
                type: "error",
                showCancelButton: true,
                confirmButtonText: 'Exit'
            });
        } else {
            fd.append('foto', $('#foto')[0].files[0])
            $.ajax({
                url: `/api/admin/pegawai/photo/${id}`,
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $('#image').attr('src', response)
                    swal({
                        title: "Successfully",
                        text: "Profile photo successfully changed",
                        type: "success",
                        showCancelButton: true,
                        confirmButtonText: 'Exit'
                    });
                },
                error: function(error) {
                    console.error(error)
                    swal({
                        title: "Something Went Wrong",
                        text: error.statusTexts,
                        type: "error",
                        showCancelButton: true,
                        confirmButtonText: 'Exit'
                    });
                }
            })
        }
    })
    $('#buttonpendidikan').on('click', function() {
        let data = $('#modalpendidikan').serializeArray()
        var indexed_array = {};
        $.map(data, function(n, i) {
            indexed_array[n['name']] = n['value'];
        });
        $.ajax({
            url: `/api/admin/pegawai/riwayatpendidikan/store/${id}`,
            method: 'post',
            data: indexed_array,
            success: function(response) {
                console.log(response)
                swal({
                    title: "Successfully",
                    text: "congrats form uploaded",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonText: 'Exit'
                });
                $('#datatablependidikan').DataTable().ajax.url(`/api/admin/pegawai/riwayatpendidikan/${id}`).load()
            },
            error: function(error) {
                console.log(error.statusText)
                swal({
                    title: "Something Went Wrong",
                    text: error.statusTexts,
                    type: "error",
                    showCancelButton: true,
                    confirmButtonText: 'Exit'
                });
            }
        })
    });
    $('#buttonphotodelete').on('click', function() {
        $.ajax({
            url: `/api/admin/pegawai/photo/delete/${id}`,
            type: 'get',
            success: function(response) {
                console.log(response)
                $('#image').attr('src', response)
                swal({
                    title: "Successfully",
                    text: "Profile photo has been deleted successfully",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonText: 'Exit'
                });
            },
            error: function(error) {
                console.error(error)
                swal({
                    title: "Something Went Wrong",
                    text: error.statusTexts,
                    type: "error",
                    showCancelButton: true,
                    confirmButtonText: 'Exit'
                });
            }
        })
    })

    function buttonriwayatpendidikandelete(qr) {
        let data_id = $(qr).attr('data-id')
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            showCancelButton: true,
            closeOnConfirm: false,
        }, function() {
            $.ajax({
                url: `/api/admin/pegawai/riwayatpendidikan/delete/${data_id}`,
                success: function(response) {
                    setTimeout(function() {
                        $('#datatablependidikan').DataTable().ajax.url(`/api/admin/pegawai/riwayatpendidikan/${id}`).load()
                        swal({
                            title: "Successfully",
                            text: "Data has been deleted successfully",
                            type: "success",
                            showCancelButton: true,
                            confirmButtonText: 'Exit'
                        })

                    }, 500)
                    swal.close()
                },
                error: function(error) {
                    setTimeout(function() {
                        swal({
                            title: "Something Went Wrong",
                            text: error.statusTexts,
                            type: "error",
                            showCancelButton: true,
                            confirmButtonText: 'Exit'
                        })
                    }, 500)
                    swal.close()
                }
            })
        });
    }
</script>
@endpush