// console.log("안녕하세요. js파일입니다", "두번째");

// --------------------------
// 변수
// --------------------------

// // var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이"; // 중복선언 가능
// u_name = "갑돌이"; // 재할당 가능
// console.log( u_name );

// // let : 중복선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// // let u_age = 30; // 중복선언 불가
// u_age = 40; // 재할당 가능
// console.log( u_age );

// // 상수
// const : 중복선언 불가능, 재할당 불가능, 블록레벨 스코프
// const gender = "남자";
// // gender = "여자"; // 값이 바뀌지 않음


// --------------------------
// 스코프
// --------------------------

// 전역 스코프
let u_name = "홍길동";

// 함수 레벨 스코프
function test() {
    console.log( u_name );
    let u_age = 30;
    console.log( u_age );
}
// console.log( u_age ); // 함수 밖에서는 사용 불가

// 블록레벨 스코프 : 중괄호 안에서 선언된 함수는 중괄호 안에서만 사용 가능
function test1() {
    if( true ) {
        let v_test1 = "함수 : 테스트1";
        var v_var1 = "var로 선언";
    }
    // console.log( v_test1 );
    console.log( v_var1 ); // var : 함수레벨 스코프라서 사용 가능
}


// ---------------------
// 호이스팅 ( hoisting )
// ---------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// ( 인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경 )
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올려지는 것
console.log( hTest() );
console.log( "58 line : " + varTest ); // 변수를 사용은 할 수 있지만, 할당은 되지않은 상태
console.log( letTest ); // let과 const는 상단으로 끌어 올려지긴 하지만, undefined로 초기화가 되지 않기때문에, 에러가 남
console.log( constTest );

function hTest() {
    return "함수 : hTest";
}

var varTest = "var : var변수";
console.log( "65 line : " + varTest );

let letTest = "let 변수";
const constTest = "const 상수";