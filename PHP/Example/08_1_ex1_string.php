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
    $url = "https://www.google.com/search?q=PHP+rand&source=hp&ei=m_4jZMa4FKvg2roPvfGWwA4&iflsig=AOEireoAAAAAZCQMq-kkf6r2eXgW1x60ixcQJDsuc-mw&oq=&gs_lcp=Cgdnd3Mtd2l6EAEYADIXCAAQigUQ6gIQtAIQigMQtwMQ1AMQ5QIyFwgAEIoFEOoCELQCEIoDELcDENQDEOUCMhcIABCKBRDqAhC0AhCKAxC3AxDUAxDlAjIXCAAQigUQ6gIQtAIQigMQtwMQ1AMQ5QIyFAgAEIoFEOoCELQCEIoDELcDEOUCMhcIABCKBRDqAhC0AhCKAxC3AxDUAxDlAjIXCAAQigUQ6gIQtAIQigMQtwMQ1AMQ5QIyFwgAEIoFEOoCELQCEIoDELcDENQDEOUCMhcILhCKBRDqAhC0AhCKAxC3AxDUAxDlAjIUCAAQigUQ6gIQtAIQigMQtwMQ5QJQAFgAYJwLaAFwAHgAgAEAiAEAkgEAmAEAsAEK&sclient=gws-wiz";

    $arr_url = parse_url($url); // 긴 URL을 분할해줌
    // var_dump($arr_url);

    parse_str($arr_url["query"], $arr_parse);
    var_dump($arr_parse);

?>