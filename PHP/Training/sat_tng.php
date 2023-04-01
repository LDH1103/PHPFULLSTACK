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


    // $result = 0;
    // $max = 50;

    // for ($i = 0; $i <= $max; $i++) {
    //     $result += $i;
    // }

    // echo $result;


    // 연상 배열
    // 키값 : std_no, std_name, std_age, std_gender
    // $arr_acc = array(
    //     "std_no" => 21
    //     , "std_name" => "이동호"
    //     , "std_age" => 28
    //     , "std_gender" => "male"
    //     , "std_secret_info" => array(
    //                                 "std_city_no" => 0716
    //                                 , "std_addr" => "대구 중구 중앙대로"
    //                                 , "std_top_secret" => array( "std_top" => "??" )
    //                             )
    // );

    // print_r($arr_acc);

    // echo $arr_acc["std_name"];

    // echo array_search("이동호", $arr_acc);

    // echo $arr_acc["std_secret_info"]["std_addr"], "\n";
    // echo $arr_acc["std_age"], "\n";
    // echo $arr_acc["std_secret_info"]["std_top_secret"]["std_top"], "\n";


    // foreach문

    // $arr_acc = array(
    //     "std_no" => 21
    //     , "std_name" => "이동호"
    //     , "std_age" => 28
    //     , "std_gender" => "male"
    // );

    // foreach ($arr_acc as $key => $val) {
    //     echo "$key : $val\n";
    // }

    // key가 std_age 일때만 val 출력

    // foreach ($arr_acc as $key => $val) {
    //     if ($key === "std_age") {
    //         $val += 10;
    //         echo $val;
    //     }
    // }

    // foreach ($arr_acc as $key => $val) {
    //     if ($key === "std_age") {
    //         $arr_acc[$key] += 10;
    //     }
    // }
    
    // print_r($arr_acc);


    // 함수


    // -----------------------------
    // 함수명 : clean_class_room
    // 기능 : 이름과 구역을 받아 청소지점 문자열을 반환
    // 파라미터 : $param_name string
    //           $param_loc string
    // 리턴 : $result_str string
    // -----------------------------
    
    // function clean_clean_room($param_name, $param_loc) {
    //     $result = $param_name."씨, ".$param_loc."을/를 청소해 주세요.\n";
    //     return $result;
    // }
    
    // $result = clean_clean_room("봉정","책상");
    // echo $result;


    // -----------------------------
    // 함수명 : my_sum_all
    // 기능 : 1부터 지정숫자까지의 합을 구해서 리턴
    // 파라미터 : $parma_int int
    // 리턴 : $result_int int
    // -----------------------------

    function my_sum_all($param_int) {
        $result_int = 0;
        for ($i = 1; $i <= $param_int; $i++) {
            $result_int += $i;
        }
        return $result_int;
    }

    echo my_sum_all(50);

?>