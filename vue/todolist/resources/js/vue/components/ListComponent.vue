<template lang="">
    <div class="list">
        <input type="checkbox" @click="$emit('changeCom')" v-bind="{ 'checked': data.completed }">
        <div class="divContent" :class="{'cancleLine': data.completed }">{{ data.content }}</div>
        <!-- {{ data.completed }} -->
        <!-- {{ data.completed_at }} -->
        <button type="button" @click="$emit('deleteBtn')">삭제</button>
    </div>
</template>
<script>
export default {
    name: 'ListComponent',
    props: {
        data: Object,
    },
}
</script>
<style lang="">
    
</style>