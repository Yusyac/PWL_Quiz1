<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //public function index(){
    //    return '<a href="https://www.educastudio.com/news">https://www.educastudio.com/news</a>';
    //}

    //public function news($news){
    //    return '<a href="https://www.educastudio.com/news/' . $news . '" target="_blank">https://www.educastudio.com/news/' . $news . '</a>';
    //}

    public function news() {
        $data = array (
            'name' => 'Halaman Home',
            'url' => '<a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19</a>'
        );
        return view('news',$data);
       }
}
