<?php

    // file을 쓰는 이유 : 모든 데이터를 db에 저장하면 좋겠지만, 그렇지 못하는 데이터들도 있음, 그럴때 file을 사용
    // PHPFULLSTACK / PHP / Example폴더안 -> sam폴더 만들기 -> food.txt


    // 파일을 여는 방법 : fopen( 파일위치, 파일 여는방식 );
    // $f_food = fopen("./sam/food.txt", "r"); // r : 읽기전용 (read), 보통 읽기전용을 사용
    // $f_food = fopen("./sam/food.txt", "w"); // w : 쓰기전용 (write), **주의** 파일이 존재하면 기존 파일내용이 다날아감
    // $f_food = fopen("./sam/food.txt", "a"); // a : 쓰기전용, 포인터가 파일의 끝부분에서 시작, 기존내용 삭제 안됨


    // 파일을 한줄씩 읽어오는 방법 : fgets( open한 파일 );
    // print fgets($f_food); // open한 파일의 첫번째 줄
    // print fgets($f_food); // open한 파일의 두번째 줄
    // print fgets($f_food); // open한 파일의 세번째 줄


    // 파일에 내용 추가 : fputs( open한 파일, 추가할 내용 );
    $f_food = fopen("./sam/food.txt", "a");
    fputs($f_food, "\n돈까스1");
    fputs($f_food, "\n돈까스2");
    fputs($f_food, "\n돈까스3");

    
    // 파일을 닫는 방법 : fclose( open한 파일 ); , 열었으면 꼭 닫아줘야함
    fclose($f_food);

?>