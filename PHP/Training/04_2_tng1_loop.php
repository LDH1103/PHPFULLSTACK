<?php
    // 1. 반복문을 이용해서 아래와 같이 출력 해 주세요
    
    //갯수는 내가 입력한 갯수만큼
    // *
    // **
    // ***
    // ****
    // *****

    // $max_no = 15;

    // for ($n_1 = 0; $n_1 < $max_no; $n_1++)
    // {
    //     for ($n_2 = 0; $n_2 < $n_1; $n_2++)
    //     {
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // 뒤집기
    // $max_no = 15;

    // for ($n_1 = 0; $n_1 < $max_no; $n_1++)
    // {
    //     for ($n_2 = 0; $n_2 < $max_no - $n_1; $n_2++)
    //     {
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // 반대쪽으로 붙이기
    // $max_no = 15;

    // for ($n_1 = 0; $n_1 < $max_no; $n_1++)
    // {   
    //     for ($blank = $max_no - $n_1; $blank > 0; $blank--)
    //     {
    //         echo " ";
    //     }
    //     for ($n_2 = 0; $n_2 < $n_1; $n_2++)
    //     {
    //         echo "*";
    //     }
    //     echo "\n";   
    // }

    // 피라미드
    // $max_no = 15;
    // for ($n_1 = 0; $n_1 < $max_no; $n_1++)
    // {
    // for ($n_2 = $max_no - $n_1; $n_2 > 0; $n_2--)
    // {
    //     echo " ";
    // }
    // for ($n_3 = 0; $n_3 < $n_1; $n_3++)
    // {
    //     echo "*";
    // }
    // for ($n_4 = 1; $n_4 < $n_1; $n_4++)
    // {
    //     echo "*";
    // }
    // echo "\n";
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
    // for ($n1 = 0; $n1 <= $max; $n1++) 
    // { 
    //     for ($blank = 0; $blank < $n1; $blank++) 
    //     { 
    //         echo " ";
    //     }
    //     for ($n2 = 1; $n2 <= $max - $n1; $n2++) 
    //     { 
    //         echo "*";
    //     }
    //     for ($n3 = 1; $n3 <= $max - $n1; $n3++) 
    //     { 
    //         echo "*";
    //     }
    //     echo "\n";
    // }


    // $n1 = 2;
    // $n2 = 1;

    // for ($i = 0; $i < 8; $i++) { 
    //     echo $n1."단"."\n";
    //     $n2 = 1;
    //     for ($j = 0; $j < 9; $j++) { 
    //         echo $n1." * ".$n2." = ".$n1 * $n2."\n";
    //         $n2++;
    //     }
    //     $n1++;
    //     echo "\n";
    // }

?>