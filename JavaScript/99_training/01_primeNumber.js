let num = 20;
let arr = [];

// 1. 1 ~ 입력값( num )의 요소를 가지는 배열만들기
for( let i = 1; i <= num; i++ ) {
    arr.push( i );
}
console.log( arr );

// 2. 그 배열에서 소수만 찾아서 새로운 배열만들기

// function primeNum( val ) {
//     if ( val === 1 ) {
//         return false;
//     } else {
//         for ( let i = 2; i < val; i++ ) {
//             if ( val % i === 0 ) {
//                 return false;
//             }
//         }
//     }
//     return true;
// }

function primeNum( val ) {
    for ( let i = 2; i < val; i++ ) {
        if ( val % i === 0 ) {
            return false;
        }
    }
    return val !== 1;
}

let arr2 = arr.filter( val => primeNum( val ) );

console.log( arr2 );

// 3. 그 배열을 alert로 출력
//      alert("");
alert( arr2 );


// 4. filter() 필수 사용