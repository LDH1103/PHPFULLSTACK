<?php

    // CLASS : 동종의 객체들이 모여있는 집합
    // ex) 우리반 사람, 우리반에 있는 컴퓨터, 우리반에 있는 TV = 객체, 우리 반 = CLASS

    // 명명 규칙 : 첫글자는 대문자
    class Student {
        // 클래스 멤버 변수
        public $std_name; // 어디서든 접근(사용) 가능
        private $std_id; // Student Class 내에서만 접근 가능
        protected $std_age; // 상속 Class 내에서만 접근 가능
        // 접근제어 지시자 : public, private, protected

        // class 안에 있는 function을 method라고 부름
        public function print_student($param_std_name, $param_std_age) {
            $result_name = "이름 : ".$param_std_name;
            $result_age = "나이 : ".$param_std_age."세";
            echo $result_name;
            echo "\n";
            echo $result_age;
        }
    }

    // class 호출하기 : new 클래스명 (변수에 담아줌)
    $obj_Student = new Student;
    // 변수명 -> 클래스 안에서 사용할것
    $obj_Student -> print_student("홍길동", 27);


?>