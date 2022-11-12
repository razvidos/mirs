import {createApp} from "vue";
import ExampleComponent from "./components/ExampleComponent.vue";
import axios, {isCancel, AxiosError} from 'axios';


createApp(ExampleComponent).mount('#app');

axios.post(import.meta.env.VITE_FIRE_BASE_URL + 'hotel.json', {
    params: {
        name: 'Hreshtyk Hotel', city: 'Kyiv',
    }
})
    .then(function (response) {
        console.log(response);
    })
    .catch(function (error) {
        console.log(error);
    })
    .finally(function () {
        // always executed
    });
