<template>
    <div v-if="companies">
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Ville</th>
            </tr>
            </thead>
            <tr v-for="company in companies" :key="company.id">
                <td>{{ company.name }}</td>
                <td>{{ company.town }}</td>
            </tr>
        </table>
    </div>
</template>

<script lang="ts" setup>
import { onMounted } from 'vue';
import useCompanies from '../composables/companies';

const { companies, getCompanies } = useCompanies();

onMounted(getCompanies);
</script>

<style scoped>
table {
    width: 100%;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

th {
    padding-bottom: 10px;
}
</style>
