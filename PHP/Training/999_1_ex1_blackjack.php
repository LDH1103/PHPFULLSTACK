<?php

    // 블랙잭 게임
    // 카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

    // 1. 게임 시작시 유저와 딜러는 카드를 2개 받는다
        // 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력

    
    // $user = array( 0, 0, 0, 0, 0, 0 );
    // $dealer = array( 0, 0, 0, 0, 0, 0 );

    // if ( array_sum($user) > 21 ) {
    //     echo "user : ".array_sum($user)."\ndealer : ".array_sum($dealer)."\ndealer 승리";
    // } else if ( array_sum($dealer) > 21 ) {
    //     echo "user : ".array_sum($user)."\ndealer : ".array_sum($dealer)."\nuser 승리";
    // }

    // 2. 카드 합이 21을 초과하면 패배
        // 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력

    // 3. 카드의 계산은 아래의 규칙을 따른다
        // 3-1. 카드 2~10은 그 숫자대로 점수
        // 3-2. K, Q, J 는 10점
        // 3-3. A는 1점 또는 11점 둘중 하나로 계산
    $ace = array( "A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "K", "Q", "J" );
    $heart = array( "A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "K", "Q", "J" );
    echo array_rand( $ace );

    // 4. 카드의 합이 같으면 다음의 규칙에 따름
        // 4-1. 카드 수가 적은쪽이 승리
        // 4-2. 카드수가 같을경우 드로우

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


?>