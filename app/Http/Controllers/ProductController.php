<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        //Ambil data dari tabel nya
        $product = DB::table('products')->paginate(10);

        //Mengirim data ke view nya nanti
        return view('table.product', ['products' => $product]);
    }
}
