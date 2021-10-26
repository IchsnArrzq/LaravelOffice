<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Pendidikan..." value="{{ $pendidikan->nama ?? old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="pangkat">pangkat</label>
            <input type="text" class="form-control @error('pangkat') is-invalid @enderror" name="pangkat" placeholder="Status Pendidikan..." value="{{ $pendidikan->pangkat ?? old('pangkat') }}">
            @error('pangkat')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ruang">ruang</label>
            <input type="text" class="form-control @error('ruang') is-invalid @enderror" name="ruang" placeholder="Nama Pendidikan..." value="{{ $pendidikan->ruang ?? old('ruang') }}">
            @error('ruang')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="aktifya">aktifya</label>
            <input type="text" class="form-control @error('aktifya') is-invalid @enderror" name="aktifya" placeholder="Status Pendidikan..." value="{{ $pendidikan->aktifya ?? old('aktifya') }}">
            @error('aktifya')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>