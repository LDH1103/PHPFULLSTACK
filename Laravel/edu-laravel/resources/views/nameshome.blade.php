<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names Home</title>
</head>
<body>
    <a href="/names">names</a>
    <br>
    <br>
    {{-- {{}} : php에서의 echo와 같음 --}}
    {{-- + url('/names')을 사용하여 '/names' 경로에 대한 URL을 생성,
        url() 함수는 라라벨에서 제공하는 헬퍼 함수, 인자로 전달된 경로를 기반으로 URL을 생성 --}}
    <a href="{{url('/names');}}">names</a>
    <br>
    <br>
    {{-- Laravel에서 추천하는 방식, 라우트의 이름을 지정해서 사용, 유지보수하기 가장 쉬움 --}}
    {{-- + route('names.index')를 사용하여 'names.index'라는 이름을 가진 라우트의 URL을 생성 --}}
    {{-- + 라우트의 URL이 변경되어도 블레이드 템플릿에서 사용된 route() 함수의 인자로 전달된 라우트 이름은 변경되지 않기 때문에, 
        URL 변경에 유연하게 대처할 수 있음 --}}
    <a href="{{route('names.index');}}">names</a>
</body>
</html>