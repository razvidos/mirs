import {createApp} from "vue";
import Application from "./components/Application1.vue";
import axios from 'axios';
import Lang from 'lang.js';

const default_locale = window.default_language;
const fallback_locale = window.fallback_locale;
// const messages = axios.get('http://localhost/js/lang.js',
//     {headers: {'Access-Control-Allow-Origin': "*"}}
// ).then(response => {
//     console.log(response);
//     return response.data;
// });
const app = createApp(Application);

// console.log(messages);

app.config.globalProperties.trans = new Lang({
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

app.config.globalProperties.$http = axios;
app.mount('#app');
