<template>
    <router-link v-for="item in items" :to="'/' + item">
        <v-btn>
            <div v-text="$trans.get('app.nav.' + item)"></div>
        </v-btn>
    </router-link>
</template>

<script>
export default {
    name: "Navigation",
    data() {
        return {
            items: ['curs', 'laba1', 'laba2', 'laba3'],
        }
    },
}
</script>
