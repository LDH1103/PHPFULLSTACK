let arr = [ 1, 2, 3, 4, 5 ];

// push() 메소드 : 배열에 값 추가
// arr.push( 6 );
// console.log( arr );

// arr[ 방 번호 ] = 7 방식은 비권장
// arr[ 12 ] = 7 과같은 방식으로 넣을경우, 중간에 값이 빈 방들(empty)이 생김


// delete arr[ 방 번호 ] : 배열의 값 삭제
// delete arr[ 4 ];
// console.log( arr );
// 값은 지워지지만, 빈 방(index)이 남아있음


// splice() 메소드 : 배열의 요소를 삭제, 추가 또는 교체
// arr.splice( 방 번호, 삭제할 갯수 );
// arr.splice( 2, 1 );

// 추가 : arr.splice( 추가할 방의 번호, 0, 추가 할 값 );
// arr.splice( 2, 0, 8 );

// 가장 뒤에 추가하기 : arr.splice( arr.length, 0, 추가할 값 );
// arr.splice( arr.length, 0, arr.length );

// 여러개 추가하기 : 세번째 매개변수 부터는 가변 파라미터로 모든 값을 추가
// arr.splice( arr.length, 0, 추가할 값, 추가할 값, ... );
// arr.splice( arr.length, 0, 1, 2, 3, 4, 5 );

// 교체 : arr.splice( 교체할 방의 번호, 1, 교체될 값 );
// arr.splice( 2, 1, "안녕" );


// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용
let arr2 = [ 1, 2, 3, 4, 5 ];
// arr2.indexOf( 4 );
// 값이 있을경우 방 번호가 반환
// 값이 없을 경우 -1이 반환

arr2 = [ 1, 2, 3, 4, 3, 5, 6, 6, 1 ];
// arr2.indexOf( 3 );
// 중복일 경우는 가장 첫번째 값의 방 번호를 반환
// lastIndexOf() : 가장 마지막 요소를 찾기
// arr2.lastIndexOf( 1 );


// slice() 메소드 : 배열의 일부분을 잘라내고, 새로운 배열로 리턴
// let arrSlice = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
// arrSlice.slice( 0, 3 );


// training ----------------------------
let fileName = "javaScript.log.php";

// 아래처럼 콘솔에 출력( indexOf(), lastIndexOf(), slice() 메소드를 이용 )
// javaScript
// log
// php

// console.log( fileName.slice( 0, 10 ) );
// console.log( fileName.slice( 11, 14 ) );
// console.log( fileName.slice( -3 ) );

// const first_dot = fileName.indexOf( "." );
// const last_dot = fileName.lastIndexOf( "." );
// console.log( fileName.slice( 0, first_dot ) );
// console.log( fileName.slice( first_dot + 1, last_dot ) );
// console.log( fileName.slice( last_dot + 1 ) );
// training ----------------------------


// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환
let arrCon1 = [ 1, 2, 3 ];
let arrCon2 = [ 10, 20, 30 ];
let arrCon4 = [ 100, 200, 300 ];
let arrCon3 = arrCon1.concat( arrCon2, arrCon4 ); // 기존 배열( arrCon1 ) 뒤에 arrCon2, arrCon4가 순서대로 들어감
// console.log( arrCon3 );


// inclides() 메소드 : 배열이 특정 요소를 가지고 있는지 판별
let arrInc = [ 1, 2, 3, 4 ];
// console.log( arrInc.includes( 2 ) ); // 값이 있으면 true를 반환
// console.log( arrInc.includes( 5 ) ); // 값이 없으면 false를 반환


// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
const arrSort = [ 6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40 ];
// console.log( arrSort.sort() ); // [100, 3, 3, 40, 5, 5, 6, 7, 8, 80, 92]

// 오름차순 정렬
// console.log( 
//     arrSort.sort(
//         function( a, b ) { // ex) 6 과 3을 넣고, 6 - 3이 양수일경우 순서를 바꾸고, 음수일 경우 바꾸지 않음
//             return a - b;
//         }
//     )
// );
// arrSort.sort( ( a, b ) => a - b );

// 내림차순 정렬
// console.log( 
//     arrSort.sort(
//         function( a, b ) {
//             return b - a;
//         }
//     )
// );
// arrSort.sort( ( a, b ) => b - a );


// join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열로 만듦
let arrJoin = [ "안녕", "하세", "요" ];
// console.log(arrJoin.join()); // ,를 넣어 연결
// console.log(arrJoin.join("")); // 아무것도 넣지않고 연결
// console.log(arrJoin.join("/")); // /를 넣어 연결


// every() 메소드 : 배열의 모든 요소들이 주어진 함수를 통과하는지 판별
const arrEvery = [ 1, 2, 3, 4, 5 ];
let result = 
    arrEvery.every( function( val ) {
        return val <= 5;
    }
);
// console.log( result ); // 모두 통과하면 true, 하나라도 통과하지 못하면 false

// 모든 요소의 2로 나눈 나머지가 0인지 판별
let result2 = 
    arrEvery.every( function( val ) {
        return val % 2 === 0
    }
);

// let result2 = arrEvery.every( val => val % 2 === 0 );

// console.log( result2 );


// some() 메소드 : 배열의 어떤 요소라도 주어진 함수를 통과하는지 판별
const arrSome = [ 1, 2, 3, 4, 5 ];
let resultSome = 
    arrSome.some( function( val ) {
        return val >= 5;
    }
);
// let resultSome = arrSome.some( val => val >= 5 ); // 하나라도 만족하면 true, 하나도 만족하지 않으면 false
// console.log( resultSome );


// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [ 1, 2, 3, 4, 5 ];
let resultFilter = arrFilter.filter( val => val >= 3 );
// console.log( resultFilter );


