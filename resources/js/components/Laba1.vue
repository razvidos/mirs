<template>
    <header>{{ this.pageName }}</header>
    <v-container>
        <v-row class="ma-2">
            <button @click="setLocale('ua')">
                <img src="https://sites.google.com/site/simvoliukraieni899/_/rsrc/1390405058112/home/derzavni-simvoli-ukraieni/derzavnij-prapor-ukraieni/1_558.jpg" alt=""
                     style="height:50px;"
                >
            </button>
            <button @click="setLocale('en')">
                <img src="https://images.prom.ua/1679703730_w449_h430_prapor-velikobritaniyi.jpg" alt=""
                     style="height:50px;"
                >
            </button>
        </v-row>
        <v-row>
            <span class="typeface">{{ this.last_name }}</span>
        </v-row>
        <v-row>
            <img src="/drawable/myCircle.svg" alt="" height="100" width="100" style="margin: auto;">
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "Application",
    data() {
        return {
            last_name: '',
            pageName: '',
        }
    },

    methods: {
        setLocale(locale) {
            this.trans.setLocale(locale);
            this.updateLocale();
        },
        updateLocale() {
            this.last_name =  this.trans.get('l1.last_name');
            this.pageName =  this.trans.get('l1.pageName');

        }
    },
    mounted() {
        this.updateLocale();
    }
}
</script>
