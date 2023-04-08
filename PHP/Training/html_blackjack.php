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

    public function __construct() {
        $this->deck = $this->fnc_set_deck();
        shuffle( $this->deck );
        $this->player_card = array();
        $this->dealer_card = array();
        for($i = 0; $i < 2; $i++) { 
            array_push( $this->player_card, array_shift( $this->deck ) );
            array_push( $this->dealer_card, array_shift( $this->deck ) );
        }
        $this->player_score = $this->fnc_calculate_score( $this->player_card );
        $this->dealer_score = $this->fnc_calculate_score( $this->dealer_card );
    }

    public function fnc_calculate_score( $havingcard ) {
        $sum = 0;
        foreach($havingcard as $card) {
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
                $sum += intval( substr( $card, 0, 1 ) );
            }
        }
        return $sum;
    }

    public function fnc_get_card() {
        array_push( $this->player_card, array_shift( $this->deck ) );
        if ( $this->fnc_calculate_score( $this->player_card ) > 21) {
            return false;
        } else {
            return true;
        }
    }

    public function fnc_dealer_get_card() {
        while( $this->fnc_calculate_score( $this->dealer_card ) < 17 ) {
            array_push( $this->dealer_card, array_shift( $this->deck ) );
            if( $this->fnc_calculate_score( $this->dealer_card ) > 21 ) {
                return false;
            }
        }
        return true;
    }

    public function fnc_compare_card() {
        if( !$this->fnc_dealer_get_card() ) {
            return false;
        } else {
            return true;
        }
    }
    public function fnc_check_winner() {
        if( $this->fnc_calculate_score( $this->player_card ) > 21 ) {
            return "Dealer 승리";
        } else if( $this->fnc_calculate_score( $this->dealer_card ) > 21) {
            return "Player 승리";
        } else if( $this->fnc_calculate_score( $this->player_card ) > $this->fnc_calculate_score( $this->dealer_card ) ) {
            return "Player 승리";
        } else if( $this->fnc_calculate_score( $this->player_card ) < $this->fnc_calculate_score( $this->dealer_card ) ) {
            return "Dealer 승리";
        } else {
            if ( count( $this->player_card ) < count( $this->dealer_card ) ) { 
                return "Player 승리";
            } else if ( count( $this->player_card ) > count( $this->dealer_card ) ) {
                return "Dealer 승리";
            } else {
                return "비겼습니다";
            }
        }
    }
}

if (isset($_POST["player"])) {
    $input = $_POST["player"];
    echo $input . "<br>";
    if ($input === 3) {
        $game = new Blackjack();

        echo "----------------------새 게임-----------------------";
        echo "<br>\nPlayer 카드 : ".implode( ", ", $game->player_card )."<br>\n";
        echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
        echo "<br>\nDealer 카드 : ".implode( ", ", $game->dealer_card )."<br>\n";
        echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."<br>\n";
        echo "----------------------------------------------------<br>\n";
		if( $input === 1 ) {
			if( !$game->fnc_get_card() ) {
				echo "<br>\nPlayer 카드 : ".implode( ", ", $game->player_card )."<br>\n";
				echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
				echo "<br>\nDealer 카드 : ".implode( ", ", $game->dealer_card )."<br>\n";
				echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."<br>\n";

			}
			echo "Player 카드 : ".implode( ", ", $game->player_card )."<br>\n";
			echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
		} else if( $input === 2 ) { 
			if( !$game->fnc_compare_card() ) {
				echo "\n<br>Player 카드 : ".implode( ", ", $game->player_card )."<br>\n";
				echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
				echo "\n<br>Dealer 카드 : ".implode( ", ", $game->dealer_card )."<br>\n";
				echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."<br>\n";

			}
			echo "\n<br>Player 카드 : ".implode( ", ", $game->player_card )."<br>\n";
			echo "Player 점수 : ".$game->fnc_calculate_score( $game->player_card )."<br>\n";
			echo "\n<br>Dealer 카드 : ".implode( ", ", $game->dealer_card )."<br>\n";
			echo "Dealer 점수 : ".$game->fnc_calculate_score( $game->dealer_card )."<br>\n";

		} else if( $input === 0 ) { // 0 입력시 break
			echo "게임 종료";

		}
	
	echo "\n<br>".$game->fnc_check_winner()."<br><br>\n\n";
	echo "----------------------------------------------------<br>\n";
    }
}

// first, check if the form has been submitted
if(isset($_POST["player"])) {
    // instantiate the Blackjack class
    $game = new Blackjack();
    
    // handle the different form submissions
    switch($_POST["player"]) {
    case "게임 종료":
    echo "<h2>" . $game->fnc_check_winner() . "</h2>";
    break;
    case "카드 더받기":
    $game->fnc_get_card();
    break;
    case "카드 비교":
    $game->fnc_compare_card();
    echo "<h2>" . $game->fnc_check_winner() . "</h2>";
    break;
    case "새 게임":
    $game = new Blackjack();
    break;
    default:
    break;
    }
    }
    
    // display the current game status
    echo "<h2>Player Score: " . $game->player_score . "</h2>";
    echo "<pre>" . print_r($game->player_card, true) . "</pre>";
    echo "<h2>Dealer Score: " . $game->dealer_score . "</h2>";
    echo "<pre>" . print_r($game->dealer_card, true) . "</pre>";
    ?>
    
    </body>
    </html>
    // end of code
?>

</body>
</html>