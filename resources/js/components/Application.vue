<template>
    <h1>Application</h1>
    <Console @update-hotel-list="enemyUpdate" />
    <HotelList v-model="hotelList" />
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

<style scoped>

</style>
