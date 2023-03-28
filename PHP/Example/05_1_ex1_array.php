<?php

    $num = 10;
    $num = 11; // 기존 num의값인 10은 날아가고 11만 저장됨

    // 배열

    // $week = array("Sun", "Mon", "Tue", "Wed"); // $week 한 변수에 문자열 4개를 넣음, 순서대로 0번방, 1번방, ...
    // echo $week[0]; // 0번방에 있는 Sun을 출력
    // echo "\n";
    // echo $week[0]." ".$week[3];

    // $mon = "Mon";
    // $sun = "Sun";
    // $tue = "Tue";
    // $wed = "Wed";

    // $week2 = array($sun, $mon, $tue, $wed); // 미리 선언되어있는 변수를 넣을수도 있음
    // $week3 = array($week[0], $week[1], $week[2], $week[3]); // 선언되어있는 array에서도 가져올수 있음

    // echo $week2[0];


    // 멀티타입 배열
    // 다양한 데이터형식값이 들어갈수있음

    // $arr_mult_type = array("aaa", 1, 3.14, 'a');
    // var_dump ($arr_mult_type);


    // 연상 배열

    // $arr_ass = array("key1" => "val1"
    //                 , "key2" => "val2"
    //                 , 3 => "val3" // 키값은 문자열이 아니어도 됨, 보통은 문자열, 보통 데이터형식은 통일
    //                 , "key4" => "val4");
    // echo $arr_ass["key1"]; // key1에 해당하는 값을 출력


    // 다차원 배열

    $arr_temp = array(
                    array(1, 2, 3, 4)
                    , array(5, 6, 7, 8)
                    , array(
                        array(9, 10, 11)
                        // , array(12, 13, 14)
                    )
                );
    
    // echo $arr_temp[0][1]; // 2를출력
    // echo $arr_temp[1][3]; // 8을 출력

    // echo $arr_temp[2][0][1]; // 10을 출력
    // echo $arr_temp[2][0][0]; // 9를 출력
    // echo $arr_temp[2][1][2]; // 14를 출력

    // $arr_temp_3 = $arr_temp[2][0]; // 현업 방식 : 미리 필요한 배열을 변수에 담고, 그 변수를 이용해 데이터를 뽑아옴
    // var_dump($arr_temp_3);
    // echo $arr_temp_3[2];

    // $arr_temp_3 = $arr_temp[2];
    // // var_dump($arr_temp_3);
    // print_r($arr_temp_3);
    // $arr_temp_3_c = array(
    //                     array(9, 10, 11)
    //                     // , array(12, 13, 14);
    //                 );


    // 배열의 원소 삭제 : unset()
    // 키값자체가 삭제됨(2번방을 삭제한다고 해도 3번방이 2번방으로 땡겨지는게 아님, 2번방은 빈자리로 둠)
    // $arr_week = array("Sun", "Mon", "delete", "Tue", "Wed");
    // unset($arr_week[2]);
    // print_r($arr_week);

    
    // 중복되지 않는 원소를 반환 : array_diff()
    // $arr_diff_1 = array("a", "b", "c");
    // $arr_diff_2 = array("a", "b", "d");
    // $arr_diff = array_diff($arr_diff_1, $arr_diff_2); // $arr_diff_1에 있는 값 중, $arr_diff_2에 속해있지 않은 값을 출력
    // print_r($arr_diff);

    
    // 배열의 정렬 : asort(), arsort(), ksort(), krsort()
    
    // asort(); : 오름차순 정렬
    // $arr_asort = array("b", "a", "d", "c");
    // asort($arr_asort);
    // print_r($arr_asort);

    // arsort(); : 내림차순 정렬
    // $arr_arsort = array("b", "a", "d", "c");
    // arsort($arr_arsort);
    // print_r($arr_arsort);
    
    // ksort(); : key값에 맞춰서 오름차순 정렬
    // $arr_ksort = array("key1" => "val1"
    //                 , "key3" => "val3" 
    //                 , "key4" => "val4"
    //                 , "key2" => "val2"
    //             );
    // ksort($arr_ksort);
    // print_r($arr_ksort);

    // krsort : key값에 맞춰서 내림차순 정렬
    // $arr_krsort = array("key1" => "val1"
    //                 , "key3" => "val3" 
    //                 , "key4" => "val4"
    //                 , "key2" => "val2"
    //                 );
    // krsort($arr_krsort);
    // print_r($arr_krsort);


    // array의 사이즈를 반환하는 함수 : (array에 있는 원소들을 count해줌)
    // echo count($arr_krsort);


    // foreach( $array as $key => $ val ) {}
    // foreach( $array as $ val ) {}

    // $arr1 = array(
    //             "key1" => "val1"
    //             , "key2" => "val2" 
    //             , "key3" => "val3"
    //             , "key4" => "val4"
    //             );

    // foreach( $arr1 as $key => $val ) // key값까지
    // {
    //     echo $key." : ".$val."\n";
    // }

    // foreach( $arr1 as $val ) // value만
    // {
    //     echo $val."\n";
    // }


    // $arr1 = array(
    //             "a" => "1"
    //             , "b" => "2" 
    //             , "c" => "3"
    //             , "d" => "4"
    //             );
    // foreach( $arr1 as $i => $j )
    // {
    //     echo $i." : ".$j."\n";
    // }

    // $arr_food = array(
    //                 "된장찌개" => "파"
    //                 , "볶음밥" => "양파"
    //                 , "김치" => "마늘"
    //                 , "비빔밥" => "참기름"
    //                 );
    // foreach( $arr_food as $key => $val )
    // {
    //     echo $key." 주 재료 : ".$val."\n";
    // }

?>