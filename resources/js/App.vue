<template>
    <v-app :theme="theme">
        <v-app-bar title="MIRS">
            <Navigation/>
            <Localization compact />
            <v-btn
                :prepend-icon="theme === 'light' ? 'mdi-weather-sunny' : 'mdi-weather-night'"
                @click="toggleTheme"
                v-text="$trans.get('app.toggleTheme')"
            ></v-btn>
        </v-app-bar>
        <v-main>
            <router-view></router-view>
        </v-main>
    </v-app>
</template>

<script>
import Navigation from "./components/Navigation.vue"
import Localization from "./components/Localization.vue"
export default {
    name: "App",
    components: {
        Navigation,
        Localization
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
