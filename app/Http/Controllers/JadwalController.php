<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Tbuser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = Jadwal::with('tbuser')->paginate(2);
        $tbjadwal = Jadwal::orderBy('created_at','DESC')->get();
        return view('admin.jadwal.table',compact('tbjadwal'),[
            "title" => "Jadwal",
       ],compact('petugas') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $namaPetugas = tbuser::all();
        return view('admin.jadwal.create',[
            "title" => "Tambah Jadwal"
           
           ], compact('namaPetugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jadwal::create($request->all());

        return redirect()->route('jadwal.index')->with('sukses', 'Jadwal baru di Tambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
