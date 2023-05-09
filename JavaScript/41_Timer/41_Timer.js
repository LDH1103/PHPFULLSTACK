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
// function getTime(){
//     const time = new Date();
//     const amHour = String( time.getHours() ).padStart( 2, "0" );
//     const pmHour = String( time.getHours() - 12 ).padStart( 2, "0" );
//     const minutes = String( time.getMinutes() ).padStart( 2, "0" );
//     const seconds = String( time.getSeconds() ).padStart( 2, "0" );

//     if( hour > 12 ) {
//         span.innerHTML = "오후 " + pmHour + " : " + minutes + " : " + seconds;
//     } else {
//         span.innerHTML = "오전 " + amHour + " : " + minutes + " : " + seconds;
//     }
// }

// getTime(); // 로딩시 바로 출력할려면 한번 호출해줌
function getTime() {
    const time = new Date();
    span.innerHTML = time.toLocaleTimeString();
}

let a = setInterval( getTime, 1000 );

// 멈춤 버튼
const stopBtn = document.getElementById( 'stopBtn' );
stopBtn.addEventListener( "click", () => clearInterval( a ) );

// 재시작 버튼
const startBtn = document.getElementById( 'startBtn' );
startBtn.addEventListener( "click", () => a = setInterval( getTime, 1000 ) );


// 스탑워치 -------------------------------------------------
let timerId;
let time = 0;
const stopwatch = document.getElementById("stopwatch");
let  hour, min, sec;


function printTime() {
    time++;
    stopwatch.innerText = getTimeFormatString();
}

//시계 시작 - 재귀호출로 반복실행
function startClock() {
    printTime();
    stopClock();
    timerId = setTimeout(startClock, 1000);
}

//시계 중지
function stopClock() {
    if (timerId != null) {
        clearTimeout(timerId);
    }
}

// 시계 초기화
function resetClock() {
    stopClock()
    stopwatch.innerText = "00:00:00";
    time = 0;
}

// 시간(int)을 시, 분, 초 문자열로 변환
function getTimeFormatString() {
    hour = parseInt(String(time / (60 * 60)));
    min = parseInt(String((time - (hour * 60 * 60)) / 60));
    sec = time % 60;

    return String(hour).padStart(2, '0') + ":" + String(min).padStart(2, '0') + ":" + String(sec).padStart(2, '0');
}
// 스탑워치 -------------------------------------------------
// training ------------------------------------------------