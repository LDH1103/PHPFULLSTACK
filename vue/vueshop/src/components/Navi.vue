<template>
    <!-- 네비 -->
    <nav class="nav">
        <a href="#" v-for="item in navList" :key="item">{{ item }}</a>
    </nav>
    <!-- <nav class="nav">
        <a href="#">홈</a>
        <a href="#">상품</a>
        <a href="#">기타</a>
        <a href="#">{{ product1 }}</a>
    </nav> -->
</template>
<script>
export default {
    name : 'Navi',
    props : {
        // 받은 이름 : 데이터 타입
        product1 : String
        ,navList : Array
    }
}
</script>
<style>
    
</style>