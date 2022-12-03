<template>
    <button @click="setLocale('ua')">
        <img src="https://sites.google.com/site/simvoliukraieni899/_/rsrc/1390405058112/home/derzavni-simvoli-ukraieni/derzavnij-prapor-ukraieni/1_558.jpg" alt=""
             style="height:50px;"
        >
    </button>
    <button @click="setLocale('en')">
        <img src="https://images.prom.ua/1679703730_w449_h430_prapor-velikobritaniyi.jpg" alt=""
             style="height:50px;"
        >
    </button>
</template>

<script>
export default {
    name: "Localization",
    methods: {
        setLocale(locale) {
            location.pathname = `/${locale}`;
        },
    }
}
</script>

<style scoped>

</style>
