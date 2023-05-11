<?php

// session명을 지정해 줬을 경우 사용전에도 session명을 지정해 줘야함
session_name( "Kim" );

// 사용전 항상 session_start();
session_start();

var_dump( $_SESSION );
var_dump( session_id() ); // sessionID를 반환
var_dump( $_COOKIE ); // 세션을 시작하면 자동으로 sessionId가 cookie에 저장됨

?>