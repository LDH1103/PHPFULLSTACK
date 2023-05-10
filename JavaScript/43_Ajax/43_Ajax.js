// https://picsum.photos

// const url = "https://picsum.photos/v2/list?page=1&limit=5";

const div = document.getElementById( "div_img" );
const btn = document.getElementById( "btn" );
const btn2 = document.getElementById( "btn2" );
const imgTag = document.getElementsByTagName( "img" );
let url = "";

function removeImg() {
    div.replaceChildren();
}

function getVal() {
    url = document.getElementById( "url_input" ).value;
    
    fetch( url )
    .then( res => res.json() )
    .then( data => makeList( data ) )
    .catch( console.log );
}

function makeList( data ) {
    // removeImg();
    data.forEach( item => {
        const tagImg = document.createElement( "img" );
        tagImg.setAttribute( "src", item.download_url );
        div.appendChild( tagImg );
    });
}

// 에러 처리
async function getApiData( url ) {
	fetch( url )
	.then( res => {
		if( res.ok ) { // 응답이 200번대 이면 OK
			return res.json();
		} else { // 응답이 200번대 이외의 경우 에러 처리
			throw new Error( 'API 에러' );
		}
	})
	.then( data => makeList( data ) )
	.catch( alert( '전체 에러' ) );
}



function toggle() {
    if( url === "" ) {
        getVal();
        getApiData( url );
    } else {
        removeImg();
        url = "";
    }
}

btn.addEventListener( "click", () => toggle() );
// btn.addEventListener( "click", () => getVal() );