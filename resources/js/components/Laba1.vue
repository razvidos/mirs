<template>
    <header>{{ this.pageName }}</header>
    <ul>
        <li>
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
        </li>
        <li>
            <span class="typeface">{{ this.last_name }}</span>
            <img src="/drawable/myCircle.svg" alt="" height="100" width="100" style="margin: auto;">
        </li>
    </ul>
</template>

<script>
import Console from "./Console.vue";
import HotelList from "./HotelList.vue";
export default {
    name: "Application",
    components: {Console, HotelList},
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

<style>
* {
    box-sizing: border-box;
}
html {
    font-family: "Jost", sans-serif;
}
body {
    margin: 0;
}
header {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
    margin: 3rem auto;
    border-radius: 10px;
    padding: 1rem;
    background-color: #58004d;
    color: white;
    text-align: center;
    width: 90%;
    max-width: 40rem;
}
#app ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
#app li {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);
    margin: 1rem auto;
    border-radius: 10px;
    padding: 1rem;
    text-align: center;
    width: 90%;
    max-width: 40rem;
}
#app h2 {
    font-size: 2rem;
    border-bottom: 4px solid #ccc;
    color: #58004d;
    margin: 0 0 1rem 0;
}
#app button {
    font: inherit;
    cursor: pointer;
    border: 1px solid #ff0077;
    background-color: #ff0077;
    color: white;
    padding: 0.05rem 1rem;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.26);
}
#app button:hover,
#app button:active {
    background-color: #ec3169;
    border-color: #ec3169;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.26);
}

.typeface {
    font-weight: bold;
    font-style: italic;
    font-size: 24px;
    color: brown;

}
</style>
