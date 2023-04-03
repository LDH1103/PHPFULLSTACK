<?php

    // php.ini 944행 extension=pdo_mysql 주석해제, 아파치 재시작

    $db_host       = "localhost";  // host
    $db_user       = "root";       // user
    $db_password   = "root506";    // password
    $db_name       = "employees";  // DB name
    $db_charset    = "utf8mb4";    // charset
    $db_dns        = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $db_option     = 
        array(
            PDO::ATTR_EMULATE_PREPARES      => false // DB의 Prepared Statement 기능을 사용하도록 설정, true일경우 PBO의 기능을 사용
            , PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws하도록 설정
            , PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정
    );

    // PDO Class로 DB 연동
    $obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );



    // SELECT 예제

    // 사번 10001, 100002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성
    $sql = 
        " SELECT "
        ."      emp.emp_no "
        ."      ,sal.salary "
        ."      ,emp.birth_date "
        ." FROM " 
        ."      employees emp "
        ."          INNER JOIN salaries sal "
        ."          ON emp.emp_no = sal.emp_no "
        ." WHERE " 
        ."      ( "
        ."          emp.emp_no = :emp_no1 " // 컬럼명과 이름을 맞춰주기 위해 :emp_no
        ."          OR emp.emp_no = :emp_no2 "
        ."      ) "
        ."      AND sal.to_date = DATE(99990101) ";

    $arr_prepare = 
        array(
            ":emp_no1" => 10001
            , ":emp_no2" => 10002
        );

    $stmt = $obj_conn->prepare( $sql ); // Prepare Statement를 생성
    $stmt->execute( $arr_prepare ); // 쿼리 실행
    $result = $stmt->fetchAll(); // 쿼리 결과를 fetch
    // var_dump( $result );

    // foreach( $result as $val ) {
    //     echo $val["emp_no"]." : $".$val["salary"].", ".$val["birth_date"]."\n";
    // }

    // $stmt->fetchAll()의 결과
    // $result =
    //     array (
    //         array (
    //             "emp_no" => 10001
    //             ,"salary" => 38735
    //             ,"birth_date" => "1953-09-02"
    //         )
    //         ,array(
    //             "emp_no" => 10002
    //             ,"salary" => 72527
    //             ,"birth_date" => "1964-06-02"
    //         )
    //     );



    // INSERT 예제

    $sql = 
        " INSERT INTO departments( "
        ."  dept_no "
        ."  ,dept_name "
        ." ) "
        ." VALUES( "
        ."  :dept_no "
        ."  ,:dept_name "
        ." ) ";

    $arr_prepare =
        array (
            ":dept_no" => "d011"
            ,":dept_name" => "PHP풀스택"
        );
    
    $stmt = $obj_conn->prepare( $sql );
    $result = $stmt->execute( $arr_prepare );
    $obj_conn->commit();
    var_dump( $result );

    $obj_conn = null; // DB연동 끊기

    // FLUSH PRIVILEGES; 하이디sql 새로고침

?>