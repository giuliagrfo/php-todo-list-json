const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            apiUrl: 'server.php',
            newTask: ''
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
        },
        addTodo() {
            const data = {
                newTask: this.newTask
            };

            axios
                .post(this.api_url, data, {
                    headers: { "Content_Type": "multipart/form-data" },
                })
                .then(resp => {
                    this.tasks = resp.data;
                    console.log(resp.data);
                })
        },
        mounted() {
            this.getTasks(this.apiUrl);
        }
    }
}).mount('#app')