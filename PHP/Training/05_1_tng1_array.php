<?php

    // 음식 종류 5개 이상을 배열로 만들기
    $food = array("짜장면", "탕수육", "햄버거", "피자", "치킨");

    // echo $food[4].", ".$food[1];

    // array $food에서 무작위로 값을 출력

    // $rand_num = rand(0, 4);
    // echo $food[$rand_num];

    // $random = array_rand($food);
    // echo $food[$random];
    

    // 배열 순서를 Mon, Wed, Sun, Tue가 되도록 week2를 변경

    // $week = array("Sun", "Mon", "Tue", "Wed");
    // $week2 = array($week[1], $week[3], $week[0], $week[2]);

    // echo $week2[0]." ".$week2[1]." ".$week2[2]." ".$week2[3];
    // print_r($week2);


    // 연상 배열
    // 키는 요리명, 값은 주재료 하나로 이루어진 배열을 만들기 (배열 길이는 4)

    // $arr_food = array("탕수육" => "돼지고기"
    //                     , "햄버거" => "패티"
    //                     , "피자" => "치즈"
    //                     , "치킨" => "닭고기");
    // echo $arr_food["피자"];


    // 키 : 김치 원소를 삭제

    $arr_food_del = array(
                    "된장찌개" => "파"
                    , "볶음밥" => "양파"
                    , "김치" => "마늘"
                    , "비빔밥" => "참기름"
                    );
    unset($arr_food_del["김치"]);
    print_r($arr_food_del);

?>