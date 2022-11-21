<template>
    <error-message>{{ error }}</error-message>
    <h1>SQL Console</h1>
    <textarea type="text" v-model="queryText" rows="5" cols="50">
    </textarea>
    <button @click="SetUp('*')">*</button>
    <br>
    <button @click="runQuery">Run</button>
</template>

<script>
import ErrorMessage from "./errorMessage.vue";
export default {
    name: "console",
    components: {ErrorMessage},
    data() {
        return {
            queryText: "",
            error: "",
            setups: {'*': 'select * from hotels where 1=1'},
        }
    },
    provide: ['hotelList'],
    watch: {
        queryText() {
            if (!this.queryText) {
                this.error = "No query text";
            } else {
                this.error = '';
            }
        }
    },
    methods: {
        runQuery() {
            if (this.queryText) {
                const params = {queryText: this.queryText};
                console.log(params);
                this.$http.post('/query', params)
                    .then(response => {return response.data;})
                    .then(hotelList => {
                        this.$emit('updateHotelList', hotelList);
                        this.hotelList = hotelList;
                    });
            }
        },
        SetUp(key) {
            this.queryText = this.setups[key];
        }
    }
}
</script>

<style scoped>
button {
    margin: 0 10px;
}
</style>
