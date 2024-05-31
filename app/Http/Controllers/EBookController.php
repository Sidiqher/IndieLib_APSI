<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class PengajuanController extends Controller
{


    public function downloadPDF($e_bookId)
    {
        // Ambil e-book berdasarkan ID
        $e_book = EBook::findOrFail($e_bookId);

    }
}