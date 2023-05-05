// 1. 요소를 선택하는 방법
//   1-1. id로 선택하는 방법
//      document.getElementById();
const TITLE = document.getElementById( "title" );
console.log( TITLE );
TITLE.style.color = "red"; // 색깔 바꾸기


//  1-2. 태그명으로 요소를 선택하는 방법
const LI = document.getElementsByTagName( "li" );
console.log( LI );

//  탕수육은 노란색, 짬뽕은 빨간색으로 변경
LI[1].style.color = "yellow";
LI[2].style.color = "red";

// traning ---------------------------------------------
// 탕수육, 볶음밥, 깐풍기는 배경 색상을 오렌지색
// 짜장면, 짬뽕, 라조기는 배경 색상을 베이지색

function backColor() {
    for( let i = 0; i < LI.length; i++ ) {
        if( i % 2 === 0 ) {
            LI[i].style.backgroundColor = "beige";
        } else {
            LI[i].style.backgroundColor = "orange";
        }
    }
}
// traning ---------------------------------------------


//  1-3. 클래스명으로 요소를 선택하는 방법
const NONELI = document.getElementsByClassName( "none_li" );
console.log( NONELI );


//  1-4. CSS 선택자로 요소를 선택하는 방법
// querySelector() : 복수의 요소가 있다면 가장 첫번째 것만 선택
const TITLE2 = document.querySelector( "h1" );
const TITLE3 = document.querySelector( "#title" );
const LI2 = document.querySelector( ".none_li" ); 
console.log( TITLE2 );
console.log( TITLE3 );
console.log( LI2 );

// querySelectorAll() : 모든 요소를 선택
const LI3 = document.querySelectorAll( ".none_li" );
console.log( LI3 );


// 2. 요소 조작하기
//   2-1. 콘텐츠를 조작하는 방법

const DIV1 = document.querySelector( "#div1" );
// textContent : 순수한 텍스트 데이터를 전달, 이전의 태그들은 모두 제거
// 태그도 글자로 인식
TITLE.textContent = "<span>text로 바꿨지롱~</span>"; 
DIV1.textContent = "텍스트로 넣었어요"; // h2가 사라짐

// innerHTML : 태그는 태그로 인식, 이전의 태그들은 모두 제거
// TITLE.innerHTML = "<span>inner로 바꿨지롱~</span>";
// DIV1.innerHTML = "이너로 넣었어요" // h2가 사라짐


// 요소에 속성을 추가
const IT = document.getElementById( 'it' );
// IT.setAttribute( "placeholder", "셋어트리뷰트로 삽입" );

const AA = document.getElementById( 'aa' );
// AA.setAttribute( "href", "https://www.naver.com" );


// 요소의 속성을 제거
// const IT = document.getElementById( 'it' );
// IT.removeAttribute( "placeholder" );
// AA.removeAttribute( "herf" );

// IT.addEventListener( "mouseenter", function() {
//     IT.setAttribute( "placeholder", "셋어트리뷰트로 삽입" );
// });
// IT.addEventListener( "mouseleave", function() {
//     IT.removeAttribute( "placeholder" );
// });


// 요소의 스타일링 : 인라인 스타일로 적용됨
// AA.style.textDecoration = "none";
// AA.style.color = "skyblue";


// 클래스로 스타일 추가
// AA.classList.add( "aa" );

// AA.classList.add( "aa1" );
// AA.classList.add( "aa2" );
// AA.classList.add( "aa3" );
// AA.classList.add( "aa1", "aa2", "aa3" ); // 한번에 여러 class 추가 가능

// 참고 사이트 : mdn


// 새로운 요소 만들기
// 요소 만들기
const CLI = document.createElement( "li" ); // 만들고싶은 태그
CLI.innerHTML = "야끼우동";

// 요소를 자식요소의 가장 마지막에 삽입
const UL = document.getElementsByTagName( "ul" );
// UL[0].appendChild( CLI );

// 해당 요소를 지우는 방법
// CLI.remove(); // HTML상의 태그만 지워지고, CLI변수는 남아있음

// 요소를 특정 위치에 삽입하는 방법
const ZZAM = document.querySelector( "li:nth-Child(3)" );
UL[0].insertBefore( CLI, ZZAM );

// training --------------------------------
// 라조기와 깐풍기 사이에 "잡채밥", "동파육"을 순서대로 넣고,
// 배경색도 제대로 나오도록 수정
const KKAN = document.querySelector( "li:nth-Child(7)" );

const ZAB = document.createElement( "li" );
ZAB.innerHTML = "잡채밥";
UL[0].insertBefore( ZAB, KKAN );

const DONGPA = document.createElement( "li" );
DONGPA.innerHTML = "동파육";
UL[0].insertBefore( DONGPA, KKAN );

backColor();
// training --------------------------------

