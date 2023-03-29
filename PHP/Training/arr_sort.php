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

    $arr = array(5, 10, 7, 3, 1);
    $a = count($arr);

    for ($n1 = 0; $n1 < $a; $n1++) {
        for ($n2 = 0; $n2 < $a; $n2++) {
            if ($arr[$n1] < $arr[$n2]) {
                $tmp = $arr[$n1];
                $arr[$n1] = $arr[$n2];
                $arr[$n2] = $tmp;
            }
        }
    }
    print_r($arr);

?>