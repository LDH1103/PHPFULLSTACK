<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Jack</title>
    <link rel=stylesheet href='blackjack2.css' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
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
				if( strpos( $card, "A" ) !== false ) {
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
				return "<span class='winner_msg'>Dealer 승리</span><br><br>";
			} else if( $this->fnc_calculate_score( $this->dealer_card ) > 21) {
				return "<span class='winner_msg'>Player 승리</span><br><br>";
			} else if( $this->fnc_calculate_score( $this->player_card ) > $this->fnc_calculate_score( $this->dealer_card ) ) { // 2입력시 점수 비교
				return "<span class='winner_msg'>Player 승리</span><br><br>";
			} else if( $this->fnc_calculate_score( $this->player_card ) < $this->fnc_calculate_score( $this->dealer_card ) ) {
				return "<span class='winner_msg'>Dealer 승리</span><br><br>";
			} else {
				if ( count( $this->player_card ) < count( $this->dealer_card ) ) { // 점수가 같을경우 카드갯수 비교
					return "<span class='winner_msg'>Player 승리</span><br><br>";
				} else if ( count( $this->player_card ) > count( $this->dealer_card ) ) {
					return "<span class='winner_msg'>Dealer 승리</span><br><br>";
				} else {
					return "<span class='winner_msg'>비겼습니다</span><br><br>";
				}
			}
		}
	}

    // var_dump 보기편하게 줄바꿈
    function pre_dump( $array ) {   
        if ( $array != "deck" ) {
            echo "<pre>";
            echo var_dump($array);
            echo "</pre>";
        }
    }

	
	if ( session_start() ) {
		session_unset();
        session_destroy();
	}

    session_start();
    if ( !isset( $_SESSION['game'] ) || isset( $_POST["new_game"] ) ) {
        $_SESSION['game'] = new Blackjack();
    }
    
    $game = $_SESSION['game'];
    // pre_dump($game);

    echo "<div class='container'>";
    echo "<div class='top'>";
    if ( isset( $_POST["hit"] ) ) {
        if ( !$game->fnc_get_card() ) {
            echo $game->fnc_check_winner();
            session_unset();
            session_destroy();
        }
    } else if ( isset( $_POST["stand"] ) ) {
        $game->fnc_compare_card();
        echo $game->fnc_check_winner();
    }
    echo "</div>";

    echo "<div class='score'>";
    echo implode( ", ", $game->player_card )."<br>";
    echo "\nPlayer : ".$game->fnc_calculate_score( $game->player_card )."<br>";
    echo "<br>".implode( ", ", $game->dealer_card )."<br>";
    echo "Dealer : ".$game->fnc_calculate_score( $game->dealer_card )."<br>";
    echo "</div>";
    
    echo "<form method='POST' action='blackjack2.php'>";
    echo "<div class='btns'>";
    echo "<input type='submit' name='new_game' value='새 게임' class='btn btn-outline-dark'>";
    // 플레이어의 점수가 21점 이하고, 카드비교 버튼을 클릭하지 않았을때
    if ( $game->fnc_calculate_score( $game->player_card ) <= 21 && !isset( $_POST["stand"]) ) {
        echo "<input type='submit' name='hit' value='더 받기' class='btn btn-outline-dark btn_center'>";
        echo "<input type='submit' name='stand' value='비교' class='btn btn-outline-dark'>";
    } 
    // 카드비교 버튼을 클릭한뒤, 더받기 버튼이 반응하지않게
    else if ( $game->fnc_calculate_score( $game->player_card ) <= 21 && isset( $_POST["stand"]) ) {
        echo "<input type='button' value='더 받기' class='btn btn-outline-dark btn_center'>";
        echo "<input type='button' value='비교' class='btn btn-outline-dark'>";
    } 
    // 플레이어의 점수가 21점 이상일때, 버튼이 반응하지 않게
    else if ( $game->fnc_calculate_score( $game->player_card ) > 21 ) {
        echo "<input type='button' value='더 받기' class='btn btn-outline-dark btn_center'>";
        echo "<input type='button' value='비교' class='btn btn-outline-dark'>";
    } 
    // 카드비교 버튼을 클릭할경우 세션 종료
    else if ( isset( $_POST["stand"]) ) {
        echo "<input type='submit' name='hit' value='더 받기' class='btn btn-outline-dark btn_center'>";
        echo "<input type='submit' name='stand' value='비교' class='btn btn-outline-dark'>";
        session_unset();
        session_destroy();
    }
    echo "</div>";
    echo "</form>";
    echo "</div>";
?>
</body>
</html>