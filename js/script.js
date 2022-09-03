Vue.config.devtools = true;


const app = new Vue({
    el: '#root',
    data: {
        discs: [],
        search: '',
    },
    methods: {
        fetchDiscs() {
            axios.get(`../api/index.php`).then(res => {
                this.discs = res.data;
            })
        }
    },
    mounted() {
        this.fetchDiscs()
    }
});

