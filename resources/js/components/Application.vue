<template>
    <header>Application</header>
    <ul>
        <li>
            <Console @update-hotel-list="enemyUpdate" />
        </li>
        <li>
            <HotelList v-model="hotelList" />
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
            hotelList: [{id: 1}, {id: 2}, {id: 3}],
        }
    },
    methods: {
        enemyUpdate(list) {
            // console.log(list);
            this.hotelList = list;
        }
    },
    watch: {
      myVar2 (value) {
          console.log(value);
          console.log(this.$root.myVar2);
      }
    },
    mounted() {
        this.$root.myVar = 1;
        console.log(this.$root.myVar2);
        console.log(this.myVar2);
        // this.$root.on('update:hotelList', hotelList => {
        //     console.log(hotelList);
        // });
    },
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
</style>
