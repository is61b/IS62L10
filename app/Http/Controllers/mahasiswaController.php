<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $mhs = Mahasiswa::all();
        return view('Mahasiswa.index',compact('mhs','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('Mahasiswa.form',compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswa;
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->tempat_lahir = $request->tempat;
        $mhs->tanggal_lahir = $request->tanggal;
        $mhs->dosens_id = $request->dosen;
        $mhs->jk = $request->jk;
        $mhs->foto = $request->foto->getClientOriginalName();

        $request->foto->move('foto',$request->foto->getClientOriginalName());

        $mhs->save();

        return redirect('/mhs');
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
        $mhs = Mahasiswa::find($id);
        $dosen = Dosen::all();
        return view('Mahasiswa.edit',compact('mhs','dosen'));
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
