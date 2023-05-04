// DATE
// const NOW = new Date(); // 기본형
const NOW = new Date( "2023-04-30 15:20:30.123" ); // 날짜를 지정해서 가져올수 있음
console.log( NOW );

// getFullYear() : 연도만 가져오는 메소드
console.log( "연도 : " + NOW.getFullYear() );

// getMonth() : 월을 가져오는 메소드( 0 ~ 11을 가져옴, 현재 달을 가져오려면 + 1 )
console.log( "월 : " + ( NOW.getMonth() + 1 ) );

// getDate() : 날짜를 가져오는 메소드
console.log( "일 : " + NOW.getDate() );

// getDay() : 요일을 가져오는 메소드( 일요일 : 0 ~ 토요일 : 6 );
console.log( "요일 : " + NOW.getDay() );

// getTime() : 1970-01-01 기준으로 몇 밀리초가 지났는지 가져옴
console.log( "시간(Linux) : " + NOW.getTime() );

// getHours() : 시간을 가져오는 메소드
console.log( "시간 : " + NOW.getHours() );

// getMinutes() : 분을 가져오는 메소드
console.log( "분 : " + NOW.getMinutes() );

// getSeconds() : 초를 가져오는 메소드
console.log( "초 : " + NOW.getSeconds() );

// getMilliseconds() : 밀리초를 가져오는 메소드
console.log( "밀리초 : " + NOW.getMilliseconds() );


// traninig ------------------------------------------------
// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘로 부터 몇일 전인지 출력
const TODAYDATE = new Date();
let date1 = TODAYDATE.getTime();
const BASEDATE = new Date( "2022-09-30 19:20:10" );
let date2 = BASEDATE.getTime();

// 1000 : 밀리초, 60 : 초, 60 : 분, 24 : 시간 = 86400000
const CALDATE = Math.ceil( ( date1 - date2 ) / ( 1000 * 60 * 60 * 24 ) );
console.log( CALDATE );

// const CALMS = TODAYDATE - BASEDATE;
// const CALDAY = CALMS / 1000 / 60 / 60 / 24;
// 1일은 1000 * 60 * 60 * 24 = 86,400,000 밀리초

// console.log( CALDAY );

// traninig ------------------------------------------------