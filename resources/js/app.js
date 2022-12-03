import {createApp} from "vue";
import {createVuetify} from 'vuetify';
import {createRouter, createWebHashHistory} from "vue-router";
import 'vuetify/styles'
import axios from 'axios';
import Lang from 'lang.js';

import Cursova from "./pages/Cursova.vue";
import Laba1 from "./pages/Laba1.vue";
import Laba2 from "./pages/Laba2.vue";
import Laba3 from "./pages/Laba3.vue";
import App from "./App.vue";

const router = createRouter({
    history: createWebHashHistory(),
    routes: [
        { path: '/curs', component: Cursova },
        { path: '/laba1', component: Laba1 },
        { path: '/laba2', component: Laba2 },
        { path: '/laba3', component: Laba3 },
    ],
})

const vuetify = createVuetify({
    ssr: true,
})

const lang = new Lang({
    messages: translations,
    locale: defaultLocale,
    fallback: fallbackLocale
});

const app = createApp(App);
app.use(vuetify);

app.use(router);
app.config.globalProperties.$http = axios;
app.config.globalProperties.$trans = lang;
app.mount('#app');
