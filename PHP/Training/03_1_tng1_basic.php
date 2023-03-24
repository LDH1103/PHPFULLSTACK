<?php

    echo "점심메뉴\n";
    echo "탕수육 8,000\n";
    echo "짜장면 6,000\n";
    echo "짬뽕 6,000\n\n";

    echo "점심메뉴\n탕수육 8,000\n짜장면 6,000\n짬뽕 6,000\n\n";

    $tang = "탕수육";
    $zza = "짜장면";
    $zzam = "짬뽕";
    $blank = " ";
    $line = "\n";
    $price_8000 = "8,000";
    $price_6000 = "6,000";

    echo "점심메뉴$line";
    echo $tang.$blank.$price_8000.$line;
    echo $zza.$blank.$price_6000.$line;
    echo $zzam.$blank.$price_6000.$line.$line;

    $p6000 = 6000;
    $p2000 = 2000;

    echo "점심메뉴$line";
    echo $tang.$blank.number_format($p6000 + $p2000).$line;
    echo $zza.$blank.number_format($p6000).$line;
    echo $zzam.$blank.number_format($p6000);
?>