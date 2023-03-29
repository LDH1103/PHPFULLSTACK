<?php

    // $arr = array(5, 10, 7, 3, 1);
    // $a = count($arr);

    // foreach ($arr as $key => $val) {
    //     echo $key." > ".$val."\n";
    // }

    // $a = count($arr);
    // for ($i = 0; $i < $a ; $i++) { 
    //     echo $i." > ".$arr[$i]."\n";
    // }

    
    // asort를 쓰지않고 순차정렬을 구현

    // 스와이핑

    // $tmp = $arr[0];
    // $arr[0] = $arr[1];
    // $arr[1] = $tmp;

    // print_r($arr);

    // for($n1 = 0; $n1 < $a; $n1++) {
    //     for($n2 = 0; $n2 < $a; $n2++) {
    //         if($arr[$n1] < $arr[$n2]) {
    //             $tmp = $arr[$n1];
    //             $arr[$n1] = $arr[$n2];
    //             $arr[$n2] = $tmp;
    //         }
    //     }
    // }
    // print_r($arr);

    // $arr = array(5, 10, 7, 3, 1);
    // $arr_count = count($arr);

    // for ($n1 = 0; $n1 < $arr_count; $n1++) {
    //     for ($n2 = 0; $n2 < $arr_count; $n2++) {
    //         if ($arr[$n1] < $arr[$n2]) {
    //             $tmp = $arr[$n1];
    //             $arr[$n1] = $arr[$n2];
    //             $arr[$n2] = $tmp;
    //         }
    //     }
    // }
    // print_r($arr);


    // 배열 안의 최대 값, 최소 값을 출력 해 주는 함수를 구현 : 함수명은 "my_max", "my_min"
    
    // $arr = array(5, 10, 7, 3, 1, 20);

    // function my_max($arr) {
    //     $arr_max = $arr[0];

    //     for ($n = 1; $n < count($arr); $n++) {
    //         if ( $arr_max < $arr[$n]) {
    //             $arr_max = $arr[$n];
    //         }
    //     }
    //     echo $arr_max."\n";
    // }

    // my_max($arr);


    // function my_min($arr) {
    //     $arr_min = $arr[0];

    //     for ($n = 1; $n < count($arr); $n++) {
    //         if ( $arr_min > $arr[$n]) {
    //             $arr_min = $arr[$n];
    //         }
    //     }
    //     echo $arr_min."\n";
    // }

    // my_min($arr);

?>