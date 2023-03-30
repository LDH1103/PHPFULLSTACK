<?php

    // class Car {
    //     // $car_name : 차이름을 저장하는 멤버변수
    //     public $car_name;

    //     // $car_color : 차 색깔을 저장하는 멤버 변수
    //     public $car_color;

    //     // method명 : car_make
    //     // parameter : string $param_name, string $param_color
    //     // 기능 : 멤버변수에 값을 셋팅
    //     public function car_make(string $param_name, string $param_color) {
    //         $this -> car_name = $param_name;
    //         $this -> car_color = $param_color;
    //     }

    //     // method명 : car_out
    //     // parameter : 없음
    //     // 기능 : 자동차 이름과 색깔을 출력 (형식 : $car_color."색 ".$car_name)
    //     public function car_out() {
    //         echo $this -> car_color."색 ".$this -> car_name;
    //     }
    // }

    // $obj_car = new Car;
    // $obj_car -> car_make("아반떼", "검은");
    // $obj_car -> car_out();



    class Car {
        // $car_name : 차이름을 저장하는 멤버변수
        private $car_name;

        // $car_color : 차 색깔을 저장하는 멤버 변수
        private $car_color;

        // $car_fn : 차의 기능을 저장하는 멤버 변수
        private $car_fn = array();

        // method명 : car_make
        // parameter : string $param_name, string $param_color
        // 기능 : 멤버변수에 값을 셋팅
        public function car_make(string $param_name, string $param_color) {
            $this -> car_name = $param_name;
            $this -> car_color = $param_color;
        }

        // method명 : car_out
        // parameter : 없음
        // 기능 : 자동차 이름과 색깔을 출력 (형식 : $car_color."색 ".$car_name)
        public function car_out() {
            // echo $this -> car_color."색 ".$this -> car_name;
            echo $this -> car_color."색 ".$this -> car_name;
        }

        // method명 : car_function
        // parameter : $car_fn
        // 기능 : 자동차의 기능을 멤버변수에 셋팅
        public function car_function($car_fn_set) {
            $this -> car_fn = $car_fn_set;
            return $this -> car_fn;
        }
        
        // method명 : car_function_out
        // parameter : 없음
        // 기능 : 자동차의 기능을 출력
        public function car_function_out() {
            echo $this -> car_fn;
        }

    }

    $obj_car = new Car;
    $obj_car -> car_make("아반떼", "검은");
    $obj_car -> car_out();
    echo "\n";
    $obj_car -> car_function("자율주행");
    $obj_car -> car_function_out();
    

?>