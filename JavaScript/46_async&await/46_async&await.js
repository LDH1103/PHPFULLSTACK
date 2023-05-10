// 동기적 처리

// function dealy() {
//     const delayTime = Date.now() + 2000;
//     while( Date.now() < delayTime ) {}
//     console.log( "B" );
// }

// console.log( "A" );
// dealy();
// console.log( "C" );


// traning -------------------------------------------
// Promise를 사용해서 동기적 처리를 비동기 처리처럼 보이게( 비동기 처리는 아님 )
// function dealy2() {
//     return new Promise(( resolve ) => {
//         const delayTime = Date.now() + 2000;
//         while( Date.now() < delayTime ) {}
//         resolve( "B" );
//     });
// }

// console.log( "A" );
// dealy2()
// .then( str => console.log( str ) );
// console.log( "C" );
// traning -------------------------------------------


// async로 비동기 처리
// async function dealy3() {
//     const delayTime = Date.now() + 2000;
//     while( Date.now() < delayTime ) {}
//     return "B";
// }

// console.log( "A" );
// dealy3()
// .then( str => console.log( str ) );
// console.log( "C" );


// await : async가 붙은 함수 안에서만 사용 가능
// function myDelay( ms ) {
//     // return new Promise( resolve => setTimeout( resolve, ms ) );
//     setTimeout(( () => {} ), ms );
// }

// function getA() {
//     myDelay( 1000 );
//     return "A";
// }

// function getB() {
//     myDelay( 2000 );
//     return "B";
// }

// console.log( getA() + getB() );

function myDelay( ms ) {
    return new Promise( resolve => setTimeout( resolve, ms ) );
}

async function getA() {
    await myDelay( 1000 );
    return "A";
}

async function getB() {
    await myDelay( 2000 );
    return "B";
}

// console.log( getA() + getB() );

// getA()
// .then( strA => console.log( strA ) );


// 체이닝 지옥
// "A : B"형식으로 출력하기
// pormise 방식으로 출력
// function getAll1(){
//     getA()
//     .then( strA => 
//         getB()
//             .then( strB => console.log(`${strA} : ${strB}`))
//     );
// }

// getAll1();


// async를 이용할 경우
// async function getAll2() {
//     const strA = await getA();
//     const strB = await getB();

//     console.log( `${strA} : ${strB}` );
// }

// getAll2();


// 병렬 처리 방법
async function getAll3() {
    Promise.all([ getA(), getB() ])
    .then( all => console.log( all.join( " : " ) ) );
}

getAll3();