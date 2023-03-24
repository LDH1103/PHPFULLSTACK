<?php

    // 직각삼각형

    // $max = 5;

    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // {
    //     for ($n2 = 0; $n2 < $n1 ; $n2++) { 
    //         echo "*";
    //     }
    //     echo "*\n";
    // }



    // 직각삼각형 반대로 붙이기

    // $max = 5;

    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // {
    //     for ($blank = $max - $n1; $blank > 0 ; $blank--) { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 < $n1 ; $n2++) { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }

    // $max = 5;

    // for ($n1 = 0; $n1 <= $max; $n1++) {
    //     for ($blank = $max - $n1; $blank > 0; $blank--) { 
    //         echo " ";
    //     }
    //     for ($n2 = 0; $n2 <= $n1 - 1; $n2++) {
    //         echo "*";
    //     }
    //     echo "\n";
    // }




    // 직각 삼각형 뒤집기

    // $max = 5;

    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // {
    //     for ($n2 = 0; $n2 <= $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }

    // $max = 10;
    
    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // {
    //     for ($n2 = 0; $n2 <= $max - $n1 ; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }



    // 피라미드

    // $max = 5;

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


    // $max = 10;
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



    // 마름모
    // $max = 10;
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


    $max = 5;
    for ($n1 = 0; $n1 <= $max; $n1++) 
    { 
        for ($blank = $max - $n1; $blank > 0; $blank--) 
        { 
            echo " ";
        }
        for ($n2 = 0; $n2 <= $n1; $n2++) 
        { 
            echo "*";
        }
        for ($n3 = 1; $n3 <= $n1; $n3++) 
        { 
            echo "*";
        }
        echo "\n";
    }
    for ($n1 = 1; $n1 <= $max; $n1++) 
    { 
        for ($blank = 0; $blank < $n1; $blank++) 
        { 
            echo " ";
        }
        for ($n2 = 0; $n2 <= $max - $n1; $n2++) 
        { 
            echo "*";
        }
        for ($n3 = 1; $n3 <= $max - $n1; $n3++) 
        { 
            echo "*";
        }
        echo "\n";
    }
?>
