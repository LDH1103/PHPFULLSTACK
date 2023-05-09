// setTimeout( function() {
//     console.log( "A" );
// }, 3000 );

// setTimeout( function() {
//     console.log( "B" );
// }, 2000 );

// setTimeout( function() {
//     console.log( "C" );
// }, 1000 );


// 콜백 함수를 이용해서 A, B, C 순서로 콘솔에 출력
// setTimeout( function() {
//     console.log( "A" );
//     setTimeout( function() {
//         console.log( "B" );
//         setTimeout( function() {
//             console.log( "C" );
//         }, 1000 );
//     }, 2000 );
// }, 3000 );

// Promise를 이용해서 A, B, C 순서대로 콘솔에 출력
// ( Promise 함수로 등록해서 구현 )

function promise1( str, time ) {
    return new Promise(( resolve ) => {
        setTimeout( () => {
            console.log( str );
            resolve();
        }, time );
    });
}

promise1( "A", 3000 )
.then( () => promise1( "B", 2000 ) )
.then( () => promise1( "C", 1000 ) )