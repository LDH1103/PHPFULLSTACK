<?php

    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
    
    // 사번이 10005 이하인 사원의 사번, 이름(성 이름), 성별, 생일
    $result_querry = mysqli_query($dbc, "SELECT 
                                            emp_no
                                            , CONCAT(last_name, ' ',first_name)
                                            , gender
                                            , birth_date 
                                        FROM employees 
                                        WHERE emp_no <= 10005");

    while ($temp_assoc = mysqli_fetch_assoc($result_querry)) {
        var_dump($temp_assoc);
    }

    mysqli_close($dbc);

?>