<?php

    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    
    // 사번이 10005 이하인 사원의 사번, 이름(성 이름), 성별, 생일
    // $result_querry = mysqli_query($dbc, "SELECT 
    //                                         emp_no
    //                                         , CONCAT(last_name, ' ',first_name) as name
    //                                         , gender
    //                                         , birth_date 
    //                                     FROM 
    //                                         employees 
    //                                     WHERE 
    //                                         emp_no <= 10005");

    // // while ($temp_assoc = mysqli_fetch_assoc($result_querry)) {
    // //     var_dump($temp_assoc);
    // // }

    // while ($temp_assoc = mysqli_fetch_assoc($result_querry)) {
    //     // echo $temp_assoc["emp_no"]." ".$temp_assoc["name"]." ".$temp_assoc["gender"]." ".$temp_assoc["birth_date"]."\n";
    //     echo implode(" ",$temp_assoc)."\n";
    // }

    
    // 값이 없을떄 "값이 없습니다 출력하기"

    $result_querry = mysqli_query($dbc, "SELECT
                                            emp_no
                                            , CONCAT(last_name, ' ',first_name) as name
                                            , gender
                                            , birth_date
                                        FROM 
                                            employees 
                                        WHERE 
                                            emp_no <= 10005");

    if (mysqli_num_rows($result_querry) === 0) {
        echo "데이터가 0건 입니다.";
    } else {
        while ($temp_assoc = mysqli_fetch_assoc($result_querry)) {
            echo implode(" ",$temp_assoc)."\n";
        }
    } 

    mysqli_close($dbc);

?>