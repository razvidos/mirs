<template>
    <div>
        <h3>Hotel List</h3>
        <ul>
            <li v-for="item in modelValue">[{{ item.id }}] {{ item.name }} - {{ item.address }}</li>
        </ul>
        <button @click="myFunc">$root.myVar2</button>
    </div>
</template>

<script>
export default {
    name: "HotelList",
    props: ['modelValue'],
    data() {
        return {
            // hotelList: {},
        }
    },
    methods: {
    },
}
</script>

<style scoped>

</style>
