<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB 객체 사용

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // -----------------------
        // 쿼리 빌더
        // -----------------------
        // select
        // $result = DB::select('SELECT * FROM categories');

        // $no = '5';
        // $result = DB::select(
        //     'SELECT * FROM categories WHERE no = :no'
        //     , ['no' => $no]
        // );

        // 다른 방식(key 없이)
        // $result = DB::select(
        //     'SELECT * FROM categories WHERE no = ? OR no = ?'
        //     , [$no, 7]
        // );

        // ----------------- 실습
        $input = ['4', '7', '8']; // categories의 no 컬럼 
        // 게시글 번호, 게시글 제목, 카테고리 명을 출력 (게시글 번호로 오름차순 정렬 후 상위 5개만)

        // $result = DB::select(
        //     ' SELECT '
        //     .'      bod.bno '
        //     .'      ,bod.btitle '
        //     .'      ,cat.name '
        //     .' FROM '
        //     .'      boards bod '
        //     .' INNER JOIN '
        //     .'      categories cat '
        //     .'      ON '
        //     .'          bod.category = cat.no '
        //     .' WHERE '
        //     .'      cat.no = :no0 '
        //     .'      OR '
        //     .'      cat.no = :no1 '
        //     .'      OR '
        //     .'      cat.no = :no2 '
        //     .' ORDER BY '
        //     .'      bod.bno ASC '
        //     .' LIMIT '
        //     .'      5 '
        //     , ['no0' => $input[0] 
        //         ,'no1' => $input[1] 
        //         ,'no2' => $input[2]]
        // );

        // $result = DB::select(
        //     ' SELECT '
        //     .'      bod.bno '
        //     .'      ,bod.btitle '
        //     .'      ,cat.name '
        //     .' FROM '
        //     .'      boards bod '
        //     .' INNER JOIN '
        //     .'      categories cat '
        //     .'      ON '
        //     .'          bod.category = cat.no '
        //     .' WHERE '
        //     .'      cat.no = :no0 '
        //     .'      OR '
        //     .'      cat.no = :no1 '
        //     .'      OR '
        //     .'      cat.no = :no2 '
        //     .' ORDER BY '
        //     .'      bod.bno ASC '
        //     .' LIMIT '
        //     .'      5 '
        //     , ['no0' => $input[0] 
        //         ,'no1' => $input[1] 
        //         ,'no2' => $input[2]]
        // );

        // 이 방식도 innerjoin, 위의 방식보다 좀더 빠를때도 있음
        // $result = DB::select(
        //     ' SELECT '
        //     .'      b.bno '
        //     .'      ,b.btitle '
        //     .'      ,c.name '
        //     .' FROM '
        //     .'      categories c '
        //     .'      ,boards b '
        //     .' WHERE '
        //     .'      c.no = b.category '
        //     .' AND '
        //     .'      c.no in(?, ?, ?) '
        //     .' ORDER BY '
        //     .'      b.bno '
        //     .' LIMIT '
        //     .'      5 '
        //     , $input
        // );

        // $result = DB::insert(
        //     ' INSERT INTO boards( '
        //     .'      category '
        //     .'      ,btitle '
        //     .'      ,bcontent '
        //     .'      ,created_at '
        //     .'      ,updated_at '
        //     .' ) '
        //     .' VALUES( '
        //     .'      :category '
        //     .'      ,:btitle '
        //     .'      ,:bcontent '
        //     // .'      ,:created_at '
        //     // .'      ,:updated_at '
        //     .'      ,NOW() '
        //     .'      ,NOW() '
        //     .' ) '
        //     ,[
        //         'category' => '5'
        //         , 'btitle' => '타이틀123'
        //         , 'bcontent' => '컨텐츠'
        //         // , 'created_at' => now() // laravel의 now(), UTC기준이라 설정 바꿔줘야함
        //         // , 'updated_at' => now()
        //     ]
        // );

        // 방금 등록한 게시글의 제목 : test, 내용 : testtest로 변경
        // $result = DB::update(
        //     ' UPDATE '
        //     .'      boards '
        //     .' SET '
        //     .'      btitle = :btitle '
        //     .'      ,bcontent = :bcontent '
        //     .' WHERE '
        //     .'      bno = :bno '
        //     ,[
        //         'btitle' => 'test'
        //         , 'bcontent' => 'testtest'
        //         , 'bno' => '20018'
        //     ]
        // );

        // $result = DB::update(
        //     ' UPDATE '
        //     .'      boards '
        //     .' SET '
        //     .'      btitle = :btitle '
        //     .'      ,bcontent = :bcontent '
        //     .' WHERE '
        //     .'      bno = (
        //                     SELECT
        //                         MAX(bno)
        //                     FROM
        //                         boards
        //                     ) '
        //     ,[
        //         'btitle' => 'test'
        //         , 'bcontent' => 'testtest'
        //         // , 'bno' => 20018
        //     ]
        // );

        // $result = DB::delete(
        //     ' DELETE '
        //     .' FROM '
        //     .'      boards '
        //     .' WHERE '
        //     .'      bno in(?, ?) '
        //     ,[20018, 20017]
        // );


        // --------------------------
        // 쿼리 빌더 체이닝
        // --------------------------
        $no = '5';
        $no2 = '8';
        // $result = DB::table('categories')->where('no', '=', $no)->get(); // get : 체이닝을 실행해서 데이터를 가져오겠다
        // $result = DB::table('categories')->where('no', '=', $no)->dd(); // dd() : var_dump같은 헬퍼함수

        // SELECT * FROM categories WHERE no = ? OR no = ?
        // $result = DB::table('categories')->where('no', $no)->orWhere('no', $no2)->get(); // 부등호 생략 가능, 생략하면 '='으로 인식

        // SELECT * FROM categories WHERE no IN(?, ?)
        // $result = DB::table('categories')->whereIn('no', [$no, $no2])->get();

        // SELECT * FROM categories WHERE no NOT IN(?, ?)
        // $result = DB::table('categories')->whereNotIn('no', [$no, $no2])->get();

        // SELECT id, no, name FROM categories
        // $result = DB::table('categories')
        //     ->select('id', 'no', 'name')
        //     ->get();

        // SELECT id, no, name FROM categories ORDER BY name DESC
        // $result = DB::table('categories')
        //     ->select('id', 'no', 'name')
        //     ->orderBy('name', 'DESC') // ->orderByDesc('name') 도 사용가능
        //     ->get();

        // whereRaw() *** 사용하지 않는것을 추천(SQL Injection 공격에 취약함) ***
        // $result = DB::table('categories')->whereRaw('no = '.$no)->get();

        // first() : 값을 하나만 가져옴(LIMIT 1)
        // $result = DB::table('boards')->orderBy('bno', 'DESC')->first();

        // firstOrFail() ** 엘로퀀트(ORM) 모델 객체에서만 사용 가능 ** : 
        //      first()와 같은 동작을 하지만, 실패시 결과가 예외 발생(디버그 설정에 따라 에러 페이지를 보여주거나, 404페이지를 부여줌)
        // $result = Board::orderBy('bno', 'DESC')->firstOrFail();

        // 집계 메소드
        // $result = DB::table('boards')->count(); // 결과의 레코드 수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환

        // 트랜잭션
        // DB::beginTransaction(); // 트랜잭션 시작
        // DB::rollback(); // 롤백
        // DB::commit(); // 커밋

        // --------------------------- 실습
        // 카테고리가 활성화 되어 있는 게시글의 카테고리별 갯수를 출력
        // 카테고리 번호, 카테고리명, 갯수
        $result = DB::table('boards AS b')
            ->join('categories AS c', 'b.category', '=', 'c.no')
            ->select('c.no', 'c.name')
            ->selectRaw('count(b.category)')
            ->where('c.active_flg', '1')
            ->groupBy('c.no', 'c.name') // groupBy()는 select안의 컬럼들을 모드 적어줘야함
            ->get();

        // $result = DB::table('boards AS b')
        //     ->join('categories AS c', 'b.category', '=', 'c.no')
        //     ->select('c.no', 'c.name', DB::raw('count(b.category)'))
        //     ->where('c.active_flg', '1')
        //     ->groupBy('c.no', 'c.name')
        //     ->get();

        return var_dump($result);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
