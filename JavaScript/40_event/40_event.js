// 인라인 이벤트 등록
// html파일의 11 ~ 14행 참조
// onclick


// 프로퍼티 리스너
const BTN1 = document.getElementById( 'btn1' );
BTN1.onclick = function() {
    location.href = "https://google.co.kr";
}

function colorChange() {
    let color = ["red", "orange", "yellow", "green", "blue", "skyblue", "puple", "hotpink", "black", "white"];
    let num = Math.floor( Math.random() * color.length );
    let body = document.getElementById( "color" );
    body.style.backgroundColor = color[num];
}

let fontSize = 16;
document.getElementById( "id_p" ).style.fontSize = fontSize + "px";

function fontBig( fontSizeBefore ) {
    if( fontSizeBefore <= 30 ) {
        fontSize = fontSizeBefore + 1;
        document.getElementById( "id_p" ).style.fontSize = fontSize + "px";
    }
}

function fontSmall( fontSizeBefore ) {
    if( fontSizeBefore > 10 ) {
        fontSize = fontSizeBefore - 1;
        document.getElementById( "id_p" ).style.fontSize = fontSize + "px";
    }
}

function fontDefault( fontSize ) {
    fontSize = 16;
    document.getElementById( "id_p" ).style.fontSize = fontSize + "px";
}

// addEventListener : 인라인으로 넣지않기, 현업에서 가장 많이 사용됨
// 버튼의 경우는 인라인의 onclick으로도 많이 사용함
const btn2 = document.querySelector( "#btn2" );

// 현재 창에서 열기

// btn2.addEventListener( "click", () => {
//     location.href = "https://www.daum.net"
// });

// 화살표 함수는 한줄일경우 중괄호 생략 가능
// btn2.addEventListener( "click", () => location.href = "https://www.daum.net" );

// btn2.addEventListener( "click", function() {
//     location.href = "https://www.daum.net"
// });


// 팝업 창 열기
// btn2.addEventListener( "click", () => {
//     // 주소,  , 열릴 크기
//     open( "https://www.daum.net", "", "width = 500px height = 500px" );
// });


// 팝업 창 닫기버튼 만들기
const btn3 = document.querySelector( "#btn3" );

let newWindow = null;
btn2.addEventListener( "click", () => {
    // newWindow에 열린 창을 담아줌
    newWindow = open( "https://www.daum.net", "", "width = 500px height = 500px" );
});

// btn3.addEventListener( "click", () => {
//     newWindow.close();
// });




// 이벤트 삭제
// removeEventListner( eventType, function )
// addEventListener()로 등록된 이벤트의 인수와 같은 인수를 세팅해야 삭제됨

// 익명함수는 인식하지못함
// btn3.removeEventListener( "click", () => {
//     newWindow.close(); 
// });

// btn3.addEventListener( "click", popUpClose( newWindow ) );
// btn3.removeEventListener( "click", popUpClose( newWindow ) );

// function popUpClose( win ) {
//     win.close();
// }


// 이벤트 타입
// 1. 마우스 이벤트
//  - mousedown : 마우스가 요소 안에서 클릭이 눌릴때
const div1 = document.querySelector( ".div1" );
div1.addEventListener( "mousedown", () => alert( "div1 클릭" ) );

// - mouseenter : 마우스가 요소 안으로 진입했을때
// div1.addEventListener( "mouseenter", () => alert( "진입" ) );