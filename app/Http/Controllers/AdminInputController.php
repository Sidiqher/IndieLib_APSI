<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class AdminInputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->authorize('admin');

        return view('admin.input');
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
            'title' => 'required|string|max:255',
            'penulis' => 'nullable|string|max:255',
            'tahun' => 'nullable|numeric',
            'penerbit' => 'nullable|string|max:255',
            'slug' => 'required|string|max:255',
            'category_id' => 'required',
        ]);

        Buku::create($validatedData);

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('input.index')->with('success', 'Data buku berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
