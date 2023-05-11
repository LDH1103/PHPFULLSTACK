<?php

// cookie 작성
// string 형태만 저장할 수 있음

// setcookie( "이름", "값", "유효기간(시간)" );
setcookie( "name", "Kim mihyeon", time() + 30 ); // 현재 + 30초
setcookie( "age", "26", time() + 300 );

// cookie 삭제 방법
// setcookie( "age", "", 0 );

?>