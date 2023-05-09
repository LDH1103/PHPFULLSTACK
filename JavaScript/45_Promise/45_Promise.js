// resolve, reject : Promise에서 자동으로 생성해주는 콜백함수
// const promise1 = new Promise( ( resolve, reject ) => {
//     const data = true;

//     if( data ) {
//         resolve( "성공" );
//     } else {
//         reject( "error" );
//     }
// });

// promise1
// .then( data => { console.log( data ); } ) // 성공적으로 수행했을 때 실행되는 코드( resolve )
// .catch( error => { console.log( error ); } ) // 실패했을 때 실행 되는 코드( reject )
// .finally( () => console.log( "파이널리" ) ) // 성공하든 실패하든 무조건 실행되는 코드


// 함수 등록해서 promise 사용
function myPromise() {
    return new Promise(( resolve, reject ) => {
        const data = true;

        if( data ) {
            resolve( "성공" );
        } else {
            reject( "error" );
        }
    });
}

myPromise()
.then( data => { console.log( data ); } ) // 성공적으로 수행했을 때 실행되는 코드( resolve )
.catch( error => { console.log( error ); } ) // 실패했을 때 실행 되는 코드( reject )
.finally( () => console.log( "파이널리" ) ) // 성공하든 실패하든 무조건 실행되는 코드


// 로그인 콜백 지옥이었던 것을 promise로 구현
const Login = {
    chkInput( id, pw ) {
        return new Promise(( resolve, reject ) => {
            setTimeout( () => {
                if( id !== "" && pw !== "" ) {
                    resolve({ chkId : id, chkPw : pw });
                } else {
                    reject( new Error( "잘못 입력 하셨습니다." ) );
                }
            }, 500 );
        });
    }
    , loginUser( id, pw ) {
        return new Promise(( resolve, reject ) => {
            setTimeout( () => {
                if( id === "php506" && pw === "506" || id === "root" && pw === "root506" ) {
                    resolve( id );
                } else {
                    reject( new Error( "없는 유저 입니다." ) );
                }
            }, 500 );
        });
    }
    , chkAuth( id ) {
        return new Promise(( resolve, reject ) => {
            setTimeout( () => {
                if( id === "php506" || id === "root" ) {
                    resolve({ authId : id, auth : "admin" });
                } else {
                    reject( new Error( "권한이 없습니다." ) );
                }
            }, 500 );
        });
    }
}

const id = "root";
const pw = "root506";

Login.chkInput( id, pw )
.then( chkData => Login.loginUser( chkData.chkId, chkData.chkPw ) )
.then( loginId => Login.chkAuth( loginId ) )
.then( authData => console.log( `${ authData.authId }유저님, ${ authData.auth }권한 입니다.` ) )
.catch( error => console.log( error.message ) )