<?php
    // 성적 
    // 범위 : 
    // 100 : A+, 90~99 : A, 80~90 : B, 70~79 : C, 60~69 : D, 60미만 : F 
    // 출력 문구 : "당신의 점수는 XXX점 입니다. <등급>"

    // $score = 0;
    // $y_score = '당신의 점수는';
    // $scroe_is = '점 입니다';
    // $blank = ' ';

    // if ($score == 100) 
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<A+>';
    // } 
    // else if ($score < 100 && $score >= 90) 
    // { 
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<A>';
    // } 
    // else if ($score < 90 && $score >= 80) 
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<B>';
    // } 
    // else if ($score < 80 && $score >= 70) 
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<C>';
    // } 
    // else if ($score < 70 && $score >= 60) 
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<D>';
    // } 
    // else 
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<F>';
    // }

    // 0 ~ 100 까지만 입력 받았을 때 출력을 하고, 그 외의 값일 경우 "잘못된 값을 입력 했습니다." 라고 출력

    // $score = 100;
    // $y_score = '당신의 점수는';
    // $scroe_is = '점 입니다';
    // $blank = ' ';
    // $grade = '<A>';

    // if ($score == 100) 
    // {
    //     $grade = '<A+>';
    // } 
    // else if ($score < 100 && $score >= 90) 
    // { 
    //     $grade = '<A>';
    // } 
    // else if ($score < 90 && $score >= 80) 
    // {
    //     $grade = '<B>';
    // } 
    // else if ($score < 80 && $score >= 70) 
    // {
    //     $grade = '<C>';
    // } 
    // else if ($score < 70 && $score >= 60) 
    // {
    //     $grade = '<D>';
    // } 
    // else
    // {
    //     $grade = '<F>';
    // }
    // echo $y_score.$blank.$score.$scroe_is.$blank.$grade;


    // $score = -100;
    // $y_score = '당신의 점수는';
    // $scroe_is = '점 입니다';
    // $blank = ' ';


    // if ($score > 100 || $score < 0 ) {
    //     echo '잘못된 값을 입력 했습니다.';
    // }
    // else if ($score == 100) 
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<A+>';
    // } 
    // else if ($score < 100 && $score >= 90) 
    // { 
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<A>';
    // } 
    // else if ($score < 90 && $score >= 80) 
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<B>';
    // } 
    // else if ($score < 80 && $score >= 70) 
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<C>';
    // } 
    // else
    // {
    //     echo $y_score.$blank.$score.$scroe_is.$blank.'<D>';
    // } 



    $score = 100;
    $y_score = '당신의 점수는';
    $scroe_is = '점 입니다';
    $blank = ' ';
    $grade = '<A>';


    if ($score > 100 || $score < 0 )
    {
        echo '잘못된 값을 입력 했습니다.';
    }
    else 
    {
        if ($score === 100) 
        {
            $grade = '<A+>';
        } 
        else if ($score >= 90)
        { 
            $grade = '<A>';
        } 
        else if ($score >= 80) 
        {
            $grade = '<B>';
        } 
        else if ($score >= 70) 
        {
            $grade = '<C>';
        } 
        else if ($score >= 60) 
        {
            $grade = '<D>';
        } 
        else
        {
            $grade = '<F>';
        }
        echo $y_score.$blank.$score.$scroe_is.$blank.$grade;
    }


?>