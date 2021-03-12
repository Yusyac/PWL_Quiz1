<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function home() {
        $data = array (
            'name' => 'Halaman Home',
            'url' => '<a href="https://www.educastudio.com">https://www.educastudio.com</a>'
        );
        return view('home',$data);
    }
}
