// 타이머 함수

// 1. setTimeout() / clearTimeout()
// setTimeout( 일정 시간이 지났을때 해줄 동작( 콜백 함수 ), 밀리초 );
// setTimeout( () => console.log( "A" ), 2000 );

// clearTimeout(); : setTimeout 지우기, 변수에 담아줘야함
const timeout = setTimeout( () => console.log( "A" ), 2000 );
clearTimeout( timeout );


// 2. setInterval() / clearInterval()
const myInterval = setInterval( () => console.log( "A" ), 1000 ); // 인터벌 세팅
clearInterval( myInterval ); // 인터벌 제거


// training ------------------------------------------------

// 1 ~ 5를 1초마다 콘솔에 출력
let i = 1;
const tInterval = setInterval( () => { 
    console.log( i ); 
    i++; 
    if( i > 5 ) { 
        clearInterval( tInterval ); 
    } 
}, 1000 );



// 현재 시각을 출력한뒤, 멈춤 버튼을 누르면 멈추고, 재시작 버튼을 누르면 재시작
const span = document.getElementById( "nowTime" );
function getTime(){
    const time = new Date();
    const hour = String( time.getHours() ).padStart( 2, "0" );
    const pmHour = String( time.getHours() - 12 ).padStart( 2, "0" );
    const minutes = String( time.getMinutes() ).padStart( 2, "0" );
    const seconds = String( time.getSeconds() ).padStart( 2, "0" );

    if( hour > 12 ) {
        span.innerHTML = "오후 " + pmHour + " : " + minutes + " : " + seconds;
    } else {
        span.innerHTML = "오전 " + hour + " : " + minutes + " : " + seconds;
    }
}
let a = setInterval( getTime, 1000 );

// 멈춤 버튼
const stopBtn = document.getElementById( 'stopBtn' );
stopBtn.addEventListener( "click", () => clearInterval( a ) );

// 재시작 버튼
const startBtn = document.getElementById( 'startBtn' );
startBtn.addEventListener( "click", () => a = setInterval( getTime, 1000 ) );

// training ------------------------------------------------