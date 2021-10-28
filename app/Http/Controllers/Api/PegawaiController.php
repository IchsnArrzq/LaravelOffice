<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\Pendidikan;
use App\Models\RiwayatPendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DataTables;

class PegawaiController extends Controller
{
    public function photo(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'foto' => ['required', 'mimes:jpeg,jpg,png,svg']
        ]);
        if ($validator->fails()) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'foto' => ['Fails'],
            ]);
            throw $error;
        }
        $pegawai = Pegawai::findOrFail($id);
        Storage::delete($pegawai->foto);

        $response = $request->file('foto')->storeAs('/pegawai/foto', $request->file('foto')->getClientOriginalName());
        $pegawai->update([
            'foto' => $response
        ]);
        $response = asset('storage/' . $response);

        return response()->json($response);
    }
    public function photodelete($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        Storage::delete($pegawai->foto);
        $pegawai->update([
            'foto' => ''
        ]);
        $response = asset('assets/img/brand/icon-2.png');
        return response()->json($response);
    }
    public function riwayatpendidikanstore(Request $request, $id)
    {
        $attr = $request->validate([
            'jurusan' => "required",
            'lokasi' => "required",
            'nama' => "required",
            'nama_kepsek_rektor' => "required",
            'nomor_ijazah' => "required",
            'pendidikan_id' => "required",
            'tanggal_ijazah' => "required"
        ]);
        $attr['pegawai_id'] = $id;
        RiwayatPendidikan::create($attr);
        return response()->json('success');
    }
    public function riwayatpendidikanindex($id)
    {
        $query = RiwayatPendidikan::where('pegawai_id', $id)->get();
        return datatables()->of($query)->editColumn('pendidikan_id',function($qr){
            return $qr->pendidikan->nama;
        })->editColumn('action', function($qr){
            return "<button class='btn btn-sm btn-danger' onclick='buttonriwayatpendidikandelete(this)' data-id='".$qr->id."'>delete</button>";
        })->rawColumns(['action'])->make(true);
    }
    public function riwayatpendidikandelete($id)
    {
        RiwayatPendidikan::find($id)->delete();
        return response()->json($id);
    }
}
