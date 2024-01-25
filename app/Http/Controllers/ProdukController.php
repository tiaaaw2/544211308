<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk; // Tambahkan baris ini untuk mengimport model Produk

class ProdukController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel produk
        $data = Produk::all();

        // Mengembalikan response berupa data dalam format JSON
        return response()->json($data);
    }
}
