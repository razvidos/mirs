<template>
    <Console @update-hotel-list="enemyUpdate" />
    <HotelList v-if="hotelList.length" v-model="hotelList" />
</template>

<script>
import Console from "./cursova/Console.vue";
import HotelList from "./cursova/HotelList.vue";

export default {
    name: "Application",
    components: {Console, HotelList},
    data() {``
        return {
            hotelList: [],
        }
    },
    methods: {
        enemyUpdate(list) {
            this.hotelList = list;
        }
    },
}
</script>
