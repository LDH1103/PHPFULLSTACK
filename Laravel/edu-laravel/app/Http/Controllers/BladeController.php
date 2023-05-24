<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        $arr = [
            'name' => '홍길동'
            ,'gender' => '여자'
            ,'birth' => '20081023'
            ,'addr' => '구미'
            ,'tel' => '01012345678'
        ];
        $arr2 = [];
        // + view('blade')를 사용하여 'blade'라는 이름의 view(블레이드 템플릿)를 생성
        // + with 메소드를 이용하여 $arr 배열을 'data'라는 이름으로 전달하고, 
        // + $arr2 배열을 'data2'라는 이름으로 전달(view에서 해당 데이터를 사용할 수 있도록)
        return view('blade')->with('data', $arr)->with('data2', $arr2);
    }
}
