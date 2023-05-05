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