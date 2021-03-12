<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    //Ambil data dari tabel nya
    $karyawan = DB::table('karyawans')->paginate(10);

    //Mengirim data ke view nya nanti
    return view('table.karyawan', ['karyawans' => $karyawan]);
}
}
