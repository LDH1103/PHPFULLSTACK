<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <!-- <label for="p1"></label>
        <input type="number" id="p1" name="p1">
        <input type="submit" value="제출"> -->
        <label for="post"></label>
        <input type="submit" value="0" id="p1" name="p1">
        <input type="submit" value="1" id="p1" name="p1">
        <input type="submit" value="2" id="p1" name="p1">
    </form>
</body>
</html>

<?php

    // 0 = 가위, 1 = 바위, 2 = 보
    // $p1 = rand(0, 2);
    
    $p2 = rand(0, 2);
    $p1 = (int)$_POST['p1'];
    var_dump($_POST);
    
    // $p2 = 0;
    $blank = ' ';
    $text_p1 = 'p1';
    $text_p2 = 'p2';
    $text_whowin = 'win';
    $user_value = '';


    if ($p1 < 0 || $p1 > 2) {
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