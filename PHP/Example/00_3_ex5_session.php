<?php

session_name( "Kim" );
session_start();

// 세션 파기

// 서버에 저장된 sessionID를 파기
// session_destroy();

// session 정보 삭제( session이 파기되는것은 아님 ) : 세션 ID는 남겨두고 그 외의 정보들을 삭제
// session_unset();

// session 특정 요소를 삭제
unset( $_SESSION[ "del" ] );


?>