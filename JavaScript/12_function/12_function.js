// 함수

// 함수 선언문
function add( a, b ) {
    return a + b;
}

// 함수 표현식
let add2 = function( a, b ) {
    return a + b;
}
// 사용법 : add2( 4, 2 );

// 익명 함수
// function( a, b ) {
//     return a + b;
// }

// 화살표 함수 : 리턴값만 있는 경우 한줄로 표현 가능
let test1 = () => "안녕";
// 사용법 : test1();
// 아래와 같음
// function test1() {
    //     return "안녕";
    // }

let add3 = ( a, b ) => a + b;

// Function 생성자 함수 : 잘 사용하지 않음
let add4 = Function( 'a', 'b', 'return a + b;' );
