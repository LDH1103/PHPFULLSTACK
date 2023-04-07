<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 비긴다.
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한번 사용한 카드는 다시 쓸 수 없다.

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);

// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";

// 1.$arr_deck에 순서대로 카드셋팅----------------------------------
function fnc_set_deck(){
    $arr_shape = array( "♡", "◇", "♧", "♤" );
    $arr_nums = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K" );
    $arr_deck = array();
    $player = array();
    $dealer = array();

    foreach ( $arr_shape as $shape ) {
        foreach ( $arr_nums as $num ) {
            array_push( $arr_deck, "$shape$num" );
        }
    }
    return $arr_deck;
}

// var_dump(fnc_set_deck());

// 2.$arr_deck배열 섞기----------------------------------
function start()
{
    $player = array();
    $dealer = array();
    $deck = fnc_set_deck();
    shuffle($deck);
    for($i = 1 ; $i <= 2; $i++){
        array_push($player, array_shift($deck));
        array_push($dealer, array_shift($deck));
    }
    $get_card = array($player,$dealer);
    return $get_card;
}

// 3. 합계 계산
function score_sum($player_card){
    // 랜덤으로 카드두장을 뽑은 상태
    $player_sum = 0;
    foreach ($player_card as $val)
        {
            if( strpos($val, "A") !== false )
            {
                $player_sum += 11;
            }
            else if( strpos($val, "K") !== false ||  strpos($val, "Q") !== false ||  strpos($val, "J") !== false )
            {
                $player_sum += 10;
                // echo "player카드 : ".$val."\n";
            }
            else{
                $player_sum += intval(mb_substr($val, 1));
                // echo "player카드 : ".$val."\n";
            }
        }
    var_dump($player_card);
    echo $player_sum;
}
score_sum(start()[0]);

// $player_sum = 0;
// foreach ($player as $val)
// {
//     if( strpos($val, "A") !== false )
//     {
//         if ($sum + 11 > 21){
//             $sum += 1;
//         }
//         else{
//             $sum += 11;
//         }
//     }
//     else if( strpos($val, "K") !== false ||  strpos($val, "Q") !== false ||  strpos($val, "J") !== false )
//     {
//         $player_sum += 10;
//         // echo "player카드 : ".$val."\n";
//     }
//     else{
//         $player_sum += intval(mb_substr($val, 1));
//         // echo "player카드 : ".$val."\n";
//     }
// }
// // echo $player_sum;
// echo "\n";

// $dealer_sum = 0;
// foreach ($dealer as $val)
// {
//     if( strpos($val, "A") !== false)
//     {
//         $dealer_sum += 11;
//         echo "dealer카드 : ".$val."\n";
//     }
//     else if( strpos($val, "K") !== false ||  strpos($val, "Q") !== false ||  strpos($val, "J") !== false )
//     {
//         $dealer_sum += 10;
//         echo "dealer카드 : ".$val."\n";
//     }
//     else{
//         $dealer_sum += intval(mb_substr($val, 1));
//         echo "dealer카드 : ".$val."\n";
//     }
// }
// // echo $dealer_sum;
// echo "\n";

// if( $player_sum > $dealer_sum)
// {
//     echo "player점수 : ".$player_sum."\n"."dealer점수 : ".$dealer_sum."\n"."player 승리";
// }
// else if( $dealer_sum > $player_sum )
// {
//     echo "player점수 : ".$player_sum."\n"."dealer점수 : ".$dealer_sum."\n"."dealer 승리";
// }
// else { 
//     echo "player점수 : ".$player_sum."\n"."dealer점수 : ".$dealer_sum."\n"."draw";
// }

?>