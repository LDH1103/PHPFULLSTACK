<?php

    // min, max, floor, round, ceil, rand
    // echo floor(4.9)."\n"; // 소수점 아래 내림
    // echo round(4.5)."\n"; // 소수 반올림
    // echo ceil(4.1)."\n"; // 소수점 아래 올림
    // echo min(array(3, 4, 6, 1, 3))."\n"; // 최소값
    // echo max(array(3, 4, 6, 1, 3))."\n"; // 쵀대값



    // 날짜 관련 함수
    // echo date('Y-m-d H:i:s')."\n"; // m은 "월"이 사용하고 있어서 "분"은 i로 사용
    // echo date('y-m-d h:i:s')."\n"; // 대소문자 차이 주의
    // echo date('yMD h:i:s a l')."\n";


    // 난수함수 (랜덤)
    // echo rand(0, 2)."\n";
    // echo mt_rand(0, 3);

    // GLOBALS 정보 상수, 변수 및 함수
    // var_dump($GLOBALS);
    // var_dump(phpinfo());


    // 상수 정의

    // 상수 선언 (명명 규칙 : 상수명은 꼭 대문자로만 작성, 모두 대문자가 아니라면 상수인지 아닌지 알수없음, 전세계 개발자들의 규칙)
    define("INT_ONE", 1);
    echo INT_ONE;

    

?>