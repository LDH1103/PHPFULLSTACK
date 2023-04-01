<?php

    // switch문
    // $str_loc 에 지역명을 저장하고, 서울은 "서울 사람", 대구는 "대구 사람", 부산은 "부산 사람"
    // 그 외는 "타지역 사람"을 출력

    // $str_loc  = "경기";

    // switch ($str_loc) {
    //     case '서울':
    //         echo "서울 사람";
    //         break;
    //     case '대구':
    //         echo "대구 사람";
    //         break;
    //     case '부산':
    //         echo "부산 사람";
    //         break;
        
    //     default:
    //         echo "타지역 사람";
    //         break;
    // }



    // 숫자 1부터 50까지 반복문을 이용해서 더하기
    // $result = 0;
    // $max = 50;

    // for ($i = 0; $i <= $max; $i++) {
    //     $result += $i;
    // }

    // echo $result;


    $result = 0;
    $max = 50;

    for ($i = 0; $i <= $max; $i++) {
        $result += $i;
    }

    echo $result;

?>