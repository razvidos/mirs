<template>
    <v-container>
        <v-sheet>
            <v-card-title v-text="$trans.get('app.nav.laba1')"></v-card-title>
            <v-card-text class="d-flex align-center">
                <div class="pa-2 text-h3" v-text="$trans.get('laba1.author.last_name')"></div>
                <div class="pa-2 ml-auto">
                    <img class="pa-2 ml-auto" src="/drawable/myCircle.svg" alt="" height="100" width="100" style="margin: auto;">
                </div>
            </v-card-text>
            <v-card-actions class="justify-start">
                <Localization/>
            </v-card-actions>
        </v-sheet>
    </v-container>
</template>

<script>
import Localization from "../components/Localization.vue"
export default {
    name: "Application",
    components: {Localization},
}
</script>
