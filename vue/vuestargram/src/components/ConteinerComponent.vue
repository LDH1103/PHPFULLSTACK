<template>
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg == 0">
        <PostComponent />
    </div>

    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabFlg == 1">
        <!-- 이미지 표시 -->
        <div class="upload-img" :class="$store.state.imgFilter" :style="{ backgroundImage: `url(${$store.state.imgUrl})` }"></div>

        <!-- 필터 표시 -->
        <div class="filter-box">
            <div class="filter" @click="$store.commit('changeFilter', item);" v-for="item in filterList" :key="item" :class="item" :style="{ backgroundImage: `url(${$store.state.imgUrl})` }">{{ item }}</div>
        </div>
    </div>

    <!-- 글 작성 -->
    <div v-if="$store.state.tabFlg == 2">
        <!-- 이미지 표시 -->
        <div class="upload-img" :style="{ backgroundImage: `url(${$store.state.imgUrl})` }" :class="$store.state.imgFilter"></div>

        <!-- 글 작성 -->
        <div>
            <textarea v-model="content" @input="$store.commit('changePostContent', content)" class="write-box" name="content" id="content" placeholder="글쓰세요"></textarea>
        </div>
    </div>

</template>
<script>
import PostComponent from './PostComponent.vue';

export default {
    name: 'ConteinerComponent',
    data() {
        return {
            filterList: [
                "aden"
                ,"_1977"
                ,"brannan"
                ,"brooklyn"
                ,"clarendon"
                ,"earlybird"
                ,"gingham"
                ,"hudson"
                ,"inkwell"
                ,"kelvin"
                ,"lark"
                ,"lofi"
                ,"maven"
                ,"mayfair"
                ,"moon"
                ,"nashville"
                ,"perpetua"
                ,"reyes"
                ,"rise"
                ,"slumber"
                ,"stinson"
                ,"toaster"
                ,"valencia"
                ,"walden"
                ,"willow"
                ,"xpro2"
            ],
            content : '',
        }
    },
    components: {
        PostComponent
    },
}
</script>
<style>
    
</style>