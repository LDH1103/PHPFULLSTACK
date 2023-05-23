<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        $arr = [
            'name' => '김미현'
            ,'gender' => '여자'
            ,'birth' => '20081023'
            ,'addr' => '구미'
            ,'tel' => '01012345678'
        ];
        $arr2 = [];
        return view('blade')->with('data', $arr)->with('data2', $arr2);
    }
}
