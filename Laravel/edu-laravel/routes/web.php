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
// + 첫번째 인자는 URL 패턴을 나타내는 문자열, 두번째 인자는 해당 요청에 대한 처리 로직을 담은 클로저
// + '/method' 경로로 GET 요청이 들어오면 'GET Method!!' 문자열을 반환하는 익명의 클로저를 실행
// + 클로저 : 실제로 요청을 처리하는 함수 또는 메소드
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
// + function(Request $request) : $request 변수가 Request 객체 또는 Request 객체의 하위 클래스의 인스턴스여야 함을 나타냄
// + 타입 힌트 : 변수나 함수의 매개변수, 반환 값 등에 사용되는 주석 형식의 표기법
// +    타입 힌트를 사용하여 변수 또는 매개변수의 예상되는 데이터 유형을 명시적으로 지정할 수 있음
// +    코드 가독성을 높이고 오류를 방지하며, 개발자가 코드를 이해하고 유지보수하기 쉽게 도와줌
// +    ($request 변수가 Request 객체로 사용될 것이라는 것을 명확히 표시,  잘못된 타입의 객체를 전달하려고 할 때 오류가 발생하도록 함)
Route::get('/query', function(Request $request) {
    return $request->id.", ".$request->name;
});

// URL 세그먼트로 지정 파라미터 획득
// 세그먼트가 없을경우 404 ERROR
// 세그먼트 : http://localhost/segment/1 에서의 "1" 부분
// + http://localhost/segment/1로 GET 요청을 보내면 1이라는 값이 $id 변수에 할당됨
Route::get('/segment/{id}', function($id) {
    return 'segment ID : '.$id;
});

// URL 세그먼트로 지정 파라미터 획득 : 기본값 설정(404 ERROR 안뜨게)
// + ?는 해당 파라미터가 선택적임을 나타냄(= segment2에 파라미터가 없을수도 있음)
// + 파라미터가 없는 경우에는 $id변수에 기본값으로 'base'가 할당됨
// + segment2에 파라미터가 있는경우 파라미터를 반환하고, 없는경우 'base'를 반환함
Route::get('/segment2/{id?}', function($id = 'base') {
    return 'segment2 ID : '.$id;
});

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
// + 코드의 가독성과 유지보수성을 높일수 있음
// + URL 생성 : route() 함수나 url() 함수에서 라우트의 이름을 기반으로 URL을 생성할 수 있음,
// +    ex) route('names.index')는 'names.index'라는 이름을 가진 라우트에 대한 URL을 생성함
// + 리다이렉트 : redirect() 함수에서 라우트의 이름을 사용하여 리디렉션할 수 있음,
// +    ex) redirect()->route('names.index')는 'names.index'라는 이름을 가진 라우트로 리다이렉트함
// + 컨트롤러 호출 : 컨트롤러의 액션 메소드에서 라우트의 이름을 사용하여 다른 라우트로 리다이렉트하거나,
// +    다른 액션 메소드를 호출할 수 있음
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
// + Route::fallback() 함수는 정의되지 않은 경로에 대한 처리를 담당하는 라우트,
// + 이 함수로 정의된 라우트는 애플리케이션에서 정의된 다른 라우트와 일치하지 않는 모든 요청에 대해 실행됨
// + 주로 404 오류 페이지를 처리하는 용도로 사용
// ----------------------------------
Route::fallback(function() {
    return '잘못된 경로로 접속하셨습니다.';
});


// ----------------------------------
// 라우트의 그룹 및 공통경로설정(= /users/login)
// ----------------------------------
// 공통 경로 : prefix('공통 경로 이름')->group();
// middleware('auth')-> : 권한 체크
// + Route::prefix('users')->group()은 /users를 공통 경로로 지정하고 해당 그룹 내에서 라우트를 정의하는 것을 의미함
// + 이렇게 공통 경로를 지정하면, 그룹 내의 각 라우트는 /users 접두사를 가져야 함
// +    ex) localhost/users/login, localhost/users/logout, ...
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
// + URL 클래스를 사용하기위해 적어줌
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

// + ->middleware('signed')는 해당 라우트에 signed 미들웨어를 적용하는 것을 의미
// + signed 미들웨어는 라라벨에서 제공하는 기본 미들웨어 중 하나, 서명된 URL에 대한 검증을 수행함
// + 즉, 이 라우트는 서명된 URL을 통해서만 접근이 가능함
Route::get('/sign', function() {
    return 'Sign!!';
})->name('sign')->middleware('signed');
// })->name('inviations')->middleware('signed');

// --------------------------------
// 컨트롤러
// --------------------------------
// 커맨드로 컨트롤러 생성 : php artisan make:controller TestController
use App\Http\Controllers\TestController;
// + TestController를 생성하고, TestController의 index 메소드를 호출하는 /test 경로에 대한 GET 요청을 처리하는 라우트를 정의함
// + [TestController::class, 'index']는 컨트롤러와 해당 컨트롤러의 액션(메소드)을 지정하는 배열 형태로 라우트를 정의하는 방식
// +    'index': TestController 클래스 내에서 호출할 메소드(액션)의 이름, 'index'는 TestController 내의 index 메소드를 호출하는 것을 의미
// +    = TestController 클래스의 index 메소드를 호출하는 라우트를 정의
// + 이 라우트는 클라이언트가 특정 경로에 접속하면 TestController의 index 메소드가 실행되어 요청에 대한 처리를 수행함
Route::get('/test', [TestController::class, 'index'])->name('tests.index');

// 커맨드로 컨트롤러 생성 : php artisan make:controller TasksController --resource
use App\Http\Controllers\TasksController;
// + TasksController를 생성하고, --resource 옵션을 사용하여 리소스 컨트롤러로 생성함
// + /tasks 경로에 대한 여러 가지 액션(GET, POST, PUT, DELETE 등)을 처리하는 라우트를 자동으로 생성함
// +    index: 모든 리소스의 목록을 반환
// +        - DB에서 해당 리소스의 모든 항목을 조회하고, 목록 형태로 클라이언트에게 반환 (select)
// +    create: 리소스 생성을 위한 폼을 표시
// +        - 새로운 리소스를 작성하는 데 필요한 입력 필드들을 포함, 사용자가 이 폼을 작성하여 서버에 전송하면 store 액션으로 이어짐 (회원가입 form)
// +    store: 새로운 리소스를 저장
// +        - 클라이언트로부터 전송된 데이터를 사용하여 새로운 리소스를 생성하고, DB에 저장 (회원가입 form을 받아서 insert)
// +    show: 특정 리소스의 세부 정보를 반환
// +        - DB에서 해당 리소스의 특정 항목을 조회하고, 해당 정보를 클라이언트에게 반환 (특정 사용자의 프로필 페이지, select where)
// +    edit: 리소스를 수정하기 위한 폼을 표시
// +        - 기존 리소스의 정보를 편집할 수 있는 입력 필드들을 포함, 사용자가 이 폼을 작성하여 서버에 전송하면 update 액션으로 이어짐 (프로필 편집 form)
// +    update: 기존 리소스를 업데이트
// +        - 클라이언트로부터 전송된 데이터를 사용하여 기존 리소스의 정보를 수정하고, DB에 저장 (프로필 편집 form을 받아서 업데이트)
// +    destroy: 특정 리소스를 삭제
// +        - 해당 리소스를 데이터베이스에서 삭제하고, 삭제 결과에 대한 응답을 클라이언트에게 반환 (계정 삭제)
// + 이렇게 생성된 액션 메소드들은 각각의 HTTP 메소드(GET, POST, PUT, DELETE, ...)와 연결됨
// +    ex) index 메소드는 GET 요청에 대한 처리를 담당하고, store 메소드는 POST 요청에 대한 처리를 담당
// + Route::resource('/tasks', TasksController::class);는 이러한 리소스 라우트를 한 번에 정의하는 방식
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

// + GET /tasks: 모든 리소스의 목록을 반환하는 액션 (index)
// + GET /tasks/create: 리소스 생성을 위한 폼을 표시하는 액션 (create)
// + POST /tasks: 새로운 리소스를 저장하는 액션 (store)
// + GET /tasks/{id}: 특정 리소스의 세부 정보를 반환하는 액션 (show)
// + GET /tasks/{id}/edit: 리소스를 수정하기 위한 폼을 표시하는 액션 (edit)
// + PUT /tasks/{id} 또는 PATCH /tasks/{id}: 기존 리소스를 업데이트하는 액션 (update)
// + DELETE /tasks/{id}: 특정 리소스를 삭제하는 액션 (destroy)

// --------------------------
// 블레이드 템플릿
// --------------------------
use App\Http\Controllers\BladeController;
Route::get('/blade', [BladeController::class, 'index'])->name('blade.index');

