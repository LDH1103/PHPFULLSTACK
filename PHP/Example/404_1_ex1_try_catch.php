<?php

    include_once("./12_2_ex2_fnc_db_conn.php");

    // try-catch문 : 에러처리를 하기위한 문법
    // 기본 구조
    // try {
    //     // 실행하고 싶은 소스코드를 작성
    // } catch( Exception $e ) {
    //     // 에러가 발생 했을 때 실행되는 소스코드를 작성
    // } finally {
    //     // 정상처리 또는 에러처리 시에 무조건 실행 되는 소스코드를 작성
    // }

    
    //
    // try {
    //     $obj_conn = null;
    //     my_db_conn( $obj_conn );
    //     $sql = " SELEC * FROM employees LIMIT 5 ";
    //     $stmt = $obj_conn->query( $sql );
    //     $result = $stmt->fetchAll();
    //     var_dump( $result );
    //     echo "Try\n";
    // } catch( Exception $e ) {
    //     echo "----에러 발생----\n";
    //     echo $e->getMessage(); // 에러 메세지를 보고싶을때
    //     echo "\n----에러 발생----\n";
    // } finally {
    //     echo "Finally\n";
    //     $obj_conn = null;
    // }
    // echo "종료";


    //
    // try {
    //     $obj_conn = null;
    //     my_db_conn( $obj_conn );
    //     $sql = " SELECT * FROM employees WHERE emp_no = 1000000 ";
    //     $stmt = $obj_conn->query( $sql );
    //     $result = $stmt->fetchAll();

    //     // 로그인 했을때 해당 유저가 없을경우, 페이탈 에러가 아니기 때문에 catch문에 들어가지 않음, 강제로 에러 일으키기
    //     if( count( $result ) === 0 ) {
    //         // throw Exception : 에러를 강제로 일으키는 구문
    //         throw new Exception( "쿼리 결과 0건" );
    //     }

    //     var_dump( $result );
    //     echo "Try\n";
    // } catch( Exception $e ) {
    //     echo "----에러 발생----\n";
    //     echo $e->getMessage();
    //     echo "\n----에러 발생----\n";
    // } finally {
    //     echo "Finally\n";
    //     $obj_conn = null;
    // }
    // echo "종료";


    // 데이터 0건일경우 "데이터 0건", 다른 에러일경우 에러메세지 출력
    try {
        $obj_conn = null;
        my_db_conn( $obj_conn );
        $sql = " SELECT * FROM employees WHERE emp_no = 1000000 ";
        $stmt = $obj_conn->query( $sql );
        $result = $stmt->fetchAll();

        if( count( $result ) === 0 ) {
            throw new Exception( "E99" );
        }

        var_dump( $result );
        echo "Try\n";
    } catch( Exception $e ) {
        if ( $e->getMessage() === "E99" ) {
            echo "데이터 0건\n";
        } else {
            echo "----에러 발생----\n";
            echo $e->getMessage();
            echo "\n----에러 발생----\n";
        }
    } finally {
        echo "Finally\n";
        $obj_conn = null;
    }
    echo "종료";

?>