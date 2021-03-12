<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //public function about(){
    //    return '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us<a/>';
    //}

    public function about() {
        $data = array (
            'name' => 'Halaman Home',
            'url' => '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>'
        );
        return view('about-us',$data);
       }
}
