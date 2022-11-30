const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            apiUrl: 'server.php'
        }
    },
    methods: {
        getTasks(url) {
            axios.get(url)
                .then(resp => {
                    console.log(resp);
                    this.tasks = resp.data
                })
                .catch(err => {
                    console.error(err.message);
                })
        }
    },
    mounted() {
        this.getTasks(this.apiUrl);
    }
}).mount('#app')