<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * 리소스의 목록 페이지(리스트 페이지)
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Tasks.index!!';
    }

    /**
     * Show the form for creating a new resource.
     * 리소스 생성을 위한 입력 폼 페이지(글 작성 페이지)
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Tasks.create!!';
    }

    /**
     * Store a newly created resource in storage.
     * 리소스 생성 처리(post, 버튼 눌러서 값이전송되면 DB에 저장하는 처리)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Tasks.store 이동 가능하도록 구현
    //      - 유저가 입력한 데이터(id, pw)가 출력되도록
    public function store(Request $request)
    {
        $arrOnly = $request->only(['id', 'pw']);
        return 'Tasks.store!!!<br>id = '.$arrOnly['id'].'<br>pw = '.$arrOnly['pw'];
        // return 'Tasks.store!!!<br>id = '.$request->id.'<br>pw = '.$request->pw; 로도 가능
        // return 'Tasks.store!!!<br>id = '.$request['id'].'<br>pw = '.$request['pw']; 로도 가능하지만 추천하지 않음
    }

    /**
     * Display the specified resource.
     * 리소스 조회 페이지(디테일 페이지)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Tasks.show!! : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     * 리소스 수정 폼 페이지(수정 페이지)
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Tasks.edit 이동 가능하도록 구현
    //      - 세그먼트 파라미터의 값은 999
    public function edit($id)
    {
        return 'Tasks.edit!! : '.$id;
    }

    /**
     * Update the specified resource in storage.
     * 리소스 수정 처리(수정 페이지에서 수정버튼 눌렀을때의 처리)
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        var_dump($request); // $request에 무슨값이 있는지 확인
        $arrAll = $request->all(); // 사용자가 전달하는 모든 데이터를 획득
        $arrOnly = $request->only(['id', 'name']); // 사용자가 전달한 데이터 중에 해당하는 데이터만 획득(배열)
        $oneGet = $request->get('pw'); // 사용자가 전달한 데이터 중에 해당하는 데이터의 값만 획득

        var_dump($arrAll);
        var_dump($arrOnly);
        var_dump($oneGet);

        return 'Tasks.update!! : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스 삭제 처리
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Tasks.destroy!! : '.$id;
    }
}
