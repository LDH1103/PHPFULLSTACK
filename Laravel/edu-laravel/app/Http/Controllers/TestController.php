<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        // -> : 체이닝 이라고함, 필요한 헬퍼 함수들을 호출해서 사용가능
        return view('test')->with('name', '미스터 존');
    }
}
