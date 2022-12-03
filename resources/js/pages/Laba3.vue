<template>
    <v-container>
        <v-sheet>
            <v-col cols="6">
                <v-card-title v-text="$trans.get('app.nav.laba3')"></v-card-title>
                <v-text-field
                    label="first number"
                    v-model="firstNumber"
                >
                </v-text-field>
            </v-col>
            <v-col cols="6">
                <v-text-field
                    label="second number"
                    v-model="secondNumber"
                >
                </v-text-field>
            </v-col>
            <v-col cols="6">
                <v-text-field
                    label="result"
                    v-model="result"
                >
                </v-text-field>
            </v-col>
            <v-card-actions class="ma-3">

                <v-row>
                    <v-btn v-for="operator in operators"
                           :active="calcOperator===operator"
                           @click="calcOperator=operator">{{ operator }}</v-btn>
                </v-row>
            </v-card-actions>
        </v-sheet>
    </v-container>
</template>

<script>
export default {
    name: "Application",
    data() {
        return {
            firstNumber: null,
            secondNumber: null,
            calcOperator: null,
            operators: ['+', '-', '*', '/', '%', '**']
        }
    },
    computed: {
        result() {
            if (!this.firstNumber || !this.secondNumber || !this.calcOperator) {
                return null;
            }
            return eval(this.firstNumber + this.calcOperator + this.secondNumber);
        }
    },
}
</script>
