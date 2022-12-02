<template>
    <v-app :theme="theme">
        <v-btn
            :prepend-icon="theme === 'light' ? 'mdi-weather-sunny' : 'mdi-weather-night'"
            @click="toggleTheme"
        >Toggle Theme</v-btn>
        <v-app-bar title="Application"></v-app-bar>

        <v-navigation-drawer>...</v-navigation-drawer>

        <v-main>
            <router-view></router-view>
        </v-main>
    </v-app>
    <Navigation/>
</template>

<script>
import Navigation from "./components/Navigation.vue"
export default {
    name: "App",
    components: {
        Navigation
    },
    data() {
        return {
            theme: "dark"
        }
    },
    methods: {
        toggleTheme() {
            this.theme = this.theme === "light"? "dark" : "light"
        }
    }
}
</script>

<style scoped>

</style>
