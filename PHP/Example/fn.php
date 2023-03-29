<?php

    // void 함수 (리턴값이 없는)

    function sum($n1, $n2) {
        echo $n1 + $n2."\n";
        // return; return을 생략해도 자동으로 들어가있지만, return값은 없음
    }

    // sum(1, 2);
    // sum(2, 4);


    // return 함수 (리턴값이 있는)

    function sum2($n1, $n2) {
        return $n1 + $n2;
    }

    $result = sum2(3, 6); // 3+6인 9가 sum2의 값으로 바뀜, echo sum2(3, 6);을 해보면 9가나옴
    echo $result."\n"; // 추가 응용 가능

?>