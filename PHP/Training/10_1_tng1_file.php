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

    // for ($i = 2; $i <= 9; $i++) { 
    //     fputs($f_gugudan, $i."단"."\n");
    //     for ($j = 1; $j <= 9; $j++) { 
    //         fputs($f_gugudan, $i." * ".$j." = ".$i * $j."\n");
    //     }
    //     fputs($f_gugudan, "\n");
    // }



    // fputs를 한번만 쓰기

    // $gu = "";
    
    // for ($i = 2; $i <= 9; $i++) { 
    //     $gu .= $i."단"."\n";
    //     for ($j = 1; $j <= 9; $j++) { 
    //         $gu .= $i." * ".$j." = ".$i * $j."\n";
    //     }
    //     $gu .= "\n";
    // }
    
    // fputs($f_gugudan, $gu);


    // 함수로 구현

    function fnc_gugumake($dan) {
        $gugu = $dan."단\n";
        for ($i = 1; $i < 10; $i++) { 
            $gugu .= "$dan * $i = ".$dan*$i."\n";
        }
        return $gugu;
    }
    
    fputs($f_gugudan, fnc_gugumake(2));
    
    fclose($f_gugudan);
?>