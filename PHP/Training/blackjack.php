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
			foreach ( $pattern as $patt ) {
				foreach ( $nums as $num ) {
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
			array_push( $this->player_card, array_shift( $this->deck ) );
			array_push( $this->player_card, array_shift( $this->deck ) );
			array_push( $this->dealer_card, array_shift( $this->deck ) );
			array_push( $this->dealer_card, array_shift( $this->deck ) );
			$this->player_score = $this->fnc_calculate_score( $this->player_card );
			$this->dealer_score = $this->fnc_calculate_score( $this->dealer_card );
		}

		// method명		: fnc_calculate_score
		// parameter 	: $havingcard
		// 기능 		: 합계 계산
		public function fnc_calculate_score( $havingcard ) {
			$sum = 0;
			foreach ($havingcard as $card) {
				// A가 나왔을때 11점을 더하면 게임오버라면 1점만 더하고, 아니라면 11점을 더하기
				// strpos() : 문자열에서 특정 문자열의 첫 번째 발생 위치를 반환, 문자열이 없다면 false를 반환함
				if ( strpos( $card, "A" ) !== false ) {
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
			while ( $this->fnc_calculate_score( $this->dealer_card ) < 17 ) {
				array_push( $this->dealer_card, array_shift( $this->deck ) );
				if ( $this->fnc_calculate_score( $this->dealer_card ) > 21 ) {
					return false;
				}
			}
			return true;
		}

		// method명		: fnc_compare_card
		// parameter 	: 없음
		// 기능 		: 2 입력시 카드 비교
		public function fnc_compare_card() {
			if ( !$this->fnc_dealer_get_card() ) {
				return false;
			} else {
				return true;
			}
		}

		// method명		: fnc_check_winner
		// parameter 	: 없음
		// 기능 		: 승자 확인
		public function fnc_check_winner() {
			if ( $this->fnc_calculate_score( $this->player_card ) > 21 ) {
				return "Dealer 승리";
			} else if ( $this->fnc_calculate_score( $this->dealer_card ) > 21) {
				return "Player 승리";
			} else if ( $this->fnc_calculate_score( $this->player_card ) > $this->fnc_calculate_score( $this->dealer_card ) ) { // 2입력시 점수 비교
				return "Player 승리";
			} else if ( $this->fnc_calculate_score( $this->player_card ) < $this->fnc_calculate_score( $this->dealer_card ) ) {
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
	
	// 변수로 만들어놓기
	"Player 카드 : ".implode( ", ", $game->player_card )."\n";
	"Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."\n\n";
	"Dealer 카드 : ".implode( ", ", $game->dealer_card )."\n";
	"Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."\n";

	$input = null;
	while ( !( $input === 0 ) ) {
		sleep( 3 );
		$game = new Blackjack();
		echo "---------------------새 게임------------------------\n\n";
		echo "Player 카드 : ".implode( ", ", $game->player_card )."\n";
		echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."\n\n";
		echo "Dealer 카드 : ".implode( ", ", $game->dealer_card )."\n";
		echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."\n";

		while (true) {
			echo "\n1 : 카드 더받기\n2 : 카드 비교\nO : 게임 종료\n";
			echo "----------------------------------------------------\n";
			fscanf( STDIN, "%d\n", $input ); 
			if ( $input === 1 ) {
				if ( !$game->fnc_get_card() ) { // 1 입력시 21초과일경우 break
					break;
				}
				echo "Player 카드 : ".implode( ", ", $game->player_card )."\n";
				echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."\n\n";
				echo "Dealer 카드 : ".implode( ", ", $game->dealer_card )."\n";
				echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."\n";
			} else if ( $input === 2 ) { 
				if ( !$game->fnc_compare_card() ) { // 2 입력시 21초과일경우 break
					break;
				}
				echo "Player 카드 : ".implode( ", ", $game->player_card )."\n";
				echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."\n\n";
				echo "Dealer 카드 : ".implode( ", ", $game->dealer_card )."\n";
				echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."\n";
				break; 
			} else if ( $input === 0 ) { // 0 입력시 break
				break;
			}
		}

		// echo "\nPlayer 카드: ".implode( ", ", $game->player_card )."\n";
		// echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."\n";
		// echo "\nDealer 카드: ".implode( ", ", $game->dealer_card )."\n";
		// echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."\n";
		echo "\n".$game->fnc_check_winner()."\n\n";
		echo "----------------------------------------------------\n";
	}

?>