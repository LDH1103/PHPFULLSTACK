<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// -----------------
// 라우트 정의
// -----------------
// 문자열 리턴
Route::get('/hi', function () {
    return '안녕하세요.';
});

// 뷰 리턴(뷰 파일이 없으면 에러 발생, 디버그모드 설정(.env파일)이 false면 500에러, true면 에러의 상세정보 출력)
Route::get('/myview', function () {
    return view('myview');
});

// -----------------
// HTTP 메소드 대응하는 라우터
// 여러 라우터에 해당될 경우 가장 마지막에 정의된 것이 실행
// -----------------
// Home
Route::get('/home', function() {
    return view('home');
});

// GET 요청에 대한 처리 (select)
Route::get('/method', function() {
    return 'GET Method!!';
});

// POST 요청에 대한 처리 (insert)
Route::post('/method', function() {
    return 'POST Method!!';
});

// PUT 요청에 대한 처리 (update)
Route::put('/method', function() {
    return 'PUT Method!!';
});

// DELETE 요청에 대한 처리 (delete)
Route::delete('/method', function() {
    return 'DELETE Method!!';
});

// 모든 요청에 대한 처리 (중복되는 처리를 하지않도록 주의)
// Route::any('/method', function() {
//     return 'ANY Method!!';
// });

// 지정한 특정 메소드 요청에 대한 처리
// Route::match(['get', 'post'], '/method', function() {
//     return 'MATCH Method!!';
// });


// ---------------------
// 라우트에서 파라미터 제어
// ---------------------
// 쿼리 스트링으로 파라미터 획득(GET)
// use Illuminate\Http\Request; 해줘야함
// http://localhost/query?id=admin&name=kim
// Request $request : $request 변수의 타입을 Request 객체로(타입 힌트)
Route::get('/query', function(Request $request) {
    return $request->id.", ".$request->name;
});

// URL 세그먼트로 지정 파라미터 획득
// 세그먼트가 없을경우 404 ERROR
// 세그먼트 : http://localhost/segment/1 에서의 "1" 부분
Route::get('/segment/{id}', function($id) {
    return 'segment ID : '.$id;
});

// URL 세그먼트로 지정 파라미터 획득 : 기본값 설정(404 ERROR 안뜨게)
// Route::get('/segment2/{id?}', function($id = 'base') {
//     return 'segment2 ID : '.$id;
// });

// Request로도 세그먼트 파라미터 획득 가능, 세그먼트 파라미터가 없어도 404 ERROR 발생 안함
Route::get('/segment2/{id?}', function(Request $request) {
    return 'segment2 ID : '.$request->id;
    // if(empty($request->id)) {
    //     return 'segment2 ID : 기본값';
    // } else {
    //     return 'segment2 ID : '.$request->id;
    // }
});


// -----------------------------------
// 라우트의 이름 지정 : Controller나 View에서 사용할떄
// -----------------------------------
Route::get('/names/home', function() {
    return view('nameshome');
});

// 사용법 : <a href="{{route('names.index');}}">names</a>
Route::get('/names', function() {
    return 'name.index !!!';
})->name('names.index');


// ----------------------------------
// 라우트 매칭 실패시 대체 라우트 정의 : 보통 에러처리를 최하단에 정의
// ----------------------------------
Route::fallback(function() {
    return '잘못된 경로로 접속하셨습니다.';
});


// ----------------------------------
// 라우트의 그룹 및 공통경로설정(= /users/login)
// ----------------------------------
// 공통 경로 : prefix('공통 경로 이름')->group();
// middleware('auth')-> : 권한 체크
Route::prefix('users')->group(function() {
    Route::get('/login', function() {
        return 'Login!!';
    })->name('users.login');
    Route::get('/logout', function() {
        return 'Logout!!';
    })->name('users.logout');
    Route::get('/registration', function() {
        return 'Registration!!';
    })->name('users.registration');
});


// ------------------------
// 서명 라우터
// ------------------------
use Illuminate\Support\Facades\URL;
Route::get('/makesign', function() {
    // 일반적인 URL 링크 생성하기
    // $baseUrl = route('inviations', ['inviation' => 5816, 'group' => 678]);
    $baseUrl = route('sign');

    // 서명된 URL 링크 생성하기
    // $signUrl = URL::signedRoute('inviations', ['inviation' => 5816, 'group' => 678]);
    $signUrl = URL::signedRoute('sign');

    // 유효기간이 있는 서명된 URL 링크 생성하기
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(10));

    return $baseUrl . '<br><br>' . $signUrl . '<br><br>' . $limitSignUrl . '<br><br><a href="' . $limitSignUrl . '">유효기간이 있는 서명된 URL</a>';
});

Route::get('/sign', function() {
    return 'Sign!!';
})->name('sign')->middleware('signed');
// })->name('inviations')->middleware('signed');

// --------------------------------
// 컨트롤러
// --------------------------------
// 커맨드로 컨트롤러 생성 : php artisan make:controller TestController
use App\Http\Controllers\TestController;
Route::get('/test', [TestController::class, 'index'])->name('tests.index');

// 커맨드로 컨트롤러 생성 : php artisan make:controller TasksController --resource
use App\Http\Controllers\TasksController;
Route::resource('/tasks', TasksController::class);

// 커맨드 php artisan route:list
// 방식           URL({task} : 세그먼트 파라미터)                              Controller의 메소드 이름
//GET|HEAD        tasks .......................................................... tasks.index › TasksController@index
//POST            tasks .......................................................... tasks.store › TasksController@store
//GET|HEAD        tasks/create ................................................. tasks.create › TasksController@create
//GET|HEAD        tasks/{task} ..................................................... tasks.show › TasksController@show
//PUT|PATCH       tasks/{task} ................................................. tasks.update › TasksController@update
//DELETE          tasks/{task} ............................................... tasks.destroy › TasksController@destroy
//GET|HEAD        tasks/{task}/edit ................................................ tasks.edit › TasksController@edit

// --------------------------
// 블레이드 템플릿
// --------------------------
use App\Http\Controllers\BladeController;
Route::get('/blade', [BladeController::class, 'index'])->name('blade.index');

