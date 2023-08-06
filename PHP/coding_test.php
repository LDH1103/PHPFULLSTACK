<?php

// $arr = [1, 2, 3, 4, 5, 6];
// $arr_cnt = count($arr);
// $result_arr = []; 

// for ($i = 0; $i < $arr_cnt; $i++) {
//     for ($j = $i + 1; $j < $arr_cnt; $j++) {
//         if ($arr[$i] + $arr[$j] === 7) {
//             $result_arr[] = $arr[$i] . ' + ' . $arr[$j];
//         }
//     }
// }

// foreach ($result_arr as $val) {
//     echo $val . " = 7 \n";
// }

// ------------------------------------------

function find_odd($int_1, $int_2) {
    $result = '';

    for ($i = $int_1; $i < $int_2; $i++) {
        if ($i % 2 !== 0) {
            $result .= $i . ' ';
        }
    }

    return $result;
}

echo find_odd(2, 5);

?>