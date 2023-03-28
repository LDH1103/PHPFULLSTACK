<?php

    // 별찍기를 함수로

    // 별 출력 함수

    function print_star($a) {
        for ($n1 = 0; $n1 < $a; $n1++) { 
            echo "*";
        }
        echo "\n";
    }

    // 직각삼각형

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

    // function star_no3($a) {
    //     $no = 0;
    //     for ($n1 = 0; $n1 < $a; $n1++) {
    //         print_star($no);
    //         $no++;
    //     }
    //     for ($n2 = 0; $n2 < $a; $n2++) {
    //         print_star($no);
    //         $no--;
    //     }
    // }
    // star_no3(5);

?>