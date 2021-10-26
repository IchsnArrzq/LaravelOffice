<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" placeholder="NIP ..." value="{{ $pegawai->nip ?? old('nip') }}">
            @error('nip')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="nama">NAMA</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="NAMA ..." value="{{ $pegawai->nama ?? old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="nik">NIP</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" placeholder="NIP ..." value="{{ $pegawai->nik ?? old('nik') }}">
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <label for="">Tanggal Lahir</label>
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                </div>
                <input class="form-control fc-datepicker" name="tanggal_lahir" type="date">
            </div>
        </div>
    </div>
    tmt
    tempat_lahir
    alamat
    jenis_kelamin
    no_hp
    foto
    facebook
    instagram
    tanggal_kenaikan_berkala_terakhir
    tanggal_kenaikan_pangkat_terakhir
    status_pns
    status_user
</div>
