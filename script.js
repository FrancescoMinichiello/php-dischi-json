const { createApp } = Vue;

createApp({
    data() {
        return {
            list: [],
        }
    },
    methods: {
        getListItem() {
            axios.get('http://localhost/php-dischi-json/api.php')
                .then((response) => {
                    console.log(response);
                    this.list = response.data;
                })
                .catch(function (error) {

                    console.log(error);
                })
        }
    },
    mounted() {
        this.getListItem();
    },
}).mount('#app')