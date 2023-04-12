<?php
    // 1. Post Method로 사용자가 입력한 데이터를 HTTP Requset
    // 2. 입력한 데이터의 상세 내역
    //  2-1. key : id, pw, name, birth_date
    // 3. 유저가 입력하지 않은 데이터도 함께 전송
    //  3-1. key : h_page, val : h1
    // 4. echo를 이용해서 각각의 데이터를 출력
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post" action="20_2_tng1_http_post_method.php">
            <input type="text" name="id" placeholder="ID">
            <br>
            <input type="password" name="pw" placeholder="PW">
            <br>
            <input type="text" name="name" placeholder="이름">
            <br>
            <input type="date" name="birth_date">
            <br>
            <input type="hidden" name="h_page" value="h1">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
<?php
    echo "<br>";
    $a = $_POST;
    foreach ($a as $key => $val) {
        echo $key." : ".$val."<br>";
    }
?>