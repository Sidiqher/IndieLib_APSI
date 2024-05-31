<?php

namespace App\Http\Controllers;
use App\Models\Pengajuan;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('pengajuan.pengajuan', [
            'title' => 'Pengajuan',
            'active' => 'Pengajuan'
        ]);
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title'=>'required|max:255',
            'penulis'=>['max:255'],
            'tahun'=>'nullable|min:1901|max:2024|numeric',
        ]);

        // Ambil nim-nip pengguna yang sedang login
        $data = auth()->user()->{'nim-nip'};

        // Tambahkan nim-nip ke data yang akan disimpan
        $validatedData['nim-nip'] = $data;
        
        // Simpan data ke tabel pengajuan
         Pengajuan::create($validatedData);
        
        
        // $databaru = $request->validate([
        //     'file' => 'required|file|mimes:pdf'
        // ]);
        
        // // Baca file yang diunggah
        // $fileContent = file_get_contents($request->file('file')->getRealPath());
        
        // // Konversi file menjadi format base64
        // $fileContentBase64 = base64_encode($fileContent);
        
        // Simpan file dalam bentuk base64 ke dalam tabel buku
        // Buku::create([
        //     'file' => $fileContentBase64,
        //     // Sisipkan kolom-kolom lain yang mungkin ada di tabel buku
        // ]);
        

        // if($request->file('file')){
        //     $databaru['file'] = $request->file('file')->store('buku-file');
        // }

        // Pengajuan::create($validatedData);  
        // Buku::create($databaru);

        $request->session()->flash('success', 'Terimakasih atas pengajuan donasi anda, staff kami akan menghubungi anda secepatnya');
        return redirect('/donasi');
    }
}
