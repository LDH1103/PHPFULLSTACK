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
        {{-- <!-- csrf : form태그 안에 @csrf를 적어줘야 정상적으로 작동함, 서큐리티 문제때문 --> --}}
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