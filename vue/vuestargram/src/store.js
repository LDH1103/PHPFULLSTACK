// vuex 설치 : npm install vuex@next
// 파일이름은 상관없긴 하지만, 개발자들끼리의 암묵적인 약속으로 store.js로 사용

// 엑시오스 설치 : npm install axios

import { createStore } from 'vuex';
import axios from 'axios';

const store = createStore({
    state() {
        return {
            boardData: [], // 게시글 데이터 저장
            lastId: '', // 가장 마지막에 로드된 게시물의 ID
            moreBtn: true, // 더보기 버튼 flg
            tabFlg: 0, // 탭 UI 플래그 (0 : 메인, 1 : 필터, 2 : 작성)
            imgUrl: '', // 이미지 url
            imgFilter: '',
            postImg: null,
            postContent: '',
        }
    },
    // 일반적인 JS함수 정의
    // state의 변수를 수정하려면 mutations을 통해 수정해야함(개발자들 간의 규칙)
    mutations: {
        // 초기 데이터 세팅용
        // state : store를 가리킴
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length - 1].id);
        },
        // 작성글 데이터 세팅
        addWriteData(state, data) {
            state.boardData.unshift(data);
        },
        // lastID 변경
        changeLastId(state, id) {
            state.lastId = id;
        },
        // 더보기 데이터 세팅
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // changeMoreBtn(state) {
        //     state.moreBtn = false;
        // },
        // 탭UI flg 변경
        changeTabFlg(state, num) {
            state.tabFlg = num;
        },
        // imgUrl 변경
        changeImgUrl(state, url) {
            state.imgUrl = url;
        },
        changeFilter(state, filter) {
            state.imgFilter = filter;
        },
        changeNone(state) {
            state.imgFilter = '';
            state.imgUrl = '';
            state.postImg = null;
        },
        changePostContent(state, content) {
            state.postContent = content;
        },
        changePostImg(state, img) {
            state.postImg = img;
        },
    },
    // Ajax나 비동기처리같은, 시간이 오래 걸리는것들 정의
    actions: {
        // 메인 게시글 습득
        // context : store를 가리킴
        getMainList(context) {
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                console.log(res.data);
                // mutations의 함수 사용하기 : this나 context.commit('함수명', 보내줄 데이터)
                context.commit('createBoardData', res.data)
            })
            .catch( err => 
                console.log(err) 
            )
        },
        // 게시글 추가 습득
        getMoreList(context) {
            axios.get(`http://192.168.0.66/api/boards/${context.state.lastId}`)
            .then(res => {
                if(res.data) {
                    context.commit('addBoardData', res.data);
                } 
                // else {
                    // context.state.moreBtn = false;
                    // context.commit('changeMoreBtn');
                    // alert('없어용.');
                // }
            })
            .catch( err => 
                console.log(err) 
            )
        },
        // 게시글 작성
        writeContent(context) {

            const header = {
                headers: {
                    'Content-Type' : 'multipart/form-data',
                }
            };

            const data = {
                name: '이동호'
                ,img: context.state.postImg
                ,filter: context.state.imgFilter
                ,content: context.state.postContent // 150자
            }

            axios.post('http://192.168.0.66/api/boards', data, header)
            .then( res => {
                // console.log(res);
                context.state.commit('changeNone');
                context.state.commit('changeTabFlg', 0);
                context.state.commit('addWriteData', res.data);
                alert('작성 완료.');
                // context.dispatch('getMainList');
            })
            .catch( err => {
                alert('catch 에러');
                console.log(err);
            })
        }
    }
})

export default store