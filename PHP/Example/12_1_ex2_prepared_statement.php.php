<?php

$dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);



// prepared Statement 

// 질의 결과를 우리가 지정한 변수에 담아 사용하는 방법, 레코드를 하나만 가져올때 사용
// $i = 5;
// $stmt = $dbc -> stmt_init(); // statement를 세팅
// $stmt -> prepare(" SELECT emp_no, first_name, last_name FROM employees LIMIT ? "); // DB 질의 할 쿼리를 작성, 유저가 작성할수 있는 부분은 "?" 입력
// $stmt -> bind_param("i", $i); // prepared에 넣어준 "?" 세팅, 매직넘버로 넣을수 없음, "i"는 int 한자리, "s"는 string 한자리
// $stmt -> execute(); // DB에 쿼리 질의 실행
// $stmt -> bind_result($col1, $col2, $col3); // 질의 결과를 각 아규먼트(괄호 안의 변수들)에 저장하기 위한 세팅($col1에는 emp_no, $col2에는 first_name이 저장됨)
// $stmt -> fetch(); // bind_result에서 세팅한 아규먼트에 값을 저장(한번 실행 될때마다 한 레코드씩 저장)
// var_dump($col1, $col2);

// fetch를 루프로 돌려서 모든 질의 결과를 가져오는 방법
// while ($stmt -> fetch()) {
//     echo "$col1 $col2 $col3\n";
// }



// 연상배열(key값 포함)로 가져오는 방법, 레코드를 여러개 가져올때 사용

// $stmt = $dbc -> stmt_init(); // statement를 세팅
// $stmt -> prepare(" SELECT emp_no, first_name, last_name FROM employees LIMIT ? "); // DB 질의 할 쿼리를 작성, 유저가 작성할수 있는 부분은 "?" 입력
// $stmt -> bind_param("i", $i); // prepared 세팅, 매직넘버로 넣을수 없음
// $stmt -> execute(); // DB에 쿼리 질의 실행
// $result = $stmt -> get_result(); // 질의 결과를 저장

// while ($row = $result -> fetch_assoc()) {
//     echo $row["first_name"]."\n";
// }



// "?" 여러개 넣기

// $i1 = "F"; // gender
// $i2 = 10010; // emp_no
// $i3 = 5; // LIMIT

// $stmt = $dbc -> stmt_init();
// $stmt -> prepare(" SELECT emp_no, first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT ? ");
// $stmt -> bind_param("sii", $i1, $i2, $i3); // sii는 글자, 숫자, 숫자
// $stmt -> execute();
// $result = $stmt -> get_result();

// while ($row = $result -> fetch_assoc()) {
//     echo $row["emp_no"]." ".$row["first_name"]."\n";
// }


mysqli_close($dbc);

?>