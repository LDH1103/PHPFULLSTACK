<?php
    // 0 ~ 10 값을 랜덤으로 받기 : rand(0, 10);

    // 0 = 가위, 1 = 바위, 2 = 보
    // $p1 = rand(0, 2);
    // $p2 = rand(0, 2);
    // $p1 = 2;
    // $p2 = 2;
    // $blank = ' ';
    // $text_p1 = 'p1';
    // $text_p2 = 'p2';
    // $text_whowin = 'win';
    // $text_draw = 'draw';
    // $s_0 = '= scissors';
    // $r_1 = '= rock';
    // $p_2 = '= paper';


    // if ($p1 < 0 || $p1 > 2 || $p2 < 0 || $p2 > 2) {
    //     echo 'wrong value';
    // } else if ($p1 === 0 && $p2 === 0) {
    //     echo $text_p1.$blank.$s_0.$blank.$text_p2.$s_0.$blank.$text_draw;
    // } else if ($p1 === 0 && $p2 === 1) {
    //     echo $text_p1.$blank.$s_0.$blank.$text_p2.$blank.$r_1.$blank.$text_p2.$blank.$text_whowin;
    // } else if ($p1 === 0 && $p2 === 2) {
    //     echo $text_p1.$blank.$s_0.$blank.$text_p2.$blank.$p_2.$blank.$text_p1.$blank.$text_whowin;
    // } else if ($p1 === 1 && $p2 === 0) {
    //     echo $text_p1.$blank.$r_1.$blank.$text_p2.$blank.$s_0.$blank.$text_p1.$blank.$text_whowin;
    // } else if ($p1 === 1 && $p2 === 1) {
    //     echo $text_p1.$blank.$r_1.$blank.$text_p2.$r.$blank.$text_draw;
    // } else if ($p1 === 1 && $p2 === 2) {
    //     echo $text_p1.$blank.$r_1.$blank.$text_p2.$blank.$p_2.$blank.$text_p1.$blank.$text_whowin;
    // } else if ($p1 === 2 && $p2 === 0) {
    //     echo $text_p1.$blank.$p_2.$blank.$text_p2.$blank.$r_0.$blank.$text_p1.$blank.$text_whowin;
    // } else if ($p1 === 2 && $p2 === 1) {
    //     echo $text_p1.$blank.$p_2.$blank.$text_p2.$blank.$s_1.$blank.$text_p1.$blank.$text_whowin;
    // } else if ($p1 === 2 && $p2 === 2) {
    //     echo $text_p1.$blank.$p_2.$blank.$text_p2.$blank.$p_2.$blank.$text_p1.$blank.$text_whowin;
    // } 
    


    // 0 = 가위, 1 = 바위, 2 = 보
    // $p1 = rand(0, 2);
    $p2 = rand(0, 2);
    $p1 = 0;
    // $p2 = 0;
    $blank = ' ';
    $text_p1 = 'p1';
    $text_p2 = 'p2';
    $text_whowin = 'win';
    $user_value = '';


    if ($p1 < 0 || $p1 > 2 || $p2 < 0 || $p2 > 2) {
        echo 'wrong value';
    } else if ($p1 === 0 && $p2 === 0) {
        $text_p1 = 'player = 가위';
        $text_p2 = 'computer = 가위';
        $text_whowin = '비겼습니다';
    } else if ($p1 === 0 && $p2 === 1) {
        $text_p1 = 'player = 가위';
        $text_p2 = 'computer = 바위';
        $text_whowin = 'computer 승리';
    } else if ($p1 === 0 && $p2 === 2) {
        $text_p1 = 'player = 가위';
        $text_p2 = 'computer = 보';
        $text_whowin = 'player 승리';
    } else if ($p1 === 1 && $p2 === 0) {
        $text_p1 = 'player = 바위';
        $text_p2 = 'computer = 가위';
        $text_whowin = 'computer 승리';
    } else if ($p1 === 1 && $p2 === 1) {
        $text_p1 = 'player = 바위';
        $text_p2 = 'computer = 바위';
        $text_whowin = '비겼습니다';
    } else if ($p1 === 1 && $p2 === 2) {
        $text_p1 = 'player = 바위';
        $text_p2 = 'computer = 보';
        $text_whowin = 'computer 승리';
    } else if ($p1 === 2 && $p2 === 0) {
        $text_p1 = 'player = 보';
        $text_p2 = 'computer = 가위';
        $text_whowin = 'computer 승리';
    } else if ($p1 === 2 && $p2 === 1) {
        $text_p1 = 'player = 보';
        $text_p2 = 'computer = 바위';
        $text_whowin = 'player 승리';
    } else if ($p1 === 2 && $p2 === 2) {
        $text_p1 = 'player = 보';
        $text_p2 = 'computer = 보';
        $text_whowin = '비겼습니다';
    } echo $text_p1.$blank."\n".$text_p2.$blank."\n".$text_whowin;


?>