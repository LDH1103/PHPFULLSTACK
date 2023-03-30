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

        // private객체를 class밖에서 사용할수 있는 방법
        public function set_std_id($param_id) {
            // this 포인터 : class 자기 자신을 가르키고 있음
            $this -> std_id = $param_id;
        }

        public function get_std_id() {
            return $this -> std_id;
        }
    }

    // class 호출하기 : new 클래스명 (변수에 담아줌)
    $obj_Student = new Student;

    // class의 method를 호출
    // $obj_Student -> print_student("홍길동", 27);

    // class의 멤버변수 사용 방법

    // public
    // $obj_Student -> std_name = "갑돌이";
    // echo $obj_Student -> std_name;
    
    // private : 지시자가 private기 때문에 접근 권한이 없어 에러가 남
    // $obj_Student -> $std_id = "갑순이";

    // private객체를 class밖에서 사용할수 있는 방법
    // getter, setter로 private 객체에 접근
    $obj_Student -> set_std_id("갑순이 id");
    echo $obj_Student -> get_std_id();
    

    // protected
    // $obj_Student -> $std_age = 24; // 상속받은 class 내에서는 사용 가능

?>