<?php

    // 1. 배열의 길이를 반환하는 mt_len() 함수를 작성
    
    $arr_base = array(1, 2, 3, 4, 5);

    // function my_len1($a) {
    //     $max_key = max(array_keys($a)) + 1;
    //     echo $max_key."\n";
    // }

    // my_len1($arr_base);

    // function my_len($a) {
    //     $result = 0;
    //     foreach ($a as $val) {
    //         $result++;
    //     }
    //     return $result;
    // }

    // echo my_len($arr_base);

    // function my_len($a) {
    //     $result = 0;
    //     foreach ($a as $val) {
    //         $result++;
    //     }
    //     return $result;
    // }
    
    // echo my_len($arr_base);

    

    // 별찍기를 함수로

    // function fnc_star($a) {
    //     for ($n1 = 1; $n1 <= $a; $n1++) {
    //         for ($n2 = 1; $n2 < $n1 ; $n2++) { 
    //             echo "*";
    //         }
    //         echo "*\n";
    //     }
    // }

    // 별 출력 함수

    function print_star($a) {
        for ($n1 = 0; $n1 < $a; $n1++) { 
            echo "*";
        }
        echo "\n";
    }

    // 직각삼각형 함수

    function star_no($a) {
        $no = 1;
        for ($n1 = 0; $n1 < $a; $n1++) {
            print_star($no);
            $no++;
        }
    }
    star_no(5);

    echo "\n";

    // ㅁ 모양

    function star_no2($a) {
        for ($n1 = 0; $n1 < $a; $n1++) {
            print_star($a);
        }
    }
    star_no2(5);

    echo "\n";

    // >모양

    function star_no3($a) {
        $no = 0;
        for ($n1 = 0; $n1 < $a; $n1++) {
            print_star($no);
            $no++;
        }
        for ($n2 = 0; $n2 < $a; $n2++) {
            print_star($no);
            $no--;
        }
    }
    star_no3(5);

?>