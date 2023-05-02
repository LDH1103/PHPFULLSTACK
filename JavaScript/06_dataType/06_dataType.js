// 데이터 타입

// ---------------
// 기본 데이터 타입
// ---------------

// 숫자 ( number )
let num = 1;

// 문자열 ( string )
let str = "안녕";

// 불리언 ( boolean )
let bool = true;

// null
let test1 = null;

// undefined
let test2;

// 심볼 ( symbol ) : 같은 값을 가지지만, S_CONST1 === S_CONST2는 false를 반환함
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다.");



// -----------------
// 객체 타입 ( JSON )
// -----------------
let obj1 = {
    u_name : "홍길동"
    ,u_age : 30
    ,u_gender : "남자"
    ,test : function () {
        console.log("객체 함수 테스트");
    }
    ,addr : {
        addr1 : "대구"
        ,addr2 : "중구"
    }
}
// 사용할때는 obj1.u_name / obj1.addr.addr2
// 함수를 사용할때는 obj1.test();

// 배열 ( Array )
let arr = [ "탕수육", "짜장면", "짬뽕" ];
// 사용할때는 arr[방 번호];
