<?php

namespace App\Http\Controllers;

    
use App\Models\Tbuser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $tbuser = Tbuser::orderBy('created_at','DESC')->get();
       return view('admin.pengguna.table',compact('tbuser'),[
        "title" => "Data Pengguna"
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengguna.create',[
            "title" => "Tambah Pengguna"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        tbuser::create($request->all());

        return redirect()->route('pengguna.index')->with('sukses', 'Pengguna baru di Tambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tbuser = Tbuser::findOrFail($id);

        return view('admin.pengguna.detail',[
            "title" => "Detail Pengguna"
        ], compact('tbuser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tbuser = Tbuser::findOrFail($id);

        return view('admin.pengguna.edit',[
            "title" => "Detail Pengguna"
        ], compact('tbuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tbuser = Tbuser::findOrFail($id);

        $tbuser->update($request->all());

        return redirect()->route('pengguna.index')->with('sukses', 'Pengguna Telah di update.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tbuser = Tbuser::findOrFail($id);

        $tbuser->delete();

        return redirect()->route('pengguna.index')->with('sukses', 'Pengguna Telah di Hapus.');
    }
}
