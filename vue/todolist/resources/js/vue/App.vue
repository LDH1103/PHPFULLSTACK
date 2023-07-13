<template>
    <div class="container">
        <HeaderComponent @storeBtn="storeContent()" />
        <br>
        <ListComponent 
            v-for="data in listData" :key="data" :data="data"
            @deleteBtn="deleteContent(data.id)"
            @changeCom="changeCom(data)"
        />
    </div>
    <div class="loadingBox" v-if="loading">
        <div class="dim"></div>
        <div class="circle"></div>
    </div>
</template>
<script>
import ListComponent from './components/ListComponent.vue';
import HeaderComponent from './components/HeaderComponent.vue';

export default {
    name: 'App',
    components: {
        ListComponent,
        HeaderComponent,
    },
    data() {
        return {
            listData: [],
            loading: false,
        }
    },
    created() {
        this.getMainList();
    },
    methods: {
        refreshPage() {
            window.location.reload();
        },
        createListData(data) {
            this.listData = data;
        },
        async getMainList() {
            this.loading = true;

            axios.get('http://localhost:8000/api/items')
            .then(res => {
                console.log(res.data);
                this.createListData(res.data);
                this.loading = false;
            })
            .catch( err => {
                this.loading = false;
                console.log(err); 
            });
        },
        addStoreData(data) {
            this.listData.unshift(data);
        },
        storeContent() {
            this.loading = true;

            let InputStore = document.getElementById('InputStore');

            let storeData = {
                "item": {
                    "content": InputStore.value
                }
            }

            axios.post('http://localhost:8000/api/items', storeData)
            .then(res => {
                this.addStoreData(res.data)
                InputStore.value = '';
                this.loading = false;
            })
            .catch( err => { 
                this.loading = false;
                console.log(err); 
                alert('에러');
            });
        },
        deleteContent(id) {
            this.loading = true;

            axios.delete('http://localhost:8000/api/items/' + id)
            .then(res => {
                const index = this.listData.findIndex(item => item.id === id);
                if (index !== -1) {
                    this.listData.splice(index, 1);
                }
                this.loading = false;
            })
            .catch( err => { 
                this.loading = false;
                console.log(err); 
                alert('에러');
            });
        },
        changeCom(data) {
            this.loading = true;

            let udtData = {
                "item": {
                    "completed": !data.completed,
                    "completed_at": new Date(),
                }
            }

            axios.put('http://localhost:8000/api/items/' + data.id, udtData)
            .then(res => {
                const index = this.listData.findIndex(item => item.id === data.id);
                if (index !== -1) {
                    this.listData[index].completed = !data.completed;
                }
                this.loading = false;
            })
            .catch( err => { 
                this.loading = false;
                console.log(err); 
                alert('에러');
            });
        },
    },
}
</script>
<style>
@font-face {
    font-family: 'TheJamsil5Bold';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2302_01@1.0/TheJamsil5Bold.woff2') format('woff2');
    font-weight: 700;
    font-style: normal;
}

.container {
    width: 700px;
    margin: 0 auto;
    font-family: 'TheJamsil5Bold';
}

.header {
    text-align: center;
    background-color: rgba(135, 207, 235, 0.416);
    color: white;
    padding: 20px;
}

.list {
    padding: 5px;
    background-color: rgba(120, 159, 255, 0.103);
    display: grid;
    grid-template-columns: 0.5fr 5fr 0.5fr;
    border-top: 1px solid #000;
}

.list:last-child {
    border-bottom: 1px solid #000;
}

.divContent {
    margin-top: 3px;
}

.storeBtn {
    margin-left: 10px;
}

.cancleLine {
    text-decoration: line-through;
    color: #808080;
}

.loadingBox .dim {
    position:fixed;
    left:0;
    top:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,.7);
}

.loadingBox .circle {
    position:fixed;
    left:50%;
    top:50%;
    transform:translate(-50%, -50%);
    width:40px;
    height:40px;
    border:10px solid #fff;
    border-top:10px solid rgba(0, 174, 255, 0.686);
    border-radius:50em;
    transition:all .2s;
    animation-name:spinCircle;
    animation-duration:.8s;
    animation-iteration-count:infinite;
    animation-timing-function:linear;
}

@keyframes spinCircle {
    from {
        transform:translate(-50%, -50%) rotate(0);
    }
    to {
        transform:translate(-50%, -50%) rotate(360deg);
    }
}

</style>