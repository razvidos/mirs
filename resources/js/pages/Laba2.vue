<template>
    <v-container>
        <v-sheet>
            <v-card-title v-text="$trans.get('app.nav.laba2')"></v-card-title>
            <v-card-text>
                <v-card
                    class="d-flex align-start flex-column"
                    color="white"
                    height="150">
                    <v-btn> Button</v-btn>

                </v-card>

                <v-card
                    class="d-flex align-start flex-column"
                    color="grey"
                    height="150">
                    <v-sheet class="py-2 px-9"> Text</v-sheet>

                    <v-sheet class="py-2 px-9 mt-auto align-self-center"> Text</v-sheet>
                </v-card>

                <v-card
                    class="d-flex align-end flex-column"
                    color="white"
                    height="150">
                    <v-sheet class="py-2 px-9" outlined> Text</v-sheet>

                    <v-sheet class="py-2 px-9 mt-auto" outlined> Text</v-sheet>
                </v-card>

                <div class="text-h4 mt-5 mb-1">Беліз</div>
                <v-sheet color="red" height="50"></v-sheet>
                <v-sheet color="blue" height="250"
                         class="d-flex align-center flex-column"
                >
                    <v-img src="../img/Belize.png" height="150" width="150"></v-img>
                </v-sheet>
                <v-sheet color="red" height="50"></v-sheet>

            </v-card-text>
        </v-sheet>

    </v-container>
</template>

<script>
export default {
    name: "Application",
    data() {
        return {}
    },
    methods: {},
}
</script>
