<?php

    // while + if
    // $i = 0;
    // while ( $i <= 4 ) {
    //     if ( $i === 1 ) {
    //         echo "1입니다.";
    //     } else if ( $i === 4 ) {
    //         echo "4입니다.";
    //     }
    //     ++$i;
    // }


    // foreach + if 조합
    // $arr_ass = array( "a" => 1, "b" => 2, "c" => 3 );
    // foreach ( $arr_ass as $key => $val ) {
    //     echo "$key : $val\n";
    // }
    // foreach( $arr_ass as $key => $val ) {
    //     if( $key === "c" || $val === 2 ) {
    //         echo "if";
    //     }
    // }

    
    // 구구단
    // $result = "";
    // for( $i = 2; $i < 10; $i++ ) { 
    //     $result .= "$i 단\n";
    //     $j = 1;
    //     for ( $j = 1; $j < 10; $j++ ) { 
    //         $result .= "$i x $j = ".$i*$j."\n";
    //     }
    //     $result .= "\n";
    // }
    // echo "$result\n";

    // $result = "";
    // $i = 2;
    // while( $i < 10 ) {
    //     $result .= "$i 단\n";
    //     $j = 1;
    //     while( $j < 10 ) {
    //         $result .= "$i x $j = ".$i*$j."\n";
    //         ++$j;
    //     }
    //     $result .= "\n";
    //     ++$i;
    // }
    // echo "$result\n";


    // 1 ~ 100 숫자 중에 짝수의 합 구하기

    $result = 0;
    for( $i = 1; $i <= 100; $i++ ) { 
        if( $i % 2 === 0 ) {
            $result += $i;
        }
    }
    echo $result."\n";

    $result = 0;
    $i = 1;
    while( $i <= 100 ) {
        if( $i % 2 === 0 ) {
            $result += $i;
        }
        ++$i;
    }
    echo $result."\n";

    $result = 0;
    for( $i = 1; $i * 2 <= 100; $i++ ) { 
        $result += $i * 2;
    }
    echo $result."\n";

    $result = 0;
    for( $i = 2; $i <= 100; $i += 2 ) { 
        $result += $i;
    }
    echo $result."\n";
    

?>