<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //public function index(){
    //    return '<a href="https://www.educastudio.com/program/">https://www.educastudio.com/program</a>';
    //}

    //public function program($program){
    //    return '<a href="https://www.educastudio.com/program/' . $program . '" target="_blank">https://www.educastudio.com/program/' . $program . '</a>';
    //}

    public function program() {
        $data = array (
            'name' => 'Halaman Program',
            'url' => '<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>'
        );
        return view('program',$data);
       }
}
