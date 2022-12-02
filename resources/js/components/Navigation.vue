<template>
    <header>
        <nav>
            <ul>
                <li>
                    <router-link to="/curs">Курсова</router-link>
                </li>
                <li>
                    <router-link to="/laba1">Лаба 1</router-link>
                </li>
                <li>
                    <router-link to="/laba2">Лаба 2</router-link>
                </li>
                <li>
                    <router-link to="/laba3">Лаба 3</router-link>
                </li>
            </ul>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Navigation"
}
</script>
