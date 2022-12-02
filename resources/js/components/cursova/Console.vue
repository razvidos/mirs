<template>
    <v-card class="ma-4">
        <v-card-title>SQL Console</v-card-title>
        <v-card-text>
            <v-form v-model="valid">
                <v-container>
                    <v-row>
                        <v-col cols="12">
                            <v-text-field variant="solo"
                                          label="Name"
                                          v-model="queryName"
                                          :rules="rules.name"
                                          required
                            ></v-text-field>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-col cols="12">
                            <v-textarea variant="solo"
                                        label="Query"
                                        v-model="queryText"
                                        :rules="rules.query"
                                        required
                            ></v-textarea>
                        </v-col>
                    </v-row>
                    <v-row>
                        <v-btn v-for="(item, index) in setups"
                               @click.prevent="setUp(index)"
                               :key="item.id">
                            {{ item.name }}
                        </v-btn>
                    </v-row>
                </v-container>
            </v-form>
        </v-card-text>
        <v-card-actions>
            <v-row align="end">
                <v-col>
                    <v-spacer></v-spacer>
                </v-col>
                <v-col cols="2" align-self="end">
                    <v-btn icon="mdi-content-save" color="success" @click="saveQuery"></v-btn>
                    <v-btn icon="mdi-delete" color="error" @click="deleteQuery"></v-btn>
                    <v-btn icon="mdi-arrow-right-drop-circle" color="primary" @click="runQuery"></v-btn>
                </v-col>
            </v-row>
        </v-card-actions>
    </v-card>
</template>

<script>
export default {
    name: "console",
    provide: ['hotelList'],
    data() {
        return {
            valid: false,
            rules: {
                name: [
                    v => !!v || 'Name is required',
                ],
                query: [
                    v => !!v || 'Query is required',
                ],
            },
            queryId: "",
            queryText: "",
            queryName: "",
            setups: {},
        }
    },
    mounted() {
        this.setupLoadItems();
    },
    watch: {},
    methods: {
        runQuery() {
            if (this.queryText) {
                const params = {queryText: this.queryText};
                this.$http.post('/runQuery', params)
                    .then(response => {
                        return response.data;
                    })
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
                    .then(response => {
                        return response.data;
                    })
                    .then(result => {
                        console.log(result);
                        this.setupLoadItems();
                    });
            }
        },
        deleteQuery() {
            this.$http.delete('/query/' + this.queryId)
                .then(response => {
                    return response.data;
                })
                .then(result => {
                    console.log(result);
                    this.clearForm();
                    this.setupLoadItems();
                });
        },
        setUp(key) {
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
