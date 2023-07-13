<template lang="">
    <div class="header">
        <h1>Todo List</h1>
        <div>
            <input type="text" placeholder="할일을 적어주세요." id="InputStore" @keydown.enter="$emit('storeBtn')">
            <button type="button" @click="$emit('storeBtn')" class="storeBtn">등록</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'HeaderComponent'
}
</script>
<style lang="">
</style>