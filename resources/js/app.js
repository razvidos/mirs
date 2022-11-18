import {createApp} from "vue";
import Application from "./components/Application.vue";

import axios from 'axios';

const app = createApp(Application);

app.config.globalProperties.$http = axios;
app.mount('#app');
