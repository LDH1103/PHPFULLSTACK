<?php
    // 1. if기본형태

    // if( 1 < 2 ) {
    //     echo '참';
    // }
    // else {
    //     echo '거짓';
    // }

    $num = 4;

    if( $num == 0 ) {
        echo '0입니다.';
    }
    else if( $num === 1) {
        echo '1입니다.';
    }
    else if( $num === 2) {
        echo '2입니다.';
    }
    else if( $num === 3) {
        echo '3입니다.';
    }
    else {
        echo '모르겠다.';
    }


?>