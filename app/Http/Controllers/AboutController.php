<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return ('Nama : Dilla Hani Muhaningrum <br> NIM  : 174720120');
    }
}
