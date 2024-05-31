<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class TambahCopyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tambahcopy' => 'required'
        ]);

        // Ambil nilai 'tambahcopy' dari validatedData
        $bukuId = $validatedData['tambahcopy'];

        // Siapkan data untuk disimpan di tabel katalog
        $peminjamanData = [
            'buku_id' => $bukuId,
        ];

        Katalog::create($peminjamanData);

        return redirect('/buku')->with('success', 'Buku berhasil ditambahkan ke katalog!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Katalog $katalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Katalog $katalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Katalog $katalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Katalog $katalog)
    {
        //
    }
}
