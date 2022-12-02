<template>
    <v-table>
        <thead>
        <tr>
            <th class="text-left" id="id">ID</th>
            <th class="text-left" id="name">Name</th>
            <th class="text-left" id="adress">Adress</th>
            <th class="text-left" id="created">Created</th>
            <th class="text-left" id="updated">Updated</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in modelValue">
            <td>{{ item.id }}</td>
            <td>{{ item.name }}</td>
            <td>{{ item.address }}</td>
            <td>{{ item.created_at }}</td>
            <td>{{ item.updated_at }}</td>
        </tr>
        </tbody>
    </v-table>
</template>

<script>
export default {
    name: "HotelList",
    props: ['modelValue'],
}
</script>

<style scoped>

</style>
