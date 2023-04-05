<?php
/*
파일명 :
시스템명 :
이력
    v001 : new - 21(사번)
    v002 : fnc_print_str 수정 - 21(사번)

*/





    // while + if
    // $i = 0;
    // while ( $i <= 4 ) {
    //     if ( $i === 1 ) {
    //         echo "1입니다.";
    //     } else if ( $i === 4 ) {
    //         echo "4입니다.";
    //     }
    //     ++$i;
    // }


    // foreach + if 조합
    // $arr_ass = array( "a" => 1, "b" => 2, "c" => 3 );
    // foreach ( $arr_ass as $key => $val ) {
    //     echo "$key : $val\n";
    // }
    // foreach( $arr_ass as $key => $val ) {
    //     if( $key === "c" || $val === 2 ) {
    //         echo "if";
    //     }
    // }

    
    // 구구단
    // $result = "";
    // for( $i = 2; $i < 10; $i++ ) { 
    //     $result .= "$i 단\n";
    //     $j = 1;
    //     for ( $j = 1; $j < 10; $j++ ) { 
    //         $result .= "$i x $j = ".$i*$j."\n";
    //     }
    //     $result .= "\n";
    // }
    // echo "$result\n";

    // $result = "";
    // $i = 2;
    // while( $i < 10 ) {
    //     $result .= "$i 단\n";
    //     $j = 1;
    //     while( $j < 10 ) {
    //         $result .= "$i x $j = ".$i*$j."\n";
    //         ++$j;
    //     }
    //     $result .= "\n";
    //     ++$i;
    // }
    // echo "$result\n";


    // 1 ~ 100 숫자 중에 짝수의 합 구하기

    // $result = 0;
    // for( $i = 1; $i <= 100; $i++ ) { 
    //     if( $i % 2 === 0 ) {
    //         $result += $i;
    //     }
    // }
    // echo $result."\n";

    // $result = 0;
    // $i = 1;
    // while( $i <= 100 ) {
    //     if( $i % 2 === 0 ) {
    //         $result += $i;
    //     }
    //     ++$i;
    // }
    // echo $result."\n";

    // $result = 0;
    // for( $i = 1; $i * 2 <= 100; $i++ ) { 
    //     $result += $i * 2;
    // }
    // echo $result."\n";

    // $result = 0;
    // for( $i = 2; $i <= 100; $i += 2 ) { 
    //     $result += $i;
    // }
    // echo $result."\n";
    

    // 배열
    // $arr_test = 
    //     array (
    //         "a" => 1
    //         ,"b" => 2
    //         ,"info" => 
    //             array(
    //                 "info_a" =>3
    //                 ,"info_b" => 4
    //                 ,"info_arr" =>
    //                     array(
    //                         "f_1" => 5
    //                         ,"f_2" => 7
    //                     )
    //             )
    //     );
    // echo $arr_test["info"]["info_a"]."\n".$arr_test["info"]["info_arr"]["f_2"]."\n";

    // $arr_test = 
    //     array (
    //         1
    //         ,2
    //         ,array(
    //             "info_a" =>3
    //             ,"info_b" => 4
    //             ,"info_arr" =>
    //                 array(
    //                     "f_1" => 5
    //                     ,"f_2" => 7
    //                 )
    //             )
    //     );
    // echo $arr_test[2]["info_arr"]["f_1"];


    // 함수

    // 함수명     : fnc_sum
    // 기능       : 파라미터를 더한 값을 리턴
    // 파라미터   : INT $param_a,
    //             INT $param_b
    // 리턴값     : INT $sum; 
    // function fnc_sum( $param_a, $param_b ) {
    //     $sum = $param_a + $param_b;
    //     return $sum;
    // }
    // function fnc_sum2( ...$param_numbers ) {
    //     // $sum = 0;
    //     // foreach( $param_numbers as $val ) {
    //     //     $sum += $val;
    //     // }
    //     // return $sum;
    //     return array_sum( $param_numbers );
    // }
    // echo fnc_sum2( 1, 2, 3 );

    // function fnc_global() {
    //     global $global_i;
    //     $global_i = 0;
    // }
    // $global_i = 5;
    // fnc_global();
    // echo $global_i;

    // function fnc_static() {
    //     static $static_i = 0;
    //     echo $static_i;
    //     $static_i++;
    // }
    // fnc_static();
    // fnc_static();
    // fnc_static();

    // function fnc_reference( &$param_str ) {
    //     $param_str = "fnc_reference";
    // }
    // $str = "aaa";
    // fnc_reference( $str );
    // echo $str;

    // 함수를 하나 만들고 여러번 호출해서 별찍기
    // 수정 후 수정이력 남기기

    // function fnc_print_star( $param_int ) { // v002 del
    // function fnc_print_other( $param_str_print, $param_int ) { // v002 add
    // // function fnc_print_other( $param_int, $param_str_print = "O" ) { // 넘겨받은 파라미터가 없다면 "O"가 출력됨
    //     for ( $i = 0; $i < $param_int; $i++ ) { 
    //         // echo "*"; // v002 del
    //         echo $param_str_print; // v002 add
    //     }
    //     echo "\n";
    // }

    // // fnc_print_star( 1 ); // v002 del
    // // fnc_print_star( 2 );
    // // fnc_print_star( 3 );
    // // fnc_print_star( 4 );
    // // fnc_print_star( 5 ); 
    // $str_print = "$"; // v002 add
    // fnc_print_other( $str_print, 1 );
    // fnc_print_other( $str_print, 2 );
    // fnc_print_other( $str_print, 3 );
    // fnc_print_other( $str_print, 4 );
    // fnc_print_other( $str_print, 5 );


    // function fnc_reference2( &$param_str ) { // &$param_str은 $str을 가리키고있음
    //     echo "2번 : $param_str \n";
    //     $param_str = "fnc_reference2에서 값 변경";
    //     echo "3번 : $param_str \n";
    // }
    // $str = "aaa";
    // echo "1번 : $str \n";
    // fnc_reference2( $str );
    // echo "4번 : $str \n";

    // 1,2번 "aaa", 3,4번 "fnc_reference2에서 값 변경"


    
    // ---------- class ----------
    // class Food {
    //     // 접근 제어 지시자
    //     // public    : 어디서든(class 밖에서도) 접근 가능
    //     // private   : 해당 class 내에서만 접근 가능
    //     // protected : class 자기 자신과 상속 클래스 내에서만 접근 가능

    //     // 멤버 변수
    //     protected $str_name;
    //     protected $int_price;

    //     // 메소드 = calss 안에 있는 함수
    //     // setter
    //     public function __construct( $param_name, $param_price ) {
    //         $this->str_name = $param_name;
    //         $this->int_price = $param_price;
    //     }

    //     // getter
    //     public function fnc_print_food() {
    //         $str = $this->str_name." : ".$this->int_price."원\n";
    //         echo $str;
    //     }

    //     public function fnc_modify_price( $param_price ) {
    //         $this->int_price = $param_price;
    //     }
    // }

    // // $obj_food = new Food( "탕수육", 10000 );
    // // $obj_food->fnc_print_food();

    // // // Food Class 멤버 변수 $int_price의 값을 12000으로 바꾸기
    // // $obj_food->fnc_modify_price( 12000 );
    // // $obj_food->fnc_print_food();

    // // 상속 : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용할수 있음
    // class KoreanFood extends Food { // 부모로부터 상속 받으려면 클래스명 extends 부모 클래스명
    //     protected $side_dish;

    //     public function __construct( $param_name, $param_price, $param_side_dish ) {
    //         $this->str_name = $param_name;
    //         $this->int_price = $param_price;
    //         $this->side_dish = $param_side_dish;
    //     }

    //     // 오버라이딩 : 부모 클래스에서 정의된 메소드를 자식 클래스에서 재정의
    //     public function fnc_print_food() {
    //         // $str = $this->str_name." : ".$this->int_price."원\n"."반찬 : ".$this->side_dish."\n";
    //         parent::fnc_print_food(); // 부모 클래스에 있는 fnc_print_food를 실행하겠다
    //         $str = "반찬 : ".$this->side_dish."\n"; // 부모 클래스의 fnc_print_food에 내용 추가
    //         echo $str;
    //     }

    // }

    // $obj_korean_food = new KoreanFood( "치킨", 20000, "치킨무" );
    // $obj_korean_food->fnc_print_food();


    class People {
        protected $name;

        public function setName( $str_name ) {
            $this->name = $str_name;
        }
        public function peoplePrint() {
            $print_people = "이름 : ".$this->name;
            echo $print_people;
        }
    }

    // $obj_people = new People();
    // $obj_people->setName( "LDH" );
    // $obj_people->peoplePrint();

    class Student extends People {
        protected $id;

        public function setid( $str_name, $str_id ) {
            $this->name = $str_name;
            $this->id = $str_id;
        }
        public function studentPrint() {
            parent::peoplePrint();
            $print_people = "\n"."ID : ".$this->id;
            echo $print_people;
        }
    }

    $obj_student = new Student();
    $obj_student->setid( "LDH", "aaa" );
    $obj_student->studentPrint();

?>