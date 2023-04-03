<?php

    // 우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력

    include_once("../Example/12_2_ex2_fnc_db_conn.php");
    $obj_conn = null;
    my_db_conn( $obj_conn );

    // 전체 월급의 평균
    // $sql =
    // " SELECT "
    // ."    AVG(salary) "
    // ." FROM " 
    // ."    salaries "
    // ." WHERE " 
    // ."    to_date = :to_date ";

    // $to_date = "9999-01-01";
    // $stmt = $obj_conn->prepare($sql);
    // $stmt->bindParam(':to_date', $to_date);
    // $stmt->execute();
    // $result = $stmt->fetch();
    // echo "AVG(salary) : $".$result["AVG(salary)"];

    
    // 새로운 사원 정보를 employees 테이블에 등록
    // $sql =
    // " INSERT INTO employees( "
    // ."    emp_no "
    // ."    , birth_date "
    // ."    , first_name "
    // ."    , last_name "
    // ."    , gender "
    // ."    , hire_date "
    // ." ) "
    // ."VALUES "
    // ."( "
    // ."    :emp_no "
    // ."    , :birth_date "
    // ."    , :first_name "
    // ."    , :last_name "
    // ."    , :gender "
    // ."    , :hire_date "
    // ." ) ";

    // $arr_prepare =
    //     array(
    //         ":emp_no" => 1
    //         , ":birth_date" => DATE(19961123)
    //         , ":first_name" => '동호'
    //         , ":last_name" => '이'
    //         , ":gender" => 'M'
    //         , ":hire_date" => DATE(20200101)
    //     );

    // $stmt = $obj_conn->prepare( $sql );
    // $result = $stmt->execute( $arr_prepare );
    // $obj_conn->commit();
    // var_dump( $result );

    // 위에서 입력한 사원의 이름을 "길동", 성은 "홍" 으로 변경
    // $sql =
    // " UPDATE " 
    // ."      employees "
    // ." SET " 
    // ."      first_name = :first_name "
    // ."      , last_name = :last_name "
    // ." WHERE " 
    // ."      emp_no = :emp_no ";

    // $arr_prepare =
    //     array (
    //         ":first_name" => '길동'
    //         , ":last_name" => '홍'
    //         , ":emp_no" => 1
    //     );

    // $stmt = $obj_conn->prepare( $sql );
    // $stmt->execute( $arr_prepare );
    // $obj_conn->commit();
    // var_dump( $result );

    // 위에서 등록한 사원을 삭제
    // $sql =
    // " DELETE "
    // ." FROM "
    // ."    employees "
    // ." WHERE "
    // ."  emp_no = :emp_no ";

    // $arr_prepare =
    //     array (
    //         ":emp_no" => 1
    //     );

    // $stmt = $obj_conn->prepare( $sql );
    // $result = $stmt->execute( $arr_prepare );
    // $obj_conn->commit();
    // var_dump( $result );


    $obj_conn = null;

?>