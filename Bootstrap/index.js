const backToTop = document.getElementById('backtotop');

const checkScroll = () => {

    // 페이지가 수직으로 얼마나 스크롤되었는지를 확인하는 값(픽셀 단위로 변환) pageOffset
    let pageYOffset = window.pageYOffset;

    // 이 값이 0이 아니면, 클래스를 show를 선언하고, 그렇지 않다면 show를 삭제한다. 디폴트 css는 hidden상태
    // 0이면 스크롤이 안된상태 이고, 0이 아니면 스크롤이 일어난상태 
    if (pageYOffset !== 0) {
        // id= backtotop  class="show"를 추가한다.
        backToTop.classList.add('show');
    } else {
        backToTop.classList.remove('show');
    }
}

const moveBackToTop = () => {
    if (window.pageYOffset > 0) {
        //스무스하게 스크롤 하기 //어디까지 올라갈지 위치를 정한다. behavior 자연스럽게 이동.
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
}


// 스크롤할때마다, checkScroll을 호출해라.
window.addEventListener('scroll', checkScroll);
// 클릭하면 oveBackToTop를 호출해라
backToTop.addEventListener('click', moveBackToTop);