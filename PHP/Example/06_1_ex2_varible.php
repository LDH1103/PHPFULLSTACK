<?php

    // 전역 변수
    
    // $global_int_a = 5; // 전역변수 초기화 (전역변수 앞에 global 붙여서 실수를 방지)

    // function fnc_add() {
    //     global $global_int_a; // 전역변수 선언
    //     $global_int_a = $global_int_a + 10;

    //     return $global_int_a;
    // }

    // echo fnc_add();



    // 정적 변수

    // function fnc_add_1() {
    //     $i = 1;
    //     echo $i."\n";
    //     $i++;
    // }

    // for ($i = 0; $i < 3; $i++) {
    //     fnc_add_1();
    // }

    // function fnc_add_1() {
    //     static $i = 1; // static은 그 전의 값을 기억함
    //     echo $i."\n";
    //     $i++;
    // }

    // for ($i = 0; $i < 3; $i++) {
    //     fnc_add_1();
    // }



    // call by vlaue
    
    // function fnc_val($int_a, $int_b) {
    //     $int_a = 3;
    //     $int_b = 4;
    // }

    // $int_a = 1;
    // $int_b = 2;
    // fnc_val(5, 6);

    // echo $int_a." ".$int_b;



    // call by reference
    
    function fnc_val(&$a, &$b) {
        $a = 3;
        $b = 4;
    }

    $int_a = 1;
    $int_b = 2;
    fnc_val($int_a, $int_b);

    echo $int_a." ".$int_b;





?>