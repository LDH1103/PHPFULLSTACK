<?php

    // swith 기본 구조

    // switch (조건) {
    //     case '값1':
    //         값1일 경우 처리
    //         break;
    //     case '값2':
    //         값2일 경우 처리
    //         break;

    //     default:
    //         어떤값도 아닐경우 처리
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