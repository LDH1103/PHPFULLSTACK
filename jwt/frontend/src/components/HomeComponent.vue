<template lang="">
    <div>
        <h1>HomeComponent</h1>
        <div>토큰 : {{ $store.state.isToken }}</div>
        <button @click="btn('login');">Login</button>
        <button @click="btn('main');">Main</button>
    </div>
</template>
<script>
import router from '../router.js';

export default {
    name: 'HomeComponent',
    methods: {
        btn(path) {
            router.push(path);
        }
    }
}
</script>
<style lang="">
    
</style>