<?php

class BlackJack
{
	private $arr_num;
	private $arr_shape;
	private $arr_deck;

	// construct
	public function __construct()
	{
		$this->arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
		$this->arr_shape = array("♠", "♣", "◆", "♥");
		$this->set_deck();
	}

	// set
	private function set_deck()
	{
		// 카드 52장 덱에 셋팅
		foreach( $this->arr_shape as $shape )
		{
			foreach( $this->arr_num as $num )
			{
				$this->arr_deck[] = $num.$shape;
			}
		}
		// 덱 셔플
		shuffle( $this->arr_deck );
	}

	public function debug()
	{
		var_dump( $this->arr_deck );
	}
}
$obj_bj = new BlackJack();
$obj_bj->debug();

?>