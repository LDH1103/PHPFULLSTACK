<?php

    // swith 기본 구조

    // switch ($variable) {
    //     case 'value':
    //         # code...
    //         break;
        
    //     default:
    //         # code...
    //         break;
    // }


    $val = 1;

    switch ( $val ) {
        case 0:
            echo "숫자 0 입니다.";
            break;
        case 1:
            echo "숫자 1 입니다";
            break;

        default: // if의 else같은것 
            echo "디폴트 입니다";
            break;
    }


?>