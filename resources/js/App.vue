<template>
    <Navigation/>
    <!-- Dynamic view based on routing system here -->
    <main>
        <router-view></router-view>
    </main>
</template>

<script>
import Navigation from "./components/Navigation.vue"
export default {
    name: "App",
    components: {
        Navigation
    }
}
</script>

<style scoped>

</style>
