<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;

use App\Pengantarkota;

use Auth;

class PengantarkotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin=Auth::user()->admins;
        return view('admin.suratpengantar.create', compact ('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin=Auth::user()->admin;

        $pengantarkota = new Pengantarkota();

        $pengantarkota->admin_id = $admin->id;
        // $pengantarkota->jabatan = $request->input ('nama_surat');
        // $pengantarkota->nama = $request->input ('nama_surat');

        $file       = $request->file('nama_surat');
        $fileName   = $file->getClientOriginalName();
        $request->file('nama_surat')->move("suratpengantarkota/", $fileName);

        $pengantarkota->nama_surat = $fileName;

        $pengantarkota->save();

        return redirect('/admin')->with('success', 'Saved');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
