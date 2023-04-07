<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="./html_blackjack.php">
        <label for="post"></label>
        <input type="submit" value="게임 종료" id="0" name="player">
        <input type="submit" value="카드 더받기" id="1" name="player">
        <input type="submit" value="카드 비교" id="2" name="player">
        <input type="submit" value="새 게임" id="3" name="player">
    </form>

<?php

class Blackjack {
    public $deck;
    public $player_card;
    public $dealer_card;
    public $player_score;
    public $dealer_score;

    // method명		: fnc_set_deck
    // parameter 	: 없음
    // 기능 		: 덱 세팅
    public function fnc_set_deck() {
        $pattern = array( "♡", "◇", "♧", "♤" );
        $nums = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K" );
        $deck = array();
        foreach( $pattern as $patt ) {
            foreach( $nums as $num ) {
                array_push( $deck, "$num$patt" );
            }
        }
        return $deck;
    }

    // 게임 시작
    public function __construct() {
        $this->deck = $this->fnc_set_deck();
        shuffle( $this->deck );
        $this->player_card = array();
        $this->dealer_card = array();
        // 2장씩 나눠주고 덱에서 빼기
        for($i = 0; $i < 2; $i++) { 
            array_push( $this->player_card, array_shift( $this->deck ) );
            array_push( $this->dealer_card, array_shift( $this->deck ) );
        }
        $this->player_score = $this->fnc_calculate_score( $this->player_card );
        $this->dealer_score = $this->fnc_calculate_score( $this->dealer_card );
    }

    // method명		: fnc_calculate_score
    // parameter 	: $havingcard
    // 기능 		: 합계 계산
    public function fnc_calculate_score( $havingcard ) {
        $sum = 0;
        foreach($havingcard as $card) {
            // A가 나왔을때 11점을 더하면 게임오버라면 1점만 더하고, 아니라면 11점을 더하기
            // strpos() : 문자열에서 특정 문자열의 첫 번째 발생 위치를 반환, 문자열이 없다면 false를 반환함
            if( strpos( $card, "A" 
            ) !== false ) {
                if ($sum + 11 > 21) {
                    $sum += 1;
                } else {
                    $sum += 11;
                }
            } else if ( strpos( $card, "K" ) !== false || strpos( $card, "Q" ) !== false || strpos( $card, "J" ) !== false || strpos( $card, "10" ) !== false) {
                $sum += 10;
            } else {
                $sum += intval( substr( $card, 0, 1 ) ); // 특수기호 잘라서 int로 바꾸고 점수에 더하기
            }
        }
        return $sum;
    }

    // method명		: fnc_get_card
    // parameter 	: 없음
    // 기능 		: 1 입력시 카드 더받고 21초과인지 계산
    public function fnc_get_card() {
        array_push( $this->player_card, array_shift( $this->deck ) );
        if ( $this->fnc_calculate_score( $this->player_card ) > 21) {
            return false;
        } else {
            return true;
        }
    }

    // method명		: fnc_dealer_get_card
    // parameter 	: 없음
    // 기능 		: 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
    public function fnc_dealer_get_card() {
        while( $this->fnc_calculate_score( $this->dealer_card ) < 17 ) {
            array_push( $this->dealer_card, array_shift( $this->deck ) );
            if( $this->fnc_calculate_score( $this->dealer_card ) > 21 ) {
                return false;
            }
        }
        return true;
    }

    // method명		: fnc_compare_card
    // parameter 	: 없음
    // 기능 		: 2 입력시 카드 비교
    public function fnc_compare_card() {
        if( !$this->fnc_dealer_get_card() ) {
            return false;
        } else {
            return true;
        }
    }

    // method명		: fnc_check_winner
    // parameter 	: 없음
    // 기능 		: 승자 확인, 카드 갯수 카운팅
    public function fnc_check_winner() {
        if( $this->fnc_calculate_score( $this->player_card ) > 21 ) {
            return "Dealer 승리";
        } else if( $this->fnc_calculate_score( $this->dealer_card ) > 21) {
            return "Player 승리";
        } else if( $this->fnc_calculate_score( $this->player_card ) > $this->fnc_calculate_score( $this->dealer_card ) ) { // 2입력시 점수 비교
            return "Player 승리";
        } else if( $this->fnc_calculate_score( $this->player_card ) < $this->fnc_calculate_score( $this->dealer_card ) ) {
            return "Dealer 승리";
        } else {
            if ( count( $this->player_card ) < count( $this->dealer_card ) ) { // 점수가 같을경우 카드갯수 비교
                return "Player 승리";
            } else if ( count( $this->player_card ) > count( $this->dealer_card ) ) {
                return "Dealer 승리";
            } else {
                return "비겼습니다";
            }
        }
    }
}

$input = $_POST["player"];
echo $input."<br>";
if ( $input = 3 ) {
    $start = 1;
}
while( $start === 1 ) {
    if ( $input === 3 ) {
        $game = new Blackjack();

        echo "----------------------새 게임-----------------------";
        echo "<br>\nPlayer 카드 : ".implode( ", ", $game->player_card )."<br>\n";
        echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
        echo "<br>\nDealer 카드 : ".implode( ", ", $game->dealer_card )."<br>\n";
        echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."<br>\n";
        echo "----------------------------------------------------<br>\n";

            if( $input === 1 ) {
                if( !$game->fnc_get_card() ) { // 1 입력시 21초과일경우 break
                    echo "<br>\nPlayer 카드 : ".implode( ", ", $game->player_card )."<br>\n";
                    echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
                    echo "<br>\nDealer 카드 : ".implode( ", ", $game->dealer_card )."<br>\n";
                    echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."<br>\n";
                    break;
                }
                echo "Player 카드 : ".implode( ", ", $game->player_card )."<br>\n";
                echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
            } else if( $input === 2 ) { 
                if( !$game->fnc_compare_card() ) { // 2 입력시 21초과일경우 break
                    echo "\n<br>Player 카드 : ".implode( ", ", $game->player_card )."<br>\n";
                    echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
                    echo "\n<br>Dealer 카드 : ".implode( ", ", $game->dealer_card )."<br>\n";
                    echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."<br>\n";
                    break;
                }
                echo "\n<br>Player 카드 : ".implode( ", ", $game->player_card )."<br>\n";
                echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
                echo "\n<br>Dealer 카드 : ".implode( ", ", $game->dealer_card )."<br>\n";
                echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."<br>\n";
                break;
            } else if( $input === 0 ) { // 0 입력시 break
                echo "게임 종료";
                break;
            }

        echo "\n<br>".$game->fnc_check_winner()."<br><br>\n\n";
        echo "----------------------------------------------------<br>\n";
    }
    $start = 0;
}

?>

</body>
</html>
