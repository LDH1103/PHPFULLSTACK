// 제어문

// ------------------------
// 조건문 ( if, switch )
// ------------------------
// if( 1 > 0 ) {
//     console.log( "1은 0보다 크다." );
// } else if( 1 < 0 ) {
//     console.log( "1은 0보다 작다." );
// } else {
//     console.log( "기타 등등" );
// }

// let u_age = 30;
// switch( u_age ) {
//     case 10 :
//         console.log( "10살" );
//         break;
//     case 20 :
//         console.log( "20살" );
//         break;

//     default :
//         console.log( u_age + "살" );
//         break;
// }


// -----------------------------------------
// 반복문 ( for, while, do_while, foreach, for...in, for...of )
// -----------------------------------------
// let num = 0;
// while( num <= 3 ) {
//     console.log( num );
//     num++;
// }

// let dan = 2;
// let no = 1;
// do {
//     console.log( dan+" * "+no+" = "+dan * no );
//     no++;
// } while( no < 10 );

// let dan = 2;
// let no = 1;
// do {
//     no = 1;
//     do {
//         console.log( dan+" * "+no+" = "+dan * no );
//         no++;
//     } while ( no < 10 );
//     dan++;
// } while( dan < 10 );

// let dan = 2;
// for( let i = 1; i <= 9; i++ ) {
//     console.log( dan+" * "+i+" = "+dan * i );
// }

// forEach : 배열만 루프 가능
let arr = [ 1, 2, 3, 4 ];

// arr.forEach( function( val ) {
//     console.log( val );
// });

// for...in : 모든 객체를 루프 가능
// arr = {
//     u_name : "홍길동"
//     ,u_age : 0
// };
// key를 i에 저장
for( let i in arr ) {
    console.log( i + " : " + arr[i] );
}

// for...of : 
arr = [ 5, 4, 3 ];
arr.num = 2;
// value를 i에 저장
for( let i of arr ) {
    console.log( i );
}

