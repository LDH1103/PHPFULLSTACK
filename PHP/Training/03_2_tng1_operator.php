<?php

    //연산자를 이용해 계산
    $tng_num = 10;
    echo "산술 연산자\n";
    
    // 10을 더하기

    echo $tng_num." + 10 = ".$tng_num + 10, "\n";

    //5로 나누기
    echo $tng_num." / 5 = ".$tng_num / 5, "\n";

    //4를 뺴기
    echo $tng_num." - 4 = ".$tng_num - 4, "\n";

    //7로 나눈 나머지를 구하기
    echo $tng_num." % 7 = ".$tng_num % 7, "\n";

    //3을 곱하기
    echo $tng_num." * 3 = ".$tng_num * 3, "\n";
    echo "\n\n";




    //산술 대입 연산자를 이용해 계산
    $tng_num = 10;
    echo "산술 대입 연산자\n"; 

    // 10을 더하기
    echo $tng_num." + 10 = ".$tng_num += 10, "\n"; //tng_num = tng_num + 10 이기때문에, tng_num값이 20으로 갱신됨

    //5로 나누기
    echo $tng_num." / 5 = ".$tng_num /= 5, "\n"; //tng_num = tng_num / 5 이기때문에, tng_num값이 4로 갱신됨

    //4를 빼기
    echo $tng_num." - 4 = ".$tng_num -= 4, "\n";

    //7로나눈 나머지를 구하기
    echo $tng_num." % 7 = ".$tng_num %= 7, "\n";

    //3을 곱하기    
    echo $tng_num." * 3 = ".$tng_num *= 3, "\n";
?>