<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DevController extends Controller
{
    public function get()
    {
        $user_files = request()->user()->pegawai->file_pegawai;
        // dd(request()->file());
        foreach($user_files as $data){
            return Storage::download($data->file);
        }
        // return Storage::download($user_files->file);
    }
}
