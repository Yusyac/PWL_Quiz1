<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Request $request){
        $url = $request->url('https://www.educastudio.com');
    }
}
