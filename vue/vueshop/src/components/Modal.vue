<template>
    <!-- <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
            <h4>상품명</h4>
            <p>설명</p>
            <p>원</p>
            <span>개</span>
            <br>
            <button>수량증가</button>
            <button>수량감소</button>
            <br>
            <button @click="$emit('closeModal')">닫기</button>
        </div>
    </div> -->
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
            <img :src="products[productNum].img" alt="이미지" style="width : 200px;">
            <h4>{{ products[productNum].name }}</h4>
            <p>{{ products[productNum].content }}</p>
            <p>{{ products[productNum].price * products[productNum].count }}원</p>
            <span>{{ products[productNum].count }}</span>
            <br>
            <button @click="$emit('countPlus')">수량증가</button>
            <button @click="$emit('countMinus')">수량감소</button>
            <br>
            <button @click="$emit('closeModal')" class="pointer">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Modal'
    , props: {
        modalFlg: Boolean
        ,productNum : Number
        ,products : Array
    }
}
</script>
<style></style>