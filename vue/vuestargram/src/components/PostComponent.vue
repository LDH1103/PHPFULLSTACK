<template>
    <!-- {{ $store.state.boardData }} -->
    <div class="post" v-for="data in $store.state.boardData" :key="data">
        <!-- 이미지 -->
        <div class="post-img" :class="data.filter" :style="{ backgroundImage: `url(${data.img})` }"></div>

        <div class="post-content">
            <p>좋아요 {{data.likes}}</p>
            <p>
                <strong>{{ data.name }}</strong>
                <br>
                {{ data.content }}
            </p>
            <p>{{ data.created_at }}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PostComponent'
}
</script>
<style>
    
</style>