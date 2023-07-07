<template>
    <div @click="$emit('toggleModal', 'product')">
        <img :src="product.img" alt="이미지" style="width : 200px;">
        <!-- <img :src="require('@/assets/'+product.img)" alt="이미지" style="width : 200px;"> -->
        <h4>{{ product.name }}</h4>
        <p>{{ product.price }}원</p>
        <p>{{ product.count }}개</p>
    </div>
</template>
<script>
export default {
    name : 'ProductList'
    ,props : {
        product : Object
    }
}
</script>
<style>
    
</style>