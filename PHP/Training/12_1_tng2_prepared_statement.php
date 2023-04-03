<?php

    // 아래 쿼리로 결과를 출력하는 프로그램 만들기

    // SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?
    // to_date : "9999-01-01", salary : 50000, LIMIT : 5

    $dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);


    $pre_todate = "9999-01-01";
    $pre_salary = 50000;
    $pre_limit = 5;

    $stmt = $dbc -> stmt_init();
    $stmt -> prepare(" SELECT emp_no, salary 
                        FROM salaries 
                        WHERE to_date = ? 
                            AND salary >= ? 
                        ORDER BY salary DESC 
                        LIMIT ? ");
    $stmt -> bind_param("sii", $pre_todate, $pre_salary, $pre_limit);
    $stmt -> execute();
    $result = $stmt -> get_result();

    while ($row = $result -> fetch_assoc()) {
        echo "emp_no : ".$row["emp_no"].", salary : $".$row["salary"]."\n";
    }

    
    mysqli_close($dbc);


?>