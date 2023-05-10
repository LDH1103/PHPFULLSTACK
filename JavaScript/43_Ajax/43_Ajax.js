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
function chkResponse( res ) {
    return new Promise(( resolve, reject )=> {
        if( res.ok ) {
            resolve( res );
        } else {
            reject( "API 에러" );
        }
    });
}


function toggle() {
    if( url === "" ) {
        getVal();
    } else {
        removeImg();
        url = "";
    }
}

btn.addEventListener( "click", () => toggle() );
// btn.addEventListener( "click", () => getVal() );