<?php

    // 파일 전체 출력

    $f_food = fopen("../Example/sam/food.txt", "r");

    while (!feof($f_food)) {   // feof = 지금 파일의 포인터가 제일끝이 아니면 false, 제일끝이면 true
        print fgets($f_food);
    }

    // while ($line = fgets($f_food)) {
    //     print $line;
    // }

    fclose($f_food);

?>