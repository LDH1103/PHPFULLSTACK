<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- 라우터 설치 : npm install vue-router@4 -->
  <h1>App.vue</h1>
  {{ test }}
  <br>
  <button @click="test = '김김김'">test</button>
  <br>
  {{ data.name }}
  <br>
  <button @click="data.name = '김김김'">data</button>
  <br>
  {{ data2.name }}
  <br>
  <button @click="data2.name = '김김김'">test</button>
  
  <br>
  <!-- <ContainerComponent v-if="flg" />
  <PostComponent /> -->

  <!-- 라우터 방식 -->
  <!-- <router-view></router-view> -->
  <router-view :test="222"></router-view>

  <!-- 라우터 이동용 a태그 -->
  <router-link to="/">홈으로</router-link>
  <br>
  <router-link to="/post">post로</router-link>

  <PostComponent :propsTest="1" />

</template>

<script>
import PostComponent from './components/PostComponent.vue';
// 컴포지션 api 사용
import { ref, reactive } from 'vue';

export default {
  name: 'App',
  setup() {
    // 실시간 리렌더링 가능
    // ref : 모든 데이터타입 리렌더링 가능
    let data = ref({
      name: '홍길동'
      ,age: 20
    });
    // reactive : 객체타입 리렌더링 가능
    let data2 = reactive({
      name: '철수'
      ,age: 5
  });
    // 실시간 리렌더링 안됨
    let test = 'aaa';

    return { test, data, data2 }
  },
  components: {
    PostComponent,
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
