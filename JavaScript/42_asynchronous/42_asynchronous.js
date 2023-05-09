// 동기적 처리 방식( 순서대로 )

// console.log( "A" );
// console.log( "B" );
// console.log( "C" );
// console.log( "D" );


// 비동기 처리 방식

// console.log( "A" );
// setTimeout( () => console.log( "B" ), 1000 );
// console.log( "C" );

// const a = 2;
// const b = 3;
// const sum = function() {
//     setTimeout( () => { return a + b }, 1000 );
// }
// console.log( sum() );

// 비동기 처리에서의 콜백 지옥
// setTimeout( () => { 
//     console.log("A");
//     setTimeout( () => {
//         console.log("B");
//         setTimeout( () => {
//             console.log("C");
//         }, 1000 );
//     }, 2000 );
// }, 3000 );

// 로그인 콜백 지옥 체험
const Login = {
    chkInput( id, pw, success, error ) {
        setTimeout( () => {
            if( id !== "" && pw !== "" ) {
                success({ chkId : id, chkPw : pw });
            } else {
                error( new Error( "잘못 입력 하셨습니다." ) );
            }
        }, 500 );
    }
    , loginUser( id, pw, success, error ) {
        setTimeout( () => {
            if( id === "php506" && pw === "506" || id === "root" && pw === "root506" ) {
                success( id );
            } else {
                error( new Error( "없는 유저 입니다." ) );
            }
        }, 500 );
    }
    , chkAuth( id, success, error ) {
        setTimeout( () => {
            if( id === "php506" || id === "root" ) {
                success({ authId : id, auth : "admin" });
            } else {
                error( new Error( "권한이 없습니다." ) );
            }
        }, 500 );
    }
}

const id = "root";
const pw = "root506";

Login.chkInput( 
    id
    , pw
    , chkData => { 
        Login.loginUser(
            chkData.chkId
            , chkData.chkPw
            , loginId => {
                Login.chkAuth(
                    loginId
                    , authData => { console.log( `${authData.authId}유저님, 권한은 ${authData.auth}입니다` ); }
                    , authError => { console.log( authError.message ); }
                )
            }
            , loginError => { console.log( loginError.message ); }
        );
    }
    , chkError => { console.log( chkError.message ); }
);


// 콜백 함수
function myCallBack( i ) {
    return i + 1;
}

function printNum( fn ) {
    console.log( fn( 2 ) );
}

printNum( myCallBack );