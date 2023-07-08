<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- 네비 -->
  <!-- <nav class="nav">
    <a href="#">홈</a>
    <a href="#">상품</a>
    <a href="#">기타</a>
  </nav> -->
  <!-- 컴포넌트 -->
  <!-- 부모가 데이터 바인딩한 데이터 자식에 보내주기  -->
  <!-- :보내줄 이름="보내줄 변수" -->
  <!-- <Navi :product1="product1"/> -->
  <Navi :navList="navList" />
  <!-- <Navi></Navi>랑 같음 -->

  <!-- 모달 -->
  <!-- <div class="bg_black" v-if="modalFlg">
    <div class="bg_white">
      <img src="./assets/티셔츠.jpg" alt="이미지" style="width : 200px;">
      <h4>상품명</h4>
      <p>설명</p>
      <p>가격</p>
      <button @click="modalFlg = false" class="pointer">닫기</button>
    </div>
  </div> -->
  <!-- <div class="bg_black" v-if="modalFlg">
    <div class="bg_white">
      <img :src="require(`@/assets/${products[productNum].img}`)" alt="이미지" style="width : 200px;">
      <h4>{{ products[productNum].name }}</h4>
      <p>{{ products[productNum].content }}</p>
      <p>{{ products[productNum].price * products[productNum].count }}원</p>
      <span>{{ products[productNum].count }}</span>
      <br>
      <button @click="plus(productNum)">수량증가</button>
      <button @click="minus(productNum)">수량감소</button>
      <br>
      <button @click="modalFlg = false" class="pointer">닫기</button>
    </div>
  </div> -->

  <!-- 상품 리스트 -->
  <!-- <div>
    <h4>{{ product1 }}</h4>
    <p>{{ price1 }}원</p>
  </div>
  <div>
    <h4 :style="styleR">{{ product2 }}</h4>
    <p>{{ price2 }}원</p>
  </div> -->
  <!-- <div> -->
  <!-- 값만 -->
  <!-- <h4 v-for="item in products" :key="item">{{ item.name }}</h4>  -->
  <!-- <h4 v-for="item in products" :key="item">{{ item }}</h4>  -->
  <!-- 인덱스 -->
  <!-- <h4 v-for="(item, i) in products" :key="i">{{ i }}</h4> -->
  <!-- <div v-for="item in products" :key="item">
    <h4>{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
  </div> -->

  <!-- if -->
  <!-- <p v-if="1 === '1'">if문 테스트</p> -->
  <Modal @closeModal="modalFlg = false" :modalFlg="modalFlg" :productNum="productNum" :products="products"
    @countPlus="plus(productNum)" @countMinus="minus(productNum)" />
  <ProductList :product="product" @toggleModal="modalToggle(i)" @product="productNum = i" v-for="(product, i) in products"
    :key="i" />
  <!-- 이벤트 핸들러 -->
  <!-- <div v-for="(item, i) in products" :key="item">
    <img :src="require(`@/assets/${item.img}`)" alt="이미지" style="width : 200px;"> -->
  <!-- <img :src="item.img" alt="이미지" style="width : 200px;"> -->
  <!-- <h4 @click="modalToggle(i)" class="pointer">{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
    <p>{{ item.count }}개</p>
    <br> -->
  <!-- <button v-on:click="item.count++">수량증가</button> -->
  <!-- <button v-on:click="item.count--">수량감소</button> -->
  <!-- <button @click="item.count++">수량증가</button> -->
  <!-- <button @click="item.count--">수량감소</button> -->
  <!-- </div> -->
</template>

<script>
// JS파일 받아오기
import data from './assets/js/data.js';

// 컴포넌트
import Navi from './components/Navi.vue';
import ProductList from './components/ProductList.vue';
import Modal from './components/Modal';

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      navList: ['홈', '상품', '기타']
      , products: data // import로 받아온 data 사용
      // products : [
      //   // {name : '티셔츠', price : '3800', count : 1, img : '티셔츠.jpg'}
      //   // ,{name : '바지', price : '5000', count : 1, img : '바지.jpg'}
      //   // ,{name : '점퍼', price : '10000', count : 1, img : '점퍼.jpg'}
      //   {name : '티셔츠', price : '3800', count : 1, img : require('@/assets/티셔츠.jpg')}
      //   ,{name : '바지', price : '5000', count : 1, img : require('@/assets/바지.jpg')}
      //   ,{name : '점퍼', price : '10000', count : 1, img : require('@/assets/점퍼.jpg')}
      // ]
      , product1: '양말'
      // ,price1 : '3800'
      // ,product2 : '바지'
      // ,price2 : '5000'
      // ,styleR : 'color : red'
      , modalFlg: false
      , productNum: 0
    }
  },
  // 함수를 설정하는 영역
  methods: {
    plus(i) {
      this.products[i].count++;
    }
    , minus(i) {
      if (this.products[i].count > 0) {
        this.products[i].count--;
      }
    }
    , modalToggle(i) {
      this.modalFlg = !this.modalFlg;
      this.productNum = i;
    }
    , modalClose(i) {
      this.modalFlg = false;
      this.products[i].count = 1;
    }
  },
  // 컴포넌트 정의
  components: {
    Navi
    , ProductList
    , Modal
  }
}
</script>

<style>
/* css파일 불러오기 */
@import url('./assets/css/app.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

/* .nav {
  background-color: #2c3e50;
  padding: 15px;
  border-radius: 10px;
}

.nav a {
  color: white;
  text-decoration: none;
  padding: 10px;
} */
</style>
