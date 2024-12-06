<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Http\Requests\DosenRequest;


class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all(); // Ambil semua data dosen
        return view('dosens.index', compact('dosens'));
    }

    public function getCreateForm()
    {
        return view('dosens.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DosenRequest $request)
    {
        Dosen::create($request->validated());
        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil ditambahkan');    
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::with('mahasiswas')->findOrFail($id); // Cari dosen dan mahasiswa bimbingannya
        return view('dosens.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.edit', compact('dosen'));
    }

    public function getEditForm($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DosenRequest $request, string $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->validated());
        return redirect()->route('dosens.index')->with('success', 'Dosen berhasil diupdate');    
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $dosen = Dosen::findOrFail($id);
    $dosen->delete();
    return redirect()->route('dosens.index')->with('success', 'Dosen berhasil dihapus');
    }

}
