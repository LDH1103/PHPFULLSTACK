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

    // $result = 0;
    // for( $i = 1; $i <= 100; $i++ ) { 
    //     if( $i % 2 === 0 ) {
    //         $result += $i;
    //     }
    // }
    // echo $result."\n";

    // $result = 0;
    // $i = 1;
    // while( $i <= 100 ) {
    //     if( $i % 2 === 0 ) {
    //         $result += $i;
    //     }
    //     ++$i;
    // }
    // echo $result."\n";

    // $result = 0;
    // for( $i = 1; $i * 2 <= 100; $i++ ) { 
    //     $result += $i * 2;
    // }
    // echo $result."\n";

    // $result = 0;
    // for( $i = 2; $i <= 100; $i += 2 ) { 
    //     $result += $i;
    // }
    // echo $result."\n";
    

    // 배열
    // $arr_test = 
    //     array (
    //         "a" => 1
    //         ,"b" => 2
    //         ,"info" => 
    //             array(
    //                 "info_a" =>3
    //                 ,"info_b" => 4
    //                 ,"info_arr" =>
    //                     array(
    //                         "f_1" => 5
    //                         ,"f_2" => 7
    //                     )
    //             )
    //     );
    // echo $arr_test["info"]["info_a"]."\n".$arr_test["info"]["info_arr"]["f_2"]."\n";

    // $arr_test = 
    //     array (
    //         1
    //         ,2
    //         ,array(
    //             "info_a" =>3
    //             ,"info_b" => 4
    //             ,"info_arr" =>
    //                 array(
    //                     "f_1" => 5
    //                     ,"f_2" => 7
    //                 )
    //             )
    //     );
    // echo $arr_test[2]["info_arr"]["f_1"];


    // 함수

    // 함수명     : fnc_sum
    // 기능       : 파라미터를 더한 값을 리턴
    // 파라미터   : INT $param_a,
    //             INT $param_b
    // 리턴값     : INT $sum; 
    // function fnc_sum( $param_a, $param_b ) {
    //     $sum = $param_a + $param_b;
    //     return $sum;
    // }
    // function fnc_sum2( ...$param_numbers ) {
    //     // $sum = 0;
    //     // foreach( $param_numbers as $val ) {
    //     //     $sum += $val;
    //     // }
    //     // return $sum;
    //     return array_sum( $param_numbers );
    // }
    // echo fnc_sum2( 1, 2, 3 );

    // function fnc_global() {
    //     global $global_i;
    //     $global_i = 0;
    // }
    // $global_i = 5;
    // fnc_global();
    // echo $global_i;

    // function fnc_static() {
    //     static $static_i = 0;
    //     echo $static_i;
    //     $static_i++;
    // }
    // fnc_static();
    // fnc_static();
    // fnc_static();

    // function fnc_reference( &$param_str ) {
    //     $param_str = "fnc_reference";
    // }
    // $str = "aaa";
    // fnc_reference( $str );
    // echo $str;

    function fnc_print_star( $param_int ) {
        for ( $i = 0; $i < $param_int; $i++ ) { 
            echo "*";
        }
        echo "\n";
    }

    fnc_print_star( 1 );
    fnc_print_star( 2 );
    fnc_print_star( 3 );
    fnc_print_star( 4 );
    fnc_print_star( 5 ); 

    for ($i = 0; $i <= 5; $i++) { 
        fnc_print_star( $i ); 
    }

?>