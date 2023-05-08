// 위치 랜덤하게
const msg_1 = document.querySelector( ".msg_1" );
function rand_position( msg_1 ) {
    msg_1.style.top = Math.round( Math.random() * 80 ) + "vh";
    msg_1.style.left = Math.round( Math.random() * 80 ) + "vw";
}
rand_position( msg_1 );

// 1. 버튼을 클릭시 아래 내용의 알러트
//      "안녕하세요."
//      "숨어있는 div를 찾아보세요."

const btn = document.querySelector( ".btn" );
btn.onclick = function() {
    alert( "안녕하세요.\n숨어있는 div를 찾아보세요." );
}

// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트
//  들킨 상태에서는 알러트가 뜨지 않습니다.
//      "두근두근"
let e_alert = function() {
    alert( "두근두근" )
}
msg_1.addEventListener( "mouseenter", e_alert );

// 3. 2번의 영역을 클릭하면 아래의 알러트를 출력하고, 배경색이 베이지색으로 바뀌어 나타남
//      "들켰다!"

// 4. 3번의 상태에서 다시 한번더 클릭하면 아래의 알러트를 출력 하고, 배경색이 흰색으로 바뀌어 안보이게 됨
//      "다시 숨는다."

const msg_2 = document.querySelector( ".msg_2" );
let Beige = false;
msg_2.addEventListener( "mousedown", function() {
    if( Beige ) {
        alert( "다시 숨는다!" );
        msg_1.addEventListener( "mouseenter", e_alert );
        msg_2.style.backgroundColor = "White";
        Beige = false;
        rand_position( msg_1 );
    } else {
        alert( "들켰다!" );
        msg_1.removeEventListener( "mouseenter", e_alert );
        msg_2.style.backgroundColor = "Beige";
        Beige = true;
    }
});

