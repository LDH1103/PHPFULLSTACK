<template lang="">
    <div>
        <h1>PostComponent.vue</h1>
        {{ test }}
        {{ propsTest }}
    </div>
</template>
<script>
import { toRefs } from 'vue';

export default {
    name: 'PostComponent' 
    ,props: {
        test: Number,
        propsTest: Number,
    },
    setup(props) {
        let { propsTest } = toRefs(props);
        console.log(propsTest.value);

        return {  };
    },
}
</script>
<style lang="">
    
</style>