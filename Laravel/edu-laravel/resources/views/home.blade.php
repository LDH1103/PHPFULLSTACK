<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home!!</h1>
    <br>
    <br>
    <br>
    <form action="/method" method="POST">
        {{-- csrf : form태그 안에 @csrf를 적어줘야 정상적으로 작동함, 서큐리티 문제때문 --}}
        {{-- + 라라벨의 CSRF(Cross-Site Request Forgery) 보호를 위한 토큰을 출력하는 라라벨 블레이드 템플릿의 지시문, 
            토큰은 폼 제출 시 보안을 강화하기 위해 사용됨 --}}
        {{-- + CSRF : 웹 보안 공격 중 하나로, 인증된 사용자가 자신의 의지와는 무관하게 악의적인 요청을 제출하도록 속이는 공격,
            흔히 "사이트 간 요청 위조"라고도 불림 --}}
        {{-- + CSRF의 공격 과정 :
            1. 피해자는 정상적인 웹 애플리케이션에 로그인함
            2. 공격자는 악성 웹사이트나 이메일 등을 통해 피해자의 브라우저에 악성 코드를 삽입함
            3. 피해자가 악성 코드가 있는 페이지를 방문하면,
                악성 코드는 피해자의 인증된 세션 정보를 사용하여 웹 애플리케이션에 악의적인 요청을 보냄
            --}}
        @csrf
        <button type="submit">POST</button>
    </form>
    <br>
    <form action="/method" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">PUT</button>
    </form>
    <br>
    <form action="/method" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
</body>
</html>