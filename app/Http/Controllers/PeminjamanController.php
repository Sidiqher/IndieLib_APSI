<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Katalog;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        // Mengambil pengguna yang sedang login
        $user = auth()->user();
        
        // Mengambil data peminjaman yang terkait dengan pengguna yang sedang login
        $peminjaman = $user->peminjaman()->with('katalog.buku')->get();
    
        return view('peminjaman', [
            'title' => 'Log Peminjaman',
            'active' => 'Peminjaman',
            'peminjaman' => $peminjaman
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function kembali(Request $request)
    {
        $validatedData = $request->validate([
            'buku_id' => 'required|exists:bukus,id',
        ]);

        // Ambil pengguna yang sedang login
        $nim_nip = auth()->user()->{'nim-nip'};

        // Cari peminjaman berdasarkan buku_id dan nim-nip
        $peminjaman = Peminjaman::where('buku_id', $validatedData['buku_id'])
                                ->where('nim-nip', $nim_nip)
                                ->where('status', 1)
                                ->firstOrFail();

        // Ubah status peminjaman menjadi selesai
        $peminjaman->status = 'selesai';
        $peminjaman->save();

        return redirect('/peminjaman')->with('success', 'Buku berhasil dikembalikan!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'buku_id' => 'required|exists:bukus,id', // Pastikan buku_id ada di tabel bukus
        ]);

        // Ambil nim-nip pengguna yang sedang login
        $nim_nip = auth()->user()->{'nim-nip'};

        // Cari entri di tabel katalog yang sesuai dengan buku_id
        $katalog = Katalog::where('buku_id', $validatedData['buku_id'])
                          ->where('status', 0)
                          ->first();

        // Pastikan entri katalog ditemukan
        if (!$katalog) {
            return redirect()->back()->withErrors(['buku_id' => 'Buku sedang tidak tersedia, mohon cek kembali ketersediaan buku    ']);
        }

        // Tambahkan nim-nip dan katalog_id ke data yang akan disimpan
        $peminjamanData = [
            'nim-nip' => $nim_nip,
            'katalog_id' => $katalog->id
        ];

        // Simpan data ke tabel peminjaman
        Peminjaman::create($peminjamanData);

        $katalog->status = 1;
        $katalog->save();

        $request->session()->flash('success', 'Peminjaman Berhasil!!');
        return redirect('/peminjaman');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
