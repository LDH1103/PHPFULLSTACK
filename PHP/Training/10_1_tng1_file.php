<?php

    // 파일 전체 출력

    // $f_food = fopen("../Example/sam/food.txt", "r");

    // while (!feof($f_food)) {   // feof = 지금 파일의 포인터가 제일끝이 아니면 false, 제일끝이면 true
    //     print fgets($f_food);
    // }

    // // while ($line = fgets($f_food)) {
    // //     print $line;
    // // }

    // fclose($f_food);



    // 파일명 : gugudan.txt
    // 파일 위치 : sam
    // 내용은 아래와 같음
    // 2단
    // 2 * 1 = 2
    // 2 * 2 = 4
    // .........
    // 2 * 9 = 18

    $f_gugudan = fopen("../Example/sam/gugudan.txt", "w");

    $n1 = 2;
    $n2 = 1;

    for ($i = 1; $i < 9; $i++) { 
        fputs($f_gugudan, $n1."단"."\n");
        $n2 = 1;
        for ($j = 0; $j < 9; $j++) { 
            fputs($f_gugudan, $n1." * ".$n2." = ".$n1 * $n2."\n");
            $n2++;
        }
        $n1++;
        fputs($f_gugudan, "\n");
    }

    fclose($f_gugudan);
?>