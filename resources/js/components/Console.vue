<template>
    <error-message>{{ error }}</error-message>
    <h1>SQL Console</h1>
    <input v-show="false" v-model="queryId"> <br><br>
    <input type="text" v-model="queryName"> <br><br>
    <textarea type="text" v-model="queryText" rows="5">
    </textarea>
    <br> <br>
    <button v-for="(item, index) in setups"
            @click="SetUp(index)"
            :key="item.id"
    >{{ item.name }}</button>
    <br> <br>
    <button @click="saveQuery">Save</button>
    <button @click="deleteQuery">Delete</button>
    <button @click="runQuery">Run</button>
</template>

<script>
import ErrorMessage from "./errorMessage.vue";
export default {
    name: "console",
    components: {ErrorMessage},
    provide: ['hotelList'],
    data() {
        return {
            queryId: "",
            queryText: "",
            queryName: "",
            error: "",
            setups: {'1': '123123'},
        }
    },
    mounted() {
        this.setupLoadItems();
    },
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
                this.$http.post('/runQuery', params)
                    .then(response => {return response.data;})
                    .then(hotelList => {
                        this.$emit('updateHotelList', hotelList);
                        this.hotelList = hotelList;
                    });
            }
        },
        saveQuery() {
            if (this.queryText) {
                const params = {
                    query: this.queryText,
                    name: this.queryName,
                };
                this.$http.post('/query', params)
                    .then(response => {return response.data;})
                    .then(result => {
                        console.log(result);
                        this.setupLoadItems();
                    });
            }
        },
        deleteQuery() {
            this.$http.delete('/query/' + this.queryId)
                .then(response => {return response.data;})
                .then(result => {
                    console.log(result);
                    this.clearForm();
                    this.setupLoadItems();
                });
        },
        SetUp(key) {
            this.queryId = this.setups[key].id;
            this.queryName = this.setups[key].name;
            this.queryText = this.setups[key].query;
        },
        setupLoadItems() {
            this.$http.get('/query').then(response => {
                this.setups = response.data;
                console.log(this.setups);
            })
        },
        clearForm() {
            this.queryId = '';
            this.queryName = '';
            this.queryText = '';
        }
    }
}
</script>

<style scoped>
button {
    margin: 0 10px;
}
</style>
