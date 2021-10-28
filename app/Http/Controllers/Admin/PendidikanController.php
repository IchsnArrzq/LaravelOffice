<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Exception;
use Illuminate\Http\Request;
use Alert;
class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pendidikan.index',[
            'pendidikans' => Pendidikan::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pendidikan.create',[
            'pendidikan' => new Pendidikan()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'status' => 'required'
        ]);
        try {
            Pendidikan::create($request->all());
            Alert::success('Success', 'Success Store Pendidikan');
            return back();
        } catch (Exception $err) {
            Alert::error('Error', $err->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pendidikan.edit',[
            'pendidikan' => Pendidikan::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'status' => 'required'
        ]);
        try {
            Pendidikan::where('id' ,$id)->update($request->except(['_token','_method']));
            Alert::success('Success', 'Success Update Pendidikan');
            return back();
        } catch (Exception $err) {
            Alert::error('Error', $err->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Pendidikan::findOrFail($id)->delete();
            Alert::success('Success' ,'Success Delete Pendidikan');
            return back();
        } catch (Exception $err) {
            Alert::error('Error', $err->getMessage());
            return back();
        }
    }
}
