<?php

    // 블랙잭 게임
    // 카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

    // 1. 게임 시작시 유저와 딜러는 카드를 2개 받는다
        // 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
        // 1-2. 둘다 21이 넘으면 유저가 패배
    

    while(true) {
        echo '시작';
        print "\n";
        fscanf(STDIN, "%d\n", $input);        
        if($input === 0) {
            break;
        }        
        echo $input."\n";
        $user = array( 0, 0, 0, 0, 0, 0 );
        $dealer = array( 0, 0, 0, 0, 0, 0 );

        for ( $i = 0; $i < 2; $i++ ) {
            $user[$i] = mt_rand( 1, 12 );
            $dealer[$i] = mt_rand( 1, 12 );
            }
        $sum_user = array_sum( $user );
        $sum_dealer = array_sum( $dealer );
        if ( $sum_user > 21 && $sum_dealer > 21 ) {
            echo "user : ".$sum_user."\ndealer : ".$sum_dealer."\ndealer 승리\n";
        } else if ( $sum_user > 21 ) {
            echo "user : ".$sum_user."\ndealer : ".$sum_dealer."\ndealer 승리\n";
        } else if ( $sum_dealer > 21 ) {
            echo "user : ".$sum_user."\ndealer : ".$sum_dealer."\nuser 승리\n";
        } else {
            echo "ee\n";
        }

        print "\n";
    }
    echo "끝!\n";

    // 2. 카드 합이 21을 초과하면 패배
        // 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력

    // 3. 카드의 계산은 아래의 규칙을 따른다
        // 3-1. 카드 2~10은 그 숫자대로 점수
        // 3-2. K, Q, J 는 10점
        // 3-3. A는 1점 또는 11점 둘중 하나로 계산
    // $card = array(
    //             array( "A_spade", "2_spade", "3_spade", "4_spade", "5_spade", "6_spade", "7_spade", "8_spade", "9_spade", "10_spade", "K_spade", "Q_spade", "J_spade" )
    //             ,array( "A_heart", "2_heart", "3_heart", "4_heart", "5_heart", "6_heart", "7_heart", "8_heart", "9_heart", "10_heart", "K_heart", "Q_heart", "Jheart_" )
    //             ,array( "A_clover", "2_clover", "3_clover", "4_clover", "5_clover", "6_clover", "7_clover", "8_clover", "9_clover", "10_clover", "K_clover", "Q_clover", "J_clover", )
    //             ,array( "A_dia", "2_dia", "3_dia", "4_dia", "5_dia", "6_dia", "7_dia", "8_dia", "9_dia", "10_dia", "K_dia", "Q_dia", "J_dia", )
    //         );
    // $i = mt_rand( 0, 3 );
    // $j = mt_rand( 0, 12 );
    // $card_result = $card[$i][$j];

    // $user = array( 0, 0, 0, 0, 0, 0 );
    // $dealer = array( 0, 0, 0, 0, 0, 0 );


    // $token = strtok( $card_result, '_' );
    // var_dump( $token );

	// for($n1 = 0; $n1 < 6;) {
	// 	$tmp = 0;
	// 	$user = $card_result[$n1];
	// 	for($n2 = 0; $n2 <= $n1; $n2++) {
	// 		if($nums[$n2] === $user) {
	// 			$tmp = 1;
	// 		}
	// 	}
	// 	if($tmp === 0) {
	// 		$nums[$n1] = $user;
    //         echo $nums[$n1]." ";
	// 		$n1++;
	// 	}
	// }

    // 4. 카드의 합이 같으면 다음의 규칙에 따름
        // 4-1. 카드 수가 적은쪽이 승리
        // 4-2. 카드수가 같을경우 비김

    // 5. 유저가 카드를 받을때 딜러는 아래의 규칙을 따른다
        // 5-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
        // 5-2. 17이상일 경우는 받지 않는다

    // 6. 1입력 : 카드 더받기, 2입력 : 카드 비교, O입력 : 게임 종료

    // while(true) {
    //     echo '시작';
    //     print "\n";
    //     fscanf(STDIN, "%d\n", $input);        
    //     if($input === 0) {
    //         break;
    //     }
    //     echo $input;
    //     print "\n";
    // }
    // echo "끝!\n";

    // 7. 한번 사용한 카드는 다시 쓸수 없음

?>