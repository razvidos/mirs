<template>
    <div>
        <h3>Hotel List</h3>
        <ul>
            <li v-for="item in modelValue">[{{ item.id }}] {{ item.name }} - {{ item.address }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "HotelList",
    props: ['modelValue'],
}
</script>

<style scoped>

</style>
