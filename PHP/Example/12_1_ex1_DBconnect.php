<?php

    // php.ini 938번째줄 주석 해제 extension=mysqli

    // DB 연결
    $dbc = mysqli_connect("localhost", "root", "shlove1103**", "employees", 3306); // 호스트명, username, pw, DB이름, 포트번호

    // var_dump($dbc);

    // 쿼리 요청
    $result_querry = mysqli_query($dbc, "SELECT emp_no, first_name FROM employees LIMIT 1;");
    // var_dump($result_querry);

    // 값 한개씩 가져오기 : mysqli_fetch_row
    // $result_row = mysqli_fetch_row($result_querry);
    // var_dump($result_row);

    // while ($temp_row = mysqli_fetch_row($result_querry)) {
    //     var_dump($temp_row);
    // }

    // while ($temp_row = mysqli_fetch_row($result_querry)) {
    //     var_dump($temp_row);
    // }

    // while ($temp_row = mysqli_fetch_row($result_querry)) {
    //     echo $temp_row[0].",";
    // }


    // 값 여러개 가져오기 : mysqli_fetch_assoc, 키값(컬럼 명)도 가져옴
    while ($temp_assoc = mysqli_fetch_assoc($result_querry)) {
        var_dump($temp_assoc);
        // var_dump($temp_assoc["first_name"]); // first_name만 가져오기
    }


    mysqli_close($dbc); // db연결끊기


    // function으로 만들기

    function db_connect($a) {
        $a = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    }



?>