<?php

    include_once("../Example/12_2_ex2_fnc_db_conn.php");

    // 아래 쿼리를 이용해서 DB 접속 > data획득 후 출력
    // try-catch로 에러 처리
    // 에러가 날 경우의 해당 Exception의 에러 메세지를 출력
    // 정상 종료일 경우 "정상 종료" 출력

    // $sql1 = " SELECT * FROM department ";

    // try {
    //     $obj_conn = null;
    //     my_db_conn( $obj_conn );
    //     $stmt = $obj_conn->query( $sql1 );
    //     $result = $stmt->fetchAll();
    //     var_dump( $result );
    //     echo "정상 종료\n";
    // } catch( Exception $e ) {
    //     echo " ---- 에러 발생 ---- \n";
    //     echo $e->getMessage();
    //     echo "\n ---- 에러 발생 ---- \n";
    // } finally {
    //     $obj_conn = null;
    // }



    // $sql2 = " SELECT * FROM dept_manager ";

    // try {
    //     $obj_conn = null;
    //     my_db_conn( $obj_conn );
    //     $stmt = $obj_conn->query( $sql2 );
    //     $result = $stmt->fetchAll();
    //     var_dump( $result );
    //     echo "정상 종료";
    // } catch( Exception $e ) {
    //     echo " ---- 에러 발생 ---- \n";
    //     echo $e->getMessage();
    //     echo "\n ---- 에러 발생 ---- \n";
    // } finally {
    //     $obj_conn = null;
    // }



    // 한번에 하기
    $sql1 = " SELECT * FROM department ";
    $sql2 = " SELECT * FROM dept_manager ";

    try {
        $obj_conn = null;
        my_db_conn( $obj_conn );

        $stmt_1 = $obj_conn->query( $sql1 );
        $result_1 = $stmt_1->fetchAll();
        // var_dump( $result_1 );

        $stmt_2 = $obj_conn->query( $sql2 );
        $result_2 = $stmt_2->fetchAll();
        // var_dump( $result_2 );

        echo "정상 종료";
    } catch( Exception $e ) {
        echo " ---- 에러 발생 ---- \n";
        echo $e->getMessage();
        echo "\n ---- 에러 발생 ---- \n";
    } finally {
        $obj_conn = null;
    }

?>