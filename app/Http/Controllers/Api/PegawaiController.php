<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FilePegawai;
use App\Models\Pegawai;
use App\Models\Pendidikan;
use App\Models\RiwayatPendidikan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Illuminate\Validation\ValidationException;

class PegawaiController extends Controller
{
    public function photo(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'foto' => ['required', 'mimes:jpeg,jpg,png,svg']
        ]);
        if ($validator->fails()) {
            $error = ValidationException::withMessages([
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
        $attr['status'] = 1;
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
    public function file(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'file' => ['required','mimes:jpg,jpeg,png,svg,pdf,docx,xlsx']
        ]);
        if($validator->fails()){
            $error = ValidationException::withMessages([
                'file' => 'fails'
            ]);
            throw $error;
        }
        try {
            $name = $request->nama_file.'_'.$request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('/pegawai/file_pegawai',$name);
            FilePegawai::create([
                'name' => $request->nama_file,
                'file' => $path,
                'date' => $request->tanggal_file.' '.Carbon::now()->format('H:i:s'),
                'pegawai_id' => $id,
                'aktifya' => 1
            ]);
            return response()->json($path);
        } catch (\Throwable $th) {
            Storage::delete($path);
            $error = ValidationException::withMessages([
                'file' => 'fails'
            ]);
            throw $error;
        }
    }
    public function filepegawaiindex($id)
    {   
        $query = FilePegawai::where('pegawai_id',$id)->get();
        return datatables()->of($query)->editColumn('file',function($qr){
            return '<a target="_blank" href="'.asset('storage/'.$qr->file).'" class="btn btn-sm btn-success">File</a>';
        })->editColumn('action', function($qr){
            return '<button class="btn btn-sm btn-danger" onclick="buttonfilepegawaidelete(this)" data-id="'.$qr->id.'">Delete</button>';
        })->editColumn('date', function($qr){
            return Carbon::parse($qr->date)->format('d-M-Y H:i:s');
        })->rawColumns(['file','action'])->make(true);
    }
    public function filepegawaidelete($id)
    {
        $qr = FilePegawai::findOrFail($id);
        Storage::delete($qr->file);
        $qr->delete();
        return response()->json($qr->file);
    }
}
