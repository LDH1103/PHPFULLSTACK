<?php

    // // "Hello, world!"를 출력하는 PHP 코드를 작성하세요.
    // echo "Hello, world!";

    // // 변수 $name에 "Alice"라는 문자열을 할당하고, 이를 출력하는 PHP 코드를 작성하세요.
    // $name = "Alice";
    // echo $name;

    // // 변수 $num1과 $num2에 각각 5와 7을 할당하고, 이 두 변수를 더한 결과를 출력하는 PHP 코드를 작성하세요.
    // $num1 = 5;
    // $num2 = 7;
    // echo $num1 + $num2;

    // // 배열 $fruits에 "apple", "banana", "orange"를 순서대로 저장하고, 이 배열을 반복문을 사용하여 출력하는 PHP 코드를 작성하세요.
    // $fruits = array("apple", "banana", "orange");
    // foreach ($fruits as $val) {
    //     echo $val."\n";
    // }

    // // 조건문을 사용하여 변수 $age가 18 이상이면 "성인입니다"를, 18 미만이면 "미성년자입니다"를 출력하는 PHP 코드를 작성하세요.
    // $age = 18;
    // if ($age < 18) {
    //     echo "미성년자 입니다";
    // } else {
    //     echo "성인 입니다";
    // }



    // 주어진 문자열에서 모든 단어의 첫 글자를 대문자로 변경하는 PHP 함수를 작성하세요. (예: "hello world" -> "Hello World")
    // $str = "hello world";
    // echo ucfirst($str);

    // 주어진 정수 배열에서 가장 큰 값과 가장 작은 값을 출력하는 PHP 코드를 작성하세요.
    // $num = array(1, 2, 3, 4, 10, 5, 0);
    // echo max($num)."\n";
    // echo min($num);

    // 주어진 연관 배열에서 "name"이라는 키의 값을 "John"에서 "Alice"로 변경하는 PHP 코드를 작성하세요.
    // $info = array(
    //     "name" => "John",
    //     "age" => 30,
    //     "email" => "john@example.com"
    // );

    // foreach ($info as $key => $val) {
    //     if ($key === "name") {
    //         $info["name"] = "Alice";
    //     }
    // }
    // var_dump($info);

    // 1부터 100까지의 정수 중에서 3의 배수만 출력하는 PHP 코드를 작성하세요.
    // for ($i = 0; $i <= 100; $i++) { 
    //     if ($i % 3 === 0) {
    //         echo $i."\n";
    //     }
    // }

    // 1부터 100까지의 정수 중에서 5의 배수인 경우 "Fizz"를, 7의 배수인 경우 "Buzz"를, 5와 7의 공배수인 경우 "FizzBuzz"를 출력하는 PHP 코드를 작성하세요.
    // for ($i = 0; $i <= 100; $i++) { 
    //     if ($i % 5 === 0 && $i % 7 === 0) {
    //         echo "FizzBuzz\n";
    //     } else if ($i % 5 === 0) {
    //         echo "Fizz\n";
    //     } else if ($i % 7 === 0) {
    //         echo "Buzz\n";
    //     }
    // }

    // 다음과 같은 학생 정보가 담긴 배열이 있다고 가정합니다. 배열의 각 요소는 학생의 이름과 성적으로 이루어져 있습니다. 성적이 60점 이상인 학생의 이름과 성적을 출력하는 PHP 코드를 작성하세요.
    // $students = array(
    //     array("name" => "Alice", "score" => 80),
    //     array("name" => "Bob", "score" => 50),
    //     array("name" => "Charlie", "score" => 70),
    //     array("name" => "Dave", "score" => 90),
    //     array("name" => "Emily", "score" => 40)
    // );

    // foreach ($students as $key => $val) {
    //     if ($val["score"] >= 60) {
    //         echo $val["name"].$val["score"]."\n";
    //     }
    // }

    // ---------------------------------------

    // $math_scores = array(
    //     "Alice" => 70,
    //     "Bob" => 80,
    //     "Charlie" => 90,
    //     "David" => 65,
    //     "Emily" => 95
    // );

    // 전체 학생의 평균 성적을 구하는 PHP 코드를 작성하세요.
    // echo array_sum($math_scores) / count($math_scores);

    // 최고 성적을 받은 학생의 이름을 출력하는 PHP 코드를 작성하세요.
    // echo array_search(max($math_scores),$math_scores);

    // 성적이 80점 이상인 학생들의 이름과 성적을 출력하는 PHP 코드를 작성하세요.
    // foreach ($math_scores as $key => $val) {
    //     if ($val >= 80) {
    //         echo $key." ".$val."\n";
    //     }
    // }


    // 입력받은 숫자들의 합을 구하는 PHP 코드를 작성하세요.
    // function sum_num() {
    //     $args = func_get_args();
    //     $sum = 0;

    //     foreach ($args as $val) {
    //         $sum += $val;
    //     }
    //     return $sum;
    // }
    
    // echo sum_num(1,10);


    // 파일 확장자에 따라 이미지 파일인지 아닌지를 검사하는 PHP 함수를 작성하십시오. 예를 들어, "image.jpg"는 이미지 파일이고, "document.doc"는 이미지 파일이 아닙니다.
    // function fnc_test( $a ) {
    //     if ( strpos($a, ".jpg") !== false ) {
    //         echo "이미지 파일입니다.";
    //     } else {
    //         echo "이미지 파일이 아닙니다.";
    //     }
    // }

    // fnc_test( "document.doc" );

    // 두 개의 정수 배열이 주어지면 배열의 모든 요소를 합산하고 결과를 반환하는 함수를 작성하세요.
    // function sum_array( $param_arr_1, $param_arr_2 ) {
    //     $sum = 0;
    //     foreach ( $param_arr_1 as $val ) {
    //         $sum += $val;
    //     }
    //     foreach ( $param_arr_2 as $val ) {
    //         $sum += $val;
    //     }
    //     return $sum;
    // }

    // $arr_1 = array( 1, 2, 3, 4, 5 );
    // $arr_2 = array( 1, 2, 3, 4, 5 );
    // echo sum_array( $arr_1, $arr_2 );

    // 정렬되지 않은 정수 배열이 주어지면 배열에서 가장 큰 두 개의 숫자를 찾는 함수를 작성하세요.
    function find_max2( $param_arr ) {
        rsort($param_arr);
        echo $param_arr[0]." ".$param_arr[1];
    }

    $arr = array( 1, 10, 9, 8, 7, 3, 2, 100 );
    find_max2( $arr )
?>