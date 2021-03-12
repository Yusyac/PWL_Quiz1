<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index()
    {
    //Ambil data dari tabel nya
    $pelanggan = DB::table('pelanggans')->paginate(10);

    //Mengirim data ke view nya nanti
    return view('table.pelanggan', ['pelanggans' => $pelanggan]);
}
}
