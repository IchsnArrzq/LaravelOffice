@extends('layouts.app')
@section('title', 'Pegawai List')
@push('bread')
<li class="breadcrumb-item"><a href="{{ route('admin.setting.index') }}">Setting</a></li>
<li class="breadcrumb-item active">Pegawai</li>
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-between">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-info">Back</a>
                <a href="{{ route('admin.pegawai.create') }}" class="btn btn-sm btn-primary">Create New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>nip</th>
                                <th>nama</th>
                                <th>nik</th>
                                <th>tanggal_lahir</th>
                                <th>tmt</th>
                                <th>tempat_lahir</th>
                                <th>alamat</th>
                                <th>jenis_kelamin</th>
                                <th>no_hp</th>
                                <th>foto</th>
                                <th>facebook</th>
                                <th>instagram</th>
                                <th>tanggal_kenaikan_berkala_terakhir</th>
                                <th>tanggal_kenaikan_pangkat_terakhir</th>
                                <th>status_pns</th>
                                <th>status_user</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawais as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nip }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->tmt }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->no_hp }}</td>
                                <td>{{ $data->foto }}</td>
                                <td>{{ $data->facebook }}</td>
                                <td>{{ $data->instagram }}</td>
                                <td>{{ $data->tanggal_kenaikan_berkala_terakhir }}</td>
                                <td>{{ $data->tanggal_kenaikan_pangkat_terakhir }}</td>
                                <td>{{ $data->status_pns }}</td>
                                <td>{{ $data->status_user }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.pegawai.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.pegawai.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger delete_confirm" type="submit">Destroy</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@push('admin.script')
<script>
    $('#datatable').DataTable({
        responsive: true
    })
    $('.delete_confirm').click(function(event) {
        let form = $(this).closest("form");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>
@endpush