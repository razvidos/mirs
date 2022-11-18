<template>
    <error-message>{{ error }}</error-message>
    <label for="">SQL Console</label>
    <input type="text" v-model="queryText">
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
                        /*this.$emit('enemyLoad', result)*/
                        this.$emit('updateHotelList', hotelList);
                        this.hotelList = hotelList;
                    });
            }
        }
    }
}
</script>

<style scoped>

</style>
