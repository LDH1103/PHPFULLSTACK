<template>
    <div>
        <h1>MainComponent</h1>
        <button @click="login()" v-if="!$store.state.isToken">로그인</button>
        <button @click="logout()" v-else>로그아웃</button>
        {{ $store.state.token }}
    </div>
</template>
<script>
export default {
    name: 'MainComponent',
}
</script>
<style>
    
</style>