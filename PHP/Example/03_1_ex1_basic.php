<?php

    // print "안녕하세요.\n"; // \n은 계행(줄바꿈)
    // print "안녕하세요. print입니다.\n";

    // echo "안녕하세요. echo입니다.\n";

    // $test_num = '변수변수';

    //$12 // 변수 제일앞에 숫자가 나오면 안됨

    //$asdsad-sadas // 변수안에 영어,숫자,언더바 외에 다른 특수문자가 들어가도 안됨

    //네이밍 기법
    //  1. 카멜 기법 : 낙타의 등을 연상해서 단어의 첫글자는 대문자, 나머지는 소문자로 작성
    //      ex) $TestNum
    //  2. 스네이크 기법 : 뱀을 연상해서 단어와 단어 사이를 "_"로 이어주고, 전부 소문자로 작성하는 기법, PHP에서는 스네이크 기법을 주로 사용함
    //      ex) $test_num

    // echo $test_num;

    // $t1 = 0;
    // $t2 = $t1 + 1;
    // $t3 = 4;
    // $t3 = $t1 + $t2;

    // $t1 = 3;

    // echo $t1, " ", $t2, " ", $t3;


    //4. 비교 연산자
$t1 = 1;
$t2 = '1';

    // var_dump(1 > 2);
    // var_dump(1 < 2);
    // var_dump(1 >= 2);
    // var_dump(1 <= 2);

    // var_dump(1 == '1');
    // var_dump(1 === '1'); // 데이터 형식까지 비교
    // var_dump($t1 == $t2);
    // var_dump($t1 === $t2);
    
    // var_dump($t1 != $t2);
    // var_dump($t1 !== $t2); // 데이터 형식까지 비교

    //5. 논리 연산자

    // AND 논리 연산자 : 둘 다 참일때만 true
    // var_dump( 1 == 1 && 2 == 2 );
    // var_dump( 1 == 1 && 2 == 3 ); 

    // OR 논리 연산자 : 둘 중 하나만 만족하면 true
    // var_dump( 1 == 1 || 2 == 3 );

    // XOR 논리 연산자 : 둘의 결과가 다르면 true 같으면 false -- 잘 안쓰임
    // var_dump( 1 == 2 xor 2 == 2 );

    // NOT 논리 연산자 : 결과를 반대로 뒤집음 (true가 나오면 false, false가 나오면 true)
    // var_dump( !( 1 == 1 ) );
    
?>