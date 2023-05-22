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
    <a href="{{url('/names');}}">names</a>
    <br>
    <br>
    {{-- Laravel에서 추천하는 방식, 라우트의 이름을 지정해서 사용, 유지보수하기 가장 쉬움 --}}
    <a href="{{route('names.index');}}">names</a>
</body>
</html>