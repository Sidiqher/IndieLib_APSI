<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Katalog;
use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Http\Request;

class AdminPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $this->authorize('admin');

        $query = Peminjaman::where('status', 1);

        if ($title = $request->input('title')) {
            $query->whereHas('katalog.buku', function($query) use ($title) {
                $query->where('title', 'like', '%' . $title . '%');
            });
        }

        if ($peminjam = $request->input('nim-nip')) {
            $query->whereHas('user', function($query) use ($peminjam) {
                $query->where('nim-nip', 'like', '%' . $peminjam . '%');
            });
        }

        return view('admin.daftarpinjam', [
            'daftarpinjam' => $query->latest()->paginate(6)->withQueryString()
        ]);
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
        $request->validate([
            'katalog_id' => 'required|exists:peminjamans,katalog_id',
            'katalog_id' => 'required|exists:katalogs,id',
        ]);

        $peminjaman = Peminjaman::where('katalog_id', $request['katalog_id'])
        ->where('status', 1)
        ->firstOrFail();
        
        $katalog= Katalog::where('id', $request['katalog_id'])
        ->where('status', 1)
        ->firstOrFail();

        // Perbarui status peminjaman menjadi 'selesai'
        $peminjaman->status = 0;
        $peminjaman->save();

        $katalog->status = 0;
        $katalog->save();


        $request->session()->flash('success', 'Pengembalian Berhasil!!');
        return redirect()->route('daftarpeminjaman.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
