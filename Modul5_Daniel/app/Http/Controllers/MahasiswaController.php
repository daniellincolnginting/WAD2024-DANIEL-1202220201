<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Http\Requests\MahasiswaRequest;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::with('dosen')->get(); // Ambil semua data mahasiswa dengan dosennya
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function getCreateForm()
    {
        $dosens = Dosen::all(); // Ambil semua dosen untuk dropdown pilihan
        return view('mahasiswas.create', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosens = Dosen::all(); // Untuk dropdown pilihan dosen
        return view('mahasiswas.create', compact('dosens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MahasiswaRequest $request)
    {
        Mahasiswa::create($request->validated()); // Validasi otomatis dan simpan
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::with('dosen')->findOrFail($id); // Cari mahasiswa beserta dosennya
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $dosens = Dosen::all(); // Untuk dropdown pilihan dosen
        return view('mahasiswas.edit', compact('mahasiswa', 'dosens'));
    }

        public function getEditForm($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $dosens = Dosen::all(); // Ambil dosen untuk pilihan dropdown
        return view('mahasiswas.edit', compact('mahasiswa', 'dosens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MahasiswaRequest $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->validated()); // Validasi otomatis dan update
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $mahasiswa = Mahasiswa::findOrFail($id);
    $mahasiswa->delete();
    return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil dihapus');
    }
}
