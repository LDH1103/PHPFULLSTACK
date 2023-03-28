<?php

    // // 두 매개변수의 차를 구하는 함수를 구현

    // function fnc_minus($int_a, $int_b)
    // {
    //     $result = $int_a - $int_b;

    //     return $result;
    // }

    // $result_minus = fnc_minus(10, 6);
    // echo $result_minus."\n";

    // // 두 매개변수를 나눈 함수를 구현

    // function fnc_divi($int_a, $int_b)
    // {
    //     $result = $int_a / $int_b;

    //     return $result;
    // }

    // $result_division = fnc_divi(10, 6);
    // echo $result_division."\n";

    // // 두 매개변수를 곱하는 함수를 구현

    // function fnc_Multipl($int_a, $int_b)
    // {
    //     $result = $int_a * $int_b;

    //     return $result;
    // }

    // $result_Multipl = fnc_Multipl(10, 6);
    // echo $result_Multipl."\n";



    // 가변 파라미터 함수
    // 뺴기, 곱하기, 나누기를 가변 파라미터 함수로 구현

    // 빼기 ex) 10, 2, 5 결과가 "3"

    // function fnc_args_minus() {
    //     $args = func_get_args();
    //     $result = 0;

    //     foreach ($args as $val) {
    //         if ($val === $args[0]) {
    //             $result = $val;
    //         } else {
    //             $result -= $val;
    //         }
    //     }
    //     return $result;
    // }

    function fnc_args_minus() {
        $args = func_get_args();
        $result = $args[0];
        
        foreach ($args as $val) {
            if (!($val === $args[0])) {
                $result -= $val;
            }
        }
        return $result;
    }

    echo fnc_args_minus(10, 2, 5)."\n";


    // 곱하기

    // function fnc_args_multipl() {
    //     $args = func_get_args();
    //     $result = 0;

    //     foreach ($args as $val) {
    //         if ($val === $args[0]) {
    //             $result = $val;
    //         } else {
    //             $result *= $val;
    //         }
    //     }
    //     return $result;
    // }

    function fnc_args_multipl() {
        $args = func_get_args();
        $result = $args[0];

        foreach ($args as $val) {
            if (!($val === $args[0])) {
                $result *= $val;
            }
        }
        return $result;
    }

    echo fnc_args_multipl(10, 2, 5)."\n";


    // 나누기

    // function fnc_args_div() {
    //     $args = func_get_args();
    //     $result = 0;

    //     foreach ($args as $val) {
    //         if ($val === $args[0]) {
    //             $result = $val;
    //         } else {
    //             $result /= $val;
    //         }
    //     }
    //     return $result;
    // }

    function fnc_args_div() {
        $args = func_get_args();
        $result = $args[0];
        
        foreach ($args as $val) {
            if (!($val === $args[0])) {
                $result /= $val;
            }
        }
        return $result;
    }

    echo fnc_args_div(10, 2, 5)."\n";

?>