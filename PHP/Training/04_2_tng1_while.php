<?php
    // 구구단 2단을 while문으로 작성
    // $no2 = 2;
    // $num = 1;

    // while ( $num < 10 )
    // {
    //     echo $no2.' * '.$num.' = '.$no2*$num."\n";
    //     ++$num;
    // }


    // 2 ~ 9 단을  while문으로 한번에 출력
    // $no = 2; //단
    // $num = 1;
    // $max = 9;

    // while ( $no <= $max )
    // {
    //     echo $no."단\n";
    //     while ( $num <= $max )
    //     {
    //         echo $no.' * '.$num.' = '.$no * $num."\n";
    //         ++$num;
    //     }
    //     echo "\n";
    //     $num = 1;
    //     ++$no;
    // }

    
    // 2 ~ 9 단을 for문으로 출력
    
    $maxno = 9;

    for ($no = 2; $no <= $maxno; $no++) { 
        echo $no,"단\n";
        for ($num = 1; $num <= $maxno; $num++) {
            echo $no.' * '.$num.' = '.$no * $num."\n";
        }
        echo "\n";
    }


?>


