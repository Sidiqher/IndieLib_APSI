<?php

namespace App\Http\Controllers;

use App\Models\Buku; // Harus ditulis dengan huruf besar sesuai dengan namespace yang benar
use App\Models\User; // Harus ditulis dengan huruf besar sesuai dengan namespace yang benar
use App\Models\Category; // Harus ditulis dengan huruf besar sesuai dengan namespace yang benar
use App\Models\Katalog; // Harus ditulis dengan huruf besar sesuai dengan namespace yang benar
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di ' . $category->name;
        }
        
        
        return view('books', [
            'title' => 'Semua Buku' . $title,
            'active' => 'E-Book',
            'e_book' => Buku::latest()->filter(request(['search', 'category',]))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Buku $Buku)
    {

        return view('book', [
            'jumlahTersedia' => $Buku->katalog()->where('status', 0)->count(),
            'title' => 'E-Book',
            'e_book' => $Buku,
            'active' => 'E-Book'
        ]);
    }
}