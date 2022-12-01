import {createApp} from "vue";
import {createVuetify} from 'vuetify';
import {createRouter, createWebHashHistory} from "vue-router";
import axios from 'axios';
import Lang from 'lang.js';

import Cursova from "./components/Cursova.vue";
import Laba1 from "./components/Laba1.vue";
import Laba2 from "./components/Laba2.vue";
import Laba3 from "./components/Laba3.vue";
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

const default_locale = window.default_language;
const fallback_locale = window.fallback_locale;
const lang = new Lang({
    messages:{
        'en.l1': {
            'pageName': 'Laba 1',
            'name': 'Ihor',
            'last_name': 'Solomianiy',
        },
        'ua.l1': {
            'pageName': 'Лаба 1',
            'name': 'Ігор',
            'last_name': 'Соломʼяний',
        }
    },
    locale: default_locale,
    fallback: fallback_locale
});

const app = createApp(App);
app.use(vuetify);

app.use(router);
app.config.globalProperties.$http = axios;
app.config.globalProperties.trans = lang;
app.mount('#app');
