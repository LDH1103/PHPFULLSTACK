<?php

// 1. GET Method

    // 1-1. GET Method로 데이터를 넘겨주는 방법 1
    //  - Query string에 키와 값을 셋팅
    //  - ?뒷부분을 Query string 이라고함
    // http://localhost/mini_board/src/board_list.php?board_no=1

    //  - &로 연걸해서 값을 여러개 넣을 수 있음
    // http://localhost/mini_board/src/board_list.php?board_no=1&key1=10
    // http://localhost/20_1_ex2_httpget.php?aaa=1&bbb=2 --- aaa : key, 1 : val
    
    // 1-2. form Tag를 이용하는 방법
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
        <form method="get" action="20_1_ex2_httpget.php">
            <input type="text" name="test1" value="test_value1">
            <input type="text" name="test2" value="test_value2">
            <button type="submit">Submit</button>
        </form>
        <br><br><br>

        <a href="http://localhost/20_1_ex2_httpget.php?aaa=1">A태그</a>
    </body>
    </html>
    