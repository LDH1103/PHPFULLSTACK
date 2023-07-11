<template>
  <!-- store.js 데이터 사용 -->
  <!-- {{ $store.state.test }} -->

  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li class="header-button header-button-left" @click="$store.commit('changeTabFlg', 0); $store.commit('changeNone');" v-if="$store.state.tabFlg != 0">취소</li>
      <li>
        <img class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li class="header-button header-button-right" @click="$store.commit('changeTabFlg', 2);" v-if="$store.state.tabFlg == 1">다음</li>
    </ul>
  </div>

  <!-- 컨텐츠 -->
  <ConteinerComponent />

  <button @click="$store.dispatch('getMoreList')" v-if="$store.state.moreBtn && $store.state.tabFlg == 0">더보기</button>
  <br>
  <br>

  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store">+</label>
      <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
    </div>
  </div>
</template>

<script>
import ConteinerComponent from './components/ConteinerComponent';

export default {
  name: 'App',
  created() {
    // 초기데이터 가져오기
    // actions에 접근 : dispatch
    this.$store.dispatch('getMainList');
  },
  components: {
    ConteinerComponent
  },
  methods: {
    updateImg(e) {
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl', imgUrl);
      this.$store.commit('changeTabFlg', 1);
      e.target.value = '';
    }
  },
}
</script>

<style>
@import url('./assets/css/common.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
