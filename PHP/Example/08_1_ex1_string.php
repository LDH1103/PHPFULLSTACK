<?php

    // 문자열 합치기

    // $str_1 = "aaa";
    // $str_2 = "bbb";
    // $str_sum = $str_1.$str_2;
    // echo $str_sum;

    // 대소문자 변환

    // $str_en = "abcd efgh";

    // echo strtolower($str_en)."\n"; // 소문자로 변환
    // echo strtoupper($str_en)."\n"; // 대문자로 변환
    // echo ucfirst($str_en)."\n"; // 제일 앞 글자만 대문자로 변환
    // echo ucwords($str_en)."\n"; // 각 단어의 제일 앞 글자만 대문자로 변환


    // URL 관련 함수

    // $url = "https://www.google.com/search?q=PHP+rand&source=hp&ei=m_4jZMa4FKvg2roPvfGWwA4&iflsig=AOEireoAAAAAZCQMq-kkf6r2eXgW1x60ixcQJDsuc-mw&oq=&gs_lcp=Cgdnd3Mtd2l6EAEYADIXCAAQigUQ6gIQtAIQigMQtwMQ1AMQ5QIyFwgAEIoFEOoCELQCEIoDELcDENQDEOUCMhcIABCKBRDqAhC0AhCKAxC3AxDUAxDlAjIXCAAQigUQ6gIQtAIQigMQtwMQ1AMQ5QIyFAgAEIoFEOoCELQCEIoDELcDEOUCMhcIABCKBRDqAhC0AhCKAxC3AxDUAxDlAjIXCAAQigUQ6gIQtAIQigMQtwMQ1AMQ5QIyFwgAEIoFEOoCELQCEIoDELcDENQDEOUCMhcILhCKBRDqAhC0AhCKAxC3AxDUAxDlAjIUCAAQigUQ6gIQtAIQigMQtwMQ5QJQAFgAYJwLaAFwAHgAgAEAiAEAkgEAmAEAsAEK&sclient=gws-wiz";

    // $arr_url = parse_url($url); // 긴 URL을 분할해줌
    // // var_dump($arr_url);

    // parse_str($arr_url["query"], $arr_parse);
    // var_dump($arr_parse);


    // 역순의 문자열

    // $str_abcd = "abcd";
    // echo strrev($str_abcd); // 문자열 뒤집기, 한글은 안됨


    // 문자열 자르기
    
    // $str_1 = "가나다라마";
    // echo substr($str_1, 3)."\n"; // 한글을 자르려면 한글자당 3byte
    // echo mb_substr($str_1, 3)."\n"; // 멀티 바이트(알파벳이 아닌 글자)를 글자수대로 자를려면 mb_substr, 알파벳도 가능
    // echo mb_substr($str_1, 2, 1)."\n"; // 3번째 글자부터 1개만 남겨두기
    // echo mb_substr($str_1, -1); // 음수도 가능 (뒤에서부터 자르기)


    // 문자열 앞뒤 빈공간 지우기

    // $str_trim = "          abcd         \n";
    // echo trim($str_trim); // rtrim, ltrim
    // echo "aaa"; // 계행 체크용


    // 문자열의 길이를 구하는 함수

    // $str_len = "가나다라";
    // echo strlen($str_len)."\n"; // 한글은 3byte기 떄문에 12가 출력
    // echo mb_strlen($str_len);


    // 문자열 포맷에 따라 출력하는 함수

    // printf("안녕하세요. %s입니다. %d", "PHP", 1234); // %s : 문자열, %d : 정수
    
    // define("WELCOME", "안녕하세요. %s님.");
    // printf(WELCOME, "홍길동");
    

    // 문자열을 분리하는 함수

    // $str_sscanf = "가나다라 50 abcd";
    // sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
    // echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";
    

    // 문자열을 반복해서 찍어주는 함수

    // echo str_repeat("가나", 3);


    // 문자열을 특정문자열로 분리하는 함수 : explode()

    $str_expl = "홍길동,27세,남자,의적,조선";
    $arr_expl = explode(",", $str_expl); // explode(구분할 문자열, 문자열이 담긴 변수)
    // print_r($arr_expl);


    // 배열을 특정 문자열로 합치는 함수 : implode()

    $str_impl = implode(" / ", $arr_expl);
    echo $str_impl;

?>