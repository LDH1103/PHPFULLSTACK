{{-- 상속 : @extends --}}
{{-- 실제 호출한건 blade.blade.php 파일이지만, 상속받은 layout.blade.php파일의 @include('layout.inc.header')가 출력됨 --}}
@extends('layout.layout')

{{-- 부모 템플릿에 해당하는 yield 부분에 자리를 차지 --}}
{{-- 부모와 동일한 key값에 자식의 값이 있다면 자식값을 사용, 없다면 부모값을 사용 --}}
@section('title', '자식 타이틀')

{{-- 처리해야하는 코드가 많을 경우에는, @section ~ @endsection에 소스코드를 기재해서 사용 --}}
@section('contents')
    <hr>
    <h2>콘텐츠 섹션 입니다.</h2>
    <p>아아아아아</p>
    <p>콘텐츠 끝</p>
@endsection

@section('test')
    <hr>
    <h2>자식의 섹션입니다.</h2>
    <p>자식자식</p>
@endsection

{{-- 조건문 --}}
@section('if')
    <hr>
    <h5>if</h5>
    @if($data['gender'] === '남자')
        <span>남자남자</span>
    @elseif($data['addr'] === '대구')
        <span>대구대구</span>
    @else
        <span>모든 조건 탈락</span>
    @endif
@endsection

{{-- 반복문 --}}
@section('for')
    <hr>
    <h5>for</h5>
    @for ($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

{{-- foreach와 forelse의 경우, $loop라는 변수가 자동으로 생성됨 --}}
@section('foreach')
    <hr>
    <h5>foreach</h5>
    @foreach($data as $key => $val)
        {{-- count : 루프의 데이터의 총 갯수, iteration : 루프가 현재 실행된 횟수 --}}
        <span>{{$loop->count.' >> '.$loop->iteration.'     '}}</span>
        <span>{{$key.' : '.$val}}</span>
        <br>
    @endforeach
@endsection

@section('forelse')
    <hr>
    <h5>forelse</h5>
    @forelse($data2 as $key => $val)
        <span>{{$key.' : '.$val}}</span>
        <br>
    @empty
        {{-- $data2가 빈 경우 출력됨 --}}
        <span>배열이 비어있음</span>
    @endforelse
@endsection