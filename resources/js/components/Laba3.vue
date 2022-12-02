<template>
    <header>Laba3</header>
</template>

<script>

// import Keyboard from "./calc/Keyboard.vue";
// import CalcInput from "./calc/CalcInput.vue";

export default {
    name: "Application",
    // components: {Keyboard, CalcInput},
    data() {
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
