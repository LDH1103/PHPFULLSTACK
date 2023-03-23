<?php

$score = 100;
$y_score = '당신의 점수는';
$scroe_is = '점 입니다';
$blank = ' ';
$grade = 'A';
$grade_l = '<';
$grade_r = '>';

switch ($score) {
    case $score > 100 || $score < 0 :
        echo '잘못된 값을 입력 했습니다.';
        break;
    case $score === 100 :
        $grade = 'A+';
        echo $y_score.$blank.$score.$scroe_is.$blank.$grade_l.$grade.$grade_r;
        break;
    case $score === 90 :
        $grade = 'A';
        echo $y_score.$blank.$score.$scroe_is.$blank.$grade_l.$grade.$grade_r;
        break;
    case $score === 80 :
        $grade = 'B';
        echo $y_score.$blank.$score.$scroe_is.$blank.$grade_l.$grade.$grade_r;
        break;
    case $score === 70 :
        $grade = 'C';
        echo $y_score.$blank.$score.$scroe_is.$blank.$grade_l.$grade.$grade_r;
        break;
    case $score === 60 :
        $grade = 'D';
        echo $y_score.$blank.$score.$scroe_is.$blank.$grade_l.$grade.$grade_r;
        break;
    
    default:
        $grade = 'F';
        echo $y_score.$blank.$score.$scroe_is.$blank.$grade_l.$grade.$grade_r;
        break;
}


?>