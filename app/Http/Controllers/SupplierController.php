<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index()
    {
        //Ambil data dari tabel nya
        $supplier = DB::table('suppliers')->paginate(10);

        //Mengirim data ke view nya nanti
        return view('table.supplier', ['suppliers' => $supplier]);
    }
}
