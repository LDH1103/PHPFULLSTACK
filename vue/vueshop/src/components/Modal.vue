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
            <!-- <p>{{ products[productNum].price * products[productNum].count }}원</p>
            <span>{{ products[productNum].count }}</span> -->
            <p>{{ products[productNum].price * inputCount }}원</p>
            <span>{{ inputCount }}</span>
            <br>
            <input type="text" v-model="inputCount">
            <br>
            <!-- <br>
            <button @click="$emit('countPlus')">수량증가</button>
            <button @click="$emit('countMinus')">수량감소</button>
            <br>
            <br> -->
            <button @click="$emit('closeModal'); inputCount = 1;" class="pointer">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Modal'
    , data() { // 데이터 바인딩
        return {
            inputCount: 1
        }
    }
    , watch: {
        inputCount() {
            if(this.inputCount > 10) {
                alert('10개까지만 구매 가능합니다.');
                this.inputCount = 10;
            }
        }
    }
    , props: {
        modalFlg: Boolean
        , productNum: Number
        , products: Array
    }
}
</script>
<style></style>