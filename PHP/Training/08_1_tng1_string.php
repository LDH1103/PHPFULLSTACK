<?php

    // 문자열 자르기로 "PHP입니다."만 출력

    // $str_tng = "안녕하세요. PHP입니다.";
    // echo mb_substr($str_tng, 7)."\n";
    // echo mb_substr($str_tng, -7)."\n";

    // // "세요. P"만 출력

    // echo mb_substr($str_tng, 3, 5)."\n";
    // echo mb_substr($str_tng, 3, -6)."\n";
    // echo mb_substr($str_tng, -11, 5)."\n";


    // 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
    // 에러 번호 : 에러 종류
    // 1 : 시스템
    // 2 : 로그인
    // 3: 접속 

    // define("ERROR_MSG", "ERROR(%d) : %s ERROR가 발생했습니다.");
    // printf(ERROR_MSG, 1, "시스템");
    // echo "\n";
    // printf(ERROR_MSG, 2, "로그인");
    // echo "\n";
    // printf(ERROR_MSG, 3, "접속");


    // I am always Hello. 에서 "Hello"를 "Happy"로 바꾸어 출력

    // define("STR", "I am always %s.");
    // printf (STR, "Hello");
    // echo "\n";
    // printf (STR, "Happy");
    // echo "\n";
    

    // $str_1 = "I am always Hello.";
    // echo mb_substr($str_1, 0, 12)."Happy."."\n"; 
    // echo mb_substr($str_1, -18, -6)."Happy."."\n"; 


    // $str_expl = "I am always Hello.";
    // $arr_expl = explode(" ", $str_expl);
    // $arr_expl[3] = "Happy.";

    // $str_impl = implode(" ", $arr_expl);
    // echo $str_impl."\n";


    // $str_all = "I am always Hello.";
    // $str_expl = explode("Hello", $str_all);
    // $str_impl = implode("Happy", $str_expl);
    // echo $str_impl;



    // 함수로 만들기
    // 함수명 : my_str_replace
    // 리턴값 : String $result_str


    // function my_str_replace($a) {
    //     $result_expl = explode("Hello", $a);
    //     $result_str = implode("Happy", $result_expl);
    //     return $result_str;
    // }

    // $result = my_str_replace("I am always Hello.");
    // echo $result;


    // 재사용성 개선

    // function my_str_replace($param_str, $param_separator, $param_ch) {
    //     $arr_expl = explode($param_separator, $param_str);
    //     $result_str = implode($param_ch, $arr_expl);
    //     return $result_str;
    // }

    // $result = my_str_replace("I am always Hello.", "Hello", "Apple");
    // echo $result;


    // PHP 기본제공 함수

    // $str = "I am always Hello.";
    // echo str_replace("Hello", "Happy", $str); // str_replace(찾을 단어, 바꿀 단어, 문장);


    // // 문자열로 된 숫자 2개를 정수로 변환하여 더한 후 다시 문자열로 변환하여 출력

    // $num1 = "314";
    // $num2 = "615";
    // $num3 = (int)$num1 + (int)$num2;
    // $num3 = (string)$num3;

    // $num4 = $num1 + $num2;

    // var_dump($num3);
    // echo "\n";

?>