<?php

    $max = 6;

    // 직각 삼각형

    // for ($n1 = 0; $n1 <= $max ; $n1++) 
    // { 
    //     for ($n2 = 0; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // 직각 삼각형 위아래 뒤집기

    // for ($n1 = 0; $n1 <= $max ; $n1++) 
    // { 
    //     for ($n2 = 0; $n2 < $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // > 모양 출력

    // for ($n1 = 0; $n1 <= $max ; $n1++) 
    // { 
    //     for ($n2 = 0; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    // for ($n1 = 1; $n1 <= $max ; $n1++) 
    // { 
    //     for ($n2 = 0; $n2 < $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // < 모양 반대로 채우기

    // for ($n1 = 0; $n1 <= $max ; $n1++) 
    // { 
    //     for ($n2 = -1; $n2 < $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    // for ($n1 = 1; $n1 <= $max ; $n1++) 
    // { 
    //     for ($n2 = -1; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // > 모양 반대로 채우기

    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = 0; $blank < $n1; $blank++) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = -1; $n2 < $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    // for ($n1 = 1; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = $max - $n1; $blank > 0; $blank--) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = -1; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }



    // 직각 삼각형 반대쪽으로 붙이기

    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = $max - $n1; $blank > 0; $blank--) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // 직각 삼각형 반대쪽으로 붙이고 위아래 뒤집기

    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = 0; $blank < $n1; $blank++) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 < $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // < 모양 출력

    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = $max - $n1; $blank > 0; $blank--) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    // for ($n1 = 1; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = 0; $blank < $n1; $blank++) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 < $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // 피라미드

    // for ($n1 = 0; $n1 <= $max; $n1++) { 
    //     for ($blank = $max - $n1; $blank > 0; $blank--) { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     for ($n3 = 1; $n3 < $n1; $n3++) { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // 피라미드 뒤집기

    // for ($n1 = 1; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = 0; $blank < $n1; $blank++) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 <= $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     for ($n3 = 1; $n3 <= $max - $n1; $n3++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }



    // 마름모

    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = $max - $n1; $blank > 0; $blank--) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 <= $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     for ($n3 = 1; $n3 <= $n1; $n3++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    // for ($n1 = 1; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = 0; $blank < $n1; $blank++) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 <= $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     for ($n3 = 1; $n3 <= $max - $n1; $n3++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // 피라미드 반대로 채우기

    // for ($n1 = 1; $n1 <= $max; $n1++)
    // {
    //     for ($n2 = $max; $n2 > $n1; $n2--) 
    //     {
    //         echo "*";
    //     }
    //     for ($n3 = 0; $n3 < $n1; $n3++) 
    //     {
    //         echo "  ";
    //     }
    //     for ($n4 = $max; $n4 > $n1; $n4--) 
    //     {
    //         echo "*";
    //     }
    //     echo "\n";
    // }

    // 마름모 반대로 채우기

    // for ($n1 = 1; $n1 <= $max; $n1++)
    // {
    //     for ($n2 = $max; $n2 > $n1; $n2--) 
    //     {
    //         echo "*";
    //     }
    //     for ($n3 = 0; $n3 < $n1; $n3++) 
    //     {
    //         echo "  ";
    //     }
    //     for ($n4 = $max; $n4 > $n1; $n4--) 
    //     {
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    // for ($n1 = 1; $n1 <= $max; $n1++)
    // {
    //     for ($n2 = 0; $n2 < $n1; $n2++) 
    //     {
    //         echo "*";
    //     }
    //     for ($n3 = $max; $n3 > $n1; $n3--) 
    //     {
    //         echo "  ";
    //     }
    //     for ($n4 = 0; $n4 < $n1; $n4++) 
    //     {
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    


    // 나무
    
    // for ($n1 = 1; $n1 <= $max; $n1++) { 
    //     for ($blank = $max - $n1; $blank > 0; $blank--) { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     for ($n3 = 1; $n3 < $n1; $n3++) { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }   
    // for ($n1 = 1; $n1 <= $max; $n1++) { 
    //     for ($blank = $max - $n1; $blank > 0; $blank--) { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 < $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     for ($n3 = 1; $n3 < $n1; $n3++) { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }
    // for ($n1 = 0; $n1 < $max - 2; $n1++)
    // {
    //     for ($blank = 0; $blank < $max - 3; $blank++)
    //         echo " ";
    //     for ($n2 = 0; $n2 < $max - 1; $n2++)
    //         echo "*";
    //         echo "\n";
    // }
?>