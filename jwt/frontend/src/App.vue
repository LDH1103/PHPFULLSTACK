<template>
  <div>
    <!-- <button @click="login()">로그인</button> -->
    <!-- <br> -->
    <!-- <div class="response-data" v-if="token">{{ token }}</div> -->
    <!-- <div v-if="token !== ''">
      메인 페이지
      <br>
      <br>
      로그인한 아이디 : {{ user_id }}
      <br>
      <br>
      <button @click="logout()">로그아웃</button>
    </div> -->
    <!-- <div v-else>
      로그인이 필요합니다
      <br>
      <br>
      <input type="text" v-model="input_id">
      <br>
      <br>
      <button @click="login(input_id)">로그인</button>
      <br>
      <br>
      <div v-if="err !== ''" style="color: red;">{{ err }}</div>
    </div> -->
    <router-view />
    <br>
    <button @click="home()">홈으로</button>
  </div>
</template>

<script>
// import axios from "axios";
import router from './router';

export default {
  name: 'App',
  components: {
    
  },
  data() {
    return {
      // token: '',
      // input_id: '',
      // user_id: '',
      // err: '',
    }
  },
  methods: {
    login() {
      router.push('main');
    },
    logout() {
      router.push('login');
    },
    home() {
      router.push('/');
    },
    // login() {
    //   axios.get('http://localhost:8000/api/token?id=mimimi')
    //   .then(res => {
    //     console.log(res.data);
    //     this.$store.state.token = res.data.token;
    //   })
    //   .catch(err => {
    //     if (err.status >= 400) {
    //       console.log(err);
    //     }
    //   });
    // },
    // logout() {
      // this.token = ''; // 토큰 초기화
      // this.user_id = ''; // 유저아이디 초기화
      // this.err = '';
    // },
  },
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
