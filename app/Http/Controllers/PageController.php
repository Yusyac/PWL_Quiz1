<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return ('Selamat Datang');
    }

    public function about(){
        return ('Nama : Dilla Hani Muhaningrum <br> NIM  : 1741720120');
    }

    public function article($page){
        return ('Halaman Artikel ID '.$page);
    }
}
