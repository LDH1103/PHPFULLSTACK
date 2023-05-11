<?php

$user_id = "php506";
$user_pw = "506";

// session명 지정, 지정하지 않으면 "PHPSESSID"로 지정됨, session_start 전에 선언
session_name( "Kim" );

// session 시작
session_start();


// -------------------
// 유저 인증 작업 필요, 지금은 생략( 넘어온 id와 pw가 허용범위 내인지 확인 후, db검색 )
// -------------------


// session에 데이터 저장
$_SESSION[ "id" ] = $user_id; // $_SESSION[ "id" ] : 원래는 id로 하지않고, 보안 규정에 따라 네이밍
$_SESSION[ "del" ] = "delete";

?>